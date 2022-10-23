<?php

namespace App\Controllers;

class PostController
{
  public function show( int $id)
    {
        dd(__METHOD__, $id);
    }
}
