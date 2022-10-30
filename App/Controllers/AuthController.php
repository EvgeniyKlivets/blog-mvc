<?php

namespace App\Controllers;

use Core\Controller;

class AuthController extends Controller
{
    public function login()
    {
        dd(__METHOD__);
    }

    public function register ()
    {

    }

    public function verify()
    {

    }

    public function store()
    {

    }

    /*public function before(string $action):bool
    {
        if ($action === 'login'){
            header('Location: localhost:8888');
            exit;
        }
        return false;
    }*/
}
