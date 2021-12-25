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

        // validation of the user and password
        $formError = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $formUsername = $_POST['username'] ?? '';
            $formPassword = $_POST['password'] ?? '';
            $userData = $this->getUserData($formUsername);
            if (!$userData) {
                $formError = ['username' => sprintf('The Username [%s] was not found', $formUsername)];
            } elseif (!password_verify($formPassword, $userData['password'])) {
                $formError = ['password' => 'The provided password is invalid'];
            } else {
                $_SESSION['username'] = $formUsername;
                $_SESSION['userdata'] = $userData;
                $this->requestRedirect('/profile');
                return '';
            }
        }


        return (new \Components\Template('login-form'))->render([
            'formError' => $formError,
            'formUserName' => $formUsername ?? ''
        ]);
    }

    public function getUserData(string $username): ?array
    {
        $users = [
            'vip' => [
                'level' => 'VIP',
                'password' => '$2a$12$xugbA41GQeu8GjBBrBG.Pe3kt1484AQcC.U07JbaJjwU1GC1.DJAa' // 'vip' for vip users
            ],
            'user' => [
                'level' => 'STANDARD',
                'password' => '$2a$12$DBAtPESu.Kxf1p1xzt84AODyZgKuGkvnKUnM3F.i3eVKhJUgvlVGO' // 'user' for standard users
            ]
        ];
        return $users[$username] ?? null;
    }
}
