<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword;


class MyResetPasswordNotification extends ResetPassword 
{
    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Você esta recebendo esta mensagem, porque uma requisição de redefinição foi chamada...')
            ->action('Reset Password', url(config('app.url').route('password.reset', $this->token, false)))
            ->line('If you did not request a password reset, no further action is required.');
    }

}
