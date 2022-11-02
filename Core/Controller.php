<?php

namespace Core;

use App\Helpers\SessionHelper;

abstract class Controller
{

    protected function before(string $action): bool
    {
        if (!SessionHelper:: isUserLoggedIn()){
            redirect ('login');
        }
        return true;
    }

    protected function after (string $action)
    {

    }

}
