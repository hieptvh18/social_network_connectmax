<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\SocialNetwork\Http\Controllers\ChatController;
use Modules\SocialNetwork\Http\Controllers\Public\UserController as PublicUserController;
use Modules\SocialNetwork\Http\Controllers\UserController;
use Modules\SocialNetwork\Http\Controllers\PostController;
use Modules\SocialNetwork\Http\Controllers\CommentController;
use Modules\SocialNetwork\Http\Controllers\NotificationController;
use Modules\SocialNetwork\Http\Controllers\StoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(
    [
        'prefix' => 'v1'
    ],
    function () {

        // route  scope public
        Route::group([
            'prefix'=>'public'
        ],function(){
            Route::middleware('guest')->group(function(){

                Route::controller(PublicUserController::class)->group(function () {
                    // get user by username
                    Route::get('/user/{username}', 'getUserByUsername')->name('getUserByUsername');
                });
            });
        });

        // scope admin
        Route::group([
            'prefix'=>'admin'
        ],function(){
           
        });

        // route scope private
        Route::group([
            'middleware' => 'auth:sanctum',
            'prefix'=>'private'
        ], function () {
            Route::controller(UserController::class)->group(function () {
                // change password
                Route::put('/user/change-password', 'changePassword');
                // search user by username
                Route::get('/user/search', 'searchUser')->name('searchUser');
                // get user by id
                Route::get('/user/{id}', 'getUserById')->name('getUserById');
                // get list user followed
                Route::get('/message/users', 'getFriendsUser')->name('getFriendsUser');
                // update profile user
                Route::put('/user/update', 'update')->name('updateUser');
                // following user
                Route::post('/user/following', 'followUser')->name('followUser');
                // un follow user
                Route::post('/user/unfollow', 'unFollowUser')->name('unFollowUser');
                // upload avatar
                Route::post('/user/upload-avatar', 'uploadAvatar')->name('uploadAvatar');
            });

            Route::controller(PostController::class)->group(function(){
                // show posts of following user
                Route::get('/posts/get-by-following', 'getPostByFollowingId')->name('getPost');
                // save post
                Route::post('/posts/save', 'savePost')->name('savePost');
                Route::delete('/posts/{id}', 'delete')->name('deletePost');
                // get post by id
                Route::get('/posts/{id}', 'getById')->name('getById');
                // action like post
                Route::post('/post/{id}/like', 'likePost')->name('likePost');
            });

            Route::controller(CommentController::class)->group(function(){
                // comment api
                Route::get('/comments/post/{id}', 'fetchComments');
                Route::post('/comments/post/save', 'saveComment');
                Route::delete('/comments/delete/{id}', 'delete');
            });

            // recommend follow
            Route::get('recommend-follows', [UserController::class, 'recommendFollow'])->name('recommend-follows');

            // handle chat
            Route::get('/chat/fetch-message/{receiver}', [ChatController::class, 'fetchMessage']);
            Route::post('/chat/save', [ChatController::class, 'saveMessage']);

            Route::controller(NotificationController::class)->group(function(){
                // notifications
                Route::get('/notifications', 'fetchNotifications');
                Route::put('/notifications/{id}', 'updateNotification');
                Route::get('/fetch-notification/count-unread', 'countUnread');
                Route::post('/notification/save', 'saveNotification');
                Route::delete('/notification/delete/{id}', 'delete');
            });

            Route::controller(StoryController::class)->group(function(){
                // story
                Route::get('/list-story-active', 'fetchListStoryIsActive');
                Route::get('/story/{id}', 'findStory');
                Route::get('/fetch-my-story', 'fetchMyStories');
                Route::post('/story/save', 'storeStory');
                Route::delete('/story/soft-delete/{id}', 'softDeleteStory');
                Route::delete('/story/force-delete/{id}', 'forceDeleteStory');
            });
        });
    }
);
