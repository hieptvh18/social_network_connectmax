<?php

namespace Modules\SocialNetwork\Http\Controllers\Public;

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\SocialNetwork\Services\Public\UserService;

class UserController extends ApiController
{

    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * get user by username
     */
    public function getUserByUsername($username)
    {
        return $this->json(['user'=>$this->userService->getUserByUsername($username)]);
    }

    /**
     * get current user login
     */
    public function getUser(Request $request){
        return $this->json(['user'=>auth()->user()]);
    }
}
