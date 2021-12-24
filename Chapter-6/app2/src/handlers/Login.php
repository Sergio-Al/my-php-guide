<?php

declare(strict_types=1);

namespace Handlers;

class Login extends Handler
{
    public function handle(): string
    {
        if (isset($_SESSION['username'])) {
            $this->requestRedirect('/');
            return '';
        }
        
        $username = 'admin';

        // we are not working with persistence data, but we can generate a password with 
        // the built-in function password_hash(<my-password>, PASSWORD_BCRYPT);
        // > php -r "echo password_hash('password', PASSWORD_BCRYPT);
        $passwordHash = '$2a$12$J2Kt1i4fIjkAsvj.3F4K7O95GS6/5I9i4/Ial6nwpd8GMT16Dj7Xm';

        $formError = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $formUsername = $_POST['username'] ?? '';
            $formPassword = $_POST['password'] ?? '';
            if ($formUsername !== $username) {
                $formError = ['username' => sprintf('The Username [%s] was not found', $formUsername)];
            } elseif (!password_verify($formPassword, $passwordHash)) {
                $formError = ['password' => 'The provided password is invalid'];
            } else {
                $_SESSION['username'] = $username;
                $_SESSION['loginTime'] = date(\DATE_COOKIE);
                $this->requestRedirect('/profile');
                return '';
            }
        }


        return (new \Components\Template('login-form'))->render([
            'formError' => $formError,
            'formUserName' => $formUsername ?? ''
        ]);
    }
}
