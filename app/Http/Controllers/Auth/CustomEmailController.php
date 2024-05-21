<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
use Illuminate\Notifications\Messages\MailMessage;

class CustomEmailController extends ResetPasswordNotification
{
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Sua solicitação de redefinição de senha')
            ->view(
                'auth.emails.custom_password_reset',
                [
                    'resetLink' => url(config('app.url').route('password.reset', $this->token, false))
                ]
            );
    }
}
