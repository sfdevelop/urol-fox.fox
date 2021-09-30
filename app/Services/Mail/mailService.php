<?php

namespace App\Services\Mail;

use App\User;

class mailService
{
    public function mailSend()
    {
        $mail=User::find(2);

        return $mail;
    }
}
