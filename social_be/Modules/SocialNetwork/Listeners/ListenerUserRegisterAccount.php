<?php

namespace Modules\SocialNetwork\Listeners;

use Illuminate\Support\Facades\Notification;
use Modules\SocialNetwork\Events\EventUserRegisterAccount;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Modules\SocialNetwork\Notifications\NotificationUserRegisterAccount;
use App\Models\UserVerify;
use App\Services\UserVerifyService;
use Illuminate\Support\Facades\DB;
use Throwable;

class ListenerUserRegisterAccount implements ShouldQueue
{
    protected $userVerifyService;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(UserVerifyService $userVerifyService)
    {
        $this->userVerifyService = $userVerifyService;
    }

    /**
     * Handle the event.
     *
     * @param EventUserRegisterAccount $event
     * @return void
     */
    public function handle(EventUserRegisterAccount $event): void
    {
        try {
            $user = $event->user;
            $userVerify = $this->userVerifyService->create($user);

            Notification::route('mail', $user->email)->notify(new NotificationUserRegisterAccount($user, $userVerify));
        } catch (Throwable $er) {
            report($er);
        }
    }
}
