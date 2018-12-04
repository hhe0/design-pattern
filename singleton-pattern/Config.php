<?php
namespace config;

/**
 * 配置类
*/
class Config
{
    private static $instance;

    // 将构造函数私有化
    private function __construct()
    {
    }

    // 获得类的实例
    public static function getInstance()
    {
        if (is_null(self::$instance))
        {
            self::$instance = new self();
        }

        return self::$instance;
    }
}


// 两次获得的是同一个对象
$config = Config::getInstance();
var_dump($config);

$config2 = Config::getInstance();
var_dump($config2);