<?php
// only authenticated users have access to this page.
declare(strict_types=1);

namespace Handlers;

class Profile extends Handler
{
    public function handle(): string
    {
        // we check for the username in the session data
        // if no user is authenticated, we will display the Login form
        if (!array_key_exists('username', $_SESSION)) {
            // we will display the login form
            return (new Login)->handle();
        }

        return (new \Components\Template('profile'))->render([
            'username' => $_SESSION['username'],
            'sessionData' => var_export($_SESSION, true),
        ]);
    }

    public function getTitle(): string
    {
        return 'Profile - ' . parent::getTitle();
    }
}
