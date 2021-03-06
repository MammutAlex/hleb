<?php

namespace Hleb\Main;

class Info
{
    use \DeterminantStaticUncreated;

    protected static $data = [];

    const REG_NAMES = ["Autoload", "CacheRoutes", "RenderMap"];

    public static function add(string $name, $data)
    {
        if (in_array($name,self::REG_NAMES))
            self::$data[$name] = $data;
    }

    public static function get(string $name = '')
    {
        return empty($name) ? self::$data : ( isset(self::$data[$name]) ? self::$data[$name] : null );
    }

    public static function insert(string $name, $data)
    {
        if (in_array($name,self::REG_NAMES))
            self::$data[$name][] = $data;
    }

}