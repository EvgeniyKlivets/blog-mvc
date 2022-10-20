<?php

//$router->add ('posts', ['controller' => 'PostsController', 'action' => 'index', 'method' => 'GET']);
$router->add (
    'posts/{id:\d+}',
    ['controller' => \App\Controllers\PostController::class, 'action' => 'show', 'method' => 'GET']);

//dd(__FILE__);
