<?php

namespace Modules\SocialNetwork\Services\Public;

use App\Http\Controllers\Api\AbstractApi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Modules\SocialNetwork\Models\Follow;
use Modules\SocialNetwork\Models\Post;
use Modules\SocialNetwork\Models\Room;
use Modules\SocialNetwork\Repositories\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class UserService
{

    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getUserByUsername($username)
    {
        return $this->userRepository->where('username',$username)->first();
    }
}
