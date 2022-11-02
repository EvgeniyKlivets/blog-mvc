<?php

namespace Core;

abstract class Controller
{
   /* public function __call($name, $args)
    {
        dd($args);
        if (method_exists($this, $name)){
            if ($this->before() !== false){
                call_user_func_array([$this, $name], $args);
                $this->after();
            }
        }
    }*/

    protected function before(): bool
    {
        return true;
    }

    protected function after()
    {

    }

}
