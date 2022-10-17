<?php
/*Робимо єдину точку входа*/
require_once dirname(__DIR__ ). '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(dirname(__DIR__));
$dotenv->load();

/*use Core\Model;

dd(Model::connect()); при public*/

/*$query = Model:: connect()->query("SELECT*FROM users");
$query->execute(); /*IT'S where SQL Database has*/
//dd($query->fetchAll());



/*use Config\Config;*/
/*Config::get('db.test');*/
/*dd(Config::get('db.test')); - лож*/
/*dd (Config::get('db.host.test'), Config::get('db.user'));*/

/*dd (__File__);*/