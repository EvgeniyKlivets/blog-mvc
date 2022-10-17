<?php
/*Робимо єдину точку входа*/
require_once dirname(__DIR__ ). '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(dirname(__DIR__));
$dotenv->load();

use Config\Config;

Config::get('db.host');
/*dd(Config::get('db.test')); - лож*/
/*dd (Config::get('db.host.test'), Config::get('db.user'));*/

/*dd (__File__);*/
