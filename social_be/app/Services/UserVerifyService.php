<?php

namespace App\Services;

use App\Http\Controllers\Api\ApiController;
use App\Models\User;
use App\Models\UserVerify;
use Illuminate\Support\Facades\DB;
use Throwable;

class UserVerifyService extends ApiController
{
    public function __construct(){
        
    }

    public function create($user){
        try{
            DB::beginTransaction();
            // email welcome user register & notifi verify code
            $userVerify = new UserVerify([
                'code' => rand(100000, 999999),
                'expires_at' => \Carbon\Carbon::now()->addDay(15) // 15 day from now
            ]);
            $user->userVerify()->save($userVerify);
            DB::commit();
            return $userVerify;
        }catch(Throwable $er){
            DB::rollBack();
            report($er);
            return [];
        }
    }

    public function verifyCode($request){
        try{
            $user = User::where('username',$request->username)->first();
            $verifyCode = UserVerify::where('user_id',$user->id)->first();

            if($request->code == $verifyCode->code){
                $verifyCode->verify_at = \Carbon\Carbon::now();
                $verifyCode->save();
                return ['success'=>true];
            }

            return ['success'=>false];
        }catch(\Throwable $er){
            report($er->getMessage());
            throw $er;
        }
    }
}
