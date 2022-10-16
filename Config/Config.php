<?php
namespace Config;

use function Composer\Autoload\includeFile;

class Config
{
    public static function get(string $name)
    {
        $configs = include __DIR__ .'/Configs.php';

        dd($configs);
    }
}