<?php

declare(strict_types=1);

namespace Components;

use Handlers\Contacts;
use Handlers\Signup;
use Handlers\Handler;
use Handlers\Login;
use Handlers\Logout;
use Handlers\Profile;

class Router
{
    public function getHandler(): ?Handler
    {
        switch ($_SERVER['PATH_INFO'] ?? '/') {
            case '/signup':
                return new Signup();
            case '/contacts':
                return new Contacts();
            case '/login':
                return new Login();
            case '/profile':
                return new Profile();
            case '/logout':
                return new Logout();
            case '/':
                return new class extends Handler
                {
                    public function handle(): string
                    {
                        if (Auth::userIsAuthenticated()) {
                            $this->requestRedirect('/profile');
                        }
                        return (new Template('home'))->render();
                    }
                };
            default:
                return new class extends Handler
                {
                    public function handle(): string
                    {
                        $this->requestRedirect('/');
                        return '';
                    }
                };
        }
    }
}
