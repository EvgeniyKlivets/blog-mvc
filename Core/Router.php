<?php
/*+Method add*/
namespace Core;

class Router
{
    protected array $routes =[], $params = [];

    protected array $convertTypes = [
        'd' => 'int',
        's' => 'string'
    ];

    public function add (string $route, array $params = [])

    {
        $route = preg_replace('/\//', '\\/', $route);
        $route = preg_replace('/\{([a-z]+)\}/','(?P<\1>[a-z-]+)', $route);//??
        $route = preg_replace('/\{([a-z]+):([^\}]+)\}/','(?P<\1>\2)', $route);//id

        $route = '/^' . $route . '$/1';

        $this->routes[$route] = $params;
        //dd($this->routes);
    }

    public function dispatch($url)
    {

    }
}