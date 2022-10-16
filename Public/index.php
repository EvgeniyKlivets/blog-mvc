<?php
/*Робимо єдину точку входа*/
require_once dirname(__DIR__ ). '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(dirname(__DIR__));
$dotenv->load();

use Config\Config;

Config::get('db.name');

/*dd (__File__);*/
