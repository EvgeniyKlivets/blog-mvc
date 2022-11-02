<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

class AuthController extends Controller
{
    public function login()
    {
        //dd(__METHOD__);
        View:: render ('auth/login');
    }

    public function register ()
    {

    }

    public function verify()
    {
        dd($_REQUEST);
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
