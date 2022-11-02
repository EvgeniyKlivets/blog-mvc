<?php
namespace App\Controllers;
use App\Helpers\SessionHelper;
use App\Validators\AuthValidator;
use Core\Controller;
use Core\View;
class AuthController extends Controller
{
    public function login()
    {
        if (SessionHelper::isUserLoggedIn()) {
            redirect();
        }
        View::render('auth/login');
    }
    public function register()
    {
        if (SessionHelper::isUserLoggedIn()) {
            redirect();
        }
        View::render('auth/register');
    }

    public function logout()
    {
        SessionHelper::destroy();
        redirect();
    }
