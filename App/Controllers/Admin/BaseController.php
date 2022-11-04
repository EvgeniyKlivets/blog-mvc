<?php

namespace App\Controllers\Admin;

use Core\Controller;

class BaseController extends Controller
{
    public function before (string $action):bool
    {
        return true;
    }
}