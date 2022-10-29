<?php

//$router->add ('posts', ['controller' => 'PostsController', 'action' => 'index', 'method' => 'GET']);
//$router->add ('blog/{id:\D+}',['controller' => \App\Controllers\PostController::class, 'action' => 'show', 'method' => 'GET']);

$router->add ('login', ['controller'=>\App\Controllers\AuthController::class, 'action'=>'login', 'method'=>'GET']);
$router->add ('registration', ['controller'=>\App\Controllers\AuthController::class, 'action'=>'register', 'method'=>'GET']);
$router->add ('verify', ['controller'=>\App\Controllers\AuthController::class, 'action'=>'verify', 'method'=>'POST']);
$router->add ('users/store', ['controller'=>\App\Controllers\UsersController::class, 'action'=>'register', 'method'=>'POST']);
