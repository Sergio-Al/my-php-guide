<?php

declare(strict_types=1);

namespace Handlers;

class Login extends Handler
{
    public function handle(): string
    {
        $userName = 'admin';
        $passwordHash = '$2a$12$J2Kt1i4fIjkAsvj.3F4K7O95GS6/5I9i4/Ial6nwpd8GMT16Dj7Xm';
        // Exercise 6.11 Step 9 finished checkpoint! 

        return (new \Components\Template('login-form'))->render();
    }
}
