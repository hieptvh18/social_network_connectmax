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

            return $this->respSuccess(['data'=>$model],'Register success!');
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return $this->respError(false,'Something wrong! '.$e->getMessage(),Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function login($request){
        try {
            $credentials = request(['username', 'password']);
            if (!Auth::attempt($credentials)) {
                return response()->json(['status' => 'fail', 'message' => 'Username or password invalid!', 'data' => []], Response::HTTP_UNAUTHORIZED);
            }
            // ok
            $user = Auth::user();

            $token = $user->createToken('token')->plainTextToken;

            $cookie = cookie('jwtlogin', $token, 60 * 24); //1 day

            return response()->json([
                'status' => 'ok',
                'data' => [
                    'token' => $token,
                    'data' => $user
                ],
                'message' => 'Auth success!'
            ], 200)->withCookie($cookie);
        } catch (\Throwable $e) {
            report($e);
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
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
            return response()->json(['status' => 'fail', 'message' => 'Logout fail!'],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
