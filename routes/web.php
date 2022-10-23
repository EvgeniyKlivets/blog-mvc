<?php

$router->add ('posts', ['controller' => 'PostsController', 'action' => 'index', 'method' => 'GET']);
$router->add (
    'blog/{id:\D+}',
    ['controller' => \App\Controllers\PostController::class, 'action' => 'show', 'method' => 'GET']);


