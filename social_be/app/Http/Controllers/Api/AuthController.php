<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\ApiController;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Throwable;
use App\Http\Requests\UserRegisterRequest;

class AuthController extends ApiController
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    /**
     * login with username && password
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function loginUsername(Request $request)
    {
        return $this->authService->login($request);
    }

    /**
     * register post
     * @param UserRegisterRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function registerPost(UserRegisterRequest $request)
    {
        return $this->json(['data'=>$this->authService->create($request),'message'=>'core:message.user.register_success']);
    }

    /**
     * logout
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        return $this->authService->logout($request);
    }
}
