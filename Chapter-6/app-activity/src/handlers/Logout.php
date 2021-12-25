<?php

declare(strict_types=1);

namespace Handlers;

class Logout extends Handler
{
    public function handle(): string
    {
        session_regenerate_id(true);
        session_destroy();
        $this->requestRedirect('/');
        return '';
    }
}
