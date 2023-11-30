<?php

namespace Modules\SocialNetwork\Notifications;

use App\Models\User;
use App\Models\UserVerify;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NotificationUserRegisterAccount extends Notification implements ShouldQueue
{
    use Queueable;

    protected $user;

    protected $userVerify;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user, UserVerify $userVerify)
    {
        $this->user = $user;
        $this->userVerify = $userVerify;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $data = $this->toArray($notifiable);
        return (new MailMessage)
                    ->subject("Welcome ".$this->user->name." to ".env('APP_NAME').".")
                    ->markdown('socialnetwork::notifications.registerAccount',$data)
                    // ->action('Go to website', env('APP_URL'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'name'=>$this->user->name,
            'codeVerify'=>$this->userVerify->code
        ];
    }
}
