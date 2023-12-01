<?php

namespace App\Services;

use App\Http\Controllers\Api\ApiController;
use App\Models\User;
use App\Models\UserVerify;
use Illuminate\Support\Facades\DB;
use Throwable;

class UserVerifyService extends ApiController
{
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

        }catch(\Throwable $er){
            report($er->getMessage());
            throw $er;
        }
    }
}
