<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\ApiController;
use App\Services\UserVerifyService;
use Illuminate\Http\Request;
use Throwable;
use App\Http\Requests\UserVerifyPostRequest;

class UserVerifyController extends ApiController
{
    protected $userVerifyService;

    public function __construct(UserVerifyService $userVerifyService)
    {
        $this->userVerifyService = $userVerifyService;
    }

    public function resendCode(){
        
    }

    public function verifyCode(UserVerifyPostRequest $request){
        return $this->json([
            'data'=>$this->userVerifyService->verifyCode($request),
            'message'=>__('core:message.user_verify.verify_success')
        ]);
    }
}
