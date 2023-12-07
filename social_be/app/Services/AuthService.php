<?php

namespace App\Services;

use App\Http\Controllers\Api\AbstractApi;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Modules\SocialNetwork\Events\EventUserRegisterAccount;
use Throwable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class AuthService extends AbstractApi
{
    public function create($request)
    {
        DB::beginTransaction();
        try {
            $model = new User();
            $model->fill($request->all());
            $model->username = uniqid();
            $model->password = Hash::make($request->password);
            $model->save();

            DB::commit();
            event(new EventUserRegisterAccount($model));

            return $model;
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            throw $e;
        }
    }

    public function login($request){
        try {
            $credentials = request(['email', 'password']);
            if (!Auth::attempt($credentials)) {
                return response()->json(['status' => 'fail', 'message' => __('Email or password invalid!'), 'data' => []], Response::HTTP_UNAUTHORIZED);
            }
            // ok
            $user = Auth::user();

            $token = $user->createToken('token')->plainTextToken;

            $resp = response()->json([
                'status' => 'ok',
                'data' => [
                    'token' => $token,
                    'data' => $user
                ],
                'message' => 'Auth success!'
            ], 200);

            // remember login
            if($request->remember){
                $cookie = cookie('jwtlogin', $token, 60 * 24); //1 day
                $resp->withCookie($cookie);
            }

            return $resp;
        } catch (\Throwable $e) {
            report($e);
            throw $e;
        }
    }

    public function logout($request)
    {
        try {
            $cookie = Cookie::forget('jwtlogin');
            $request->user()->currentAccessToken()->delete();
            return response()->json(['status' => 'ok', 'message' => 'Logout success!']);
        } catch (Throwable $e) {
            report($e->getMessage());
            throw $e;
        }
    }
}
