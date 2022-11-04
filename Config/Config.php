<?php
namespace Config;

use function Composer\Autoload\includeFile;

class Config
{
    public static function get(string $name)
    {
        $configs = include __DIR__ .'/Configs.php';

        $keys = explode('.', $name);

        return  self::findByKeys($keys, $configs);

        /*dd($configs);*/

        /*dd($value);*/
    }

    private static function findByKeys(array $keys, array $configs): mixed
    {

        $value = null;
        if (empty($keys)){
            return $value;
        }
        $key = array_shift($keys);

        /*dd($key, $keys);*/

        if (array_key_exists($key, $configs)) {
            $value = is_array($configs[$key]) ? self::findByKeys($keys, $configs) : $configs[$key];
        }

            return $value;
    }

}