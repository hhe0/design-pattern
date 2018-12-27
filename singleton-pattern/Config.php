<?php
namespace config;

/**
 * 配置类
*/
class Config
{
    private static $instance;
    private $config = [];

    // 将构造函数私有化
    private function __construct()
    {
        if (is_file('.ini')) {
            $this->config = parse_ini_file('.ini', true);
        }
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

    // 获取配置项
    public function getAll()
    {
        return $this->config;
    }

    // 判断是否存在配置项
    public function has($name)
    {
        return $this->config[$name];
    }

    // 获取单个配置项
    public function get($name)
    {
        return (is_string($name) && $this->has($name)) ? $this->config[$name] : null;
    }

    // 设置配置项
    public function set($name, $value)
    {
        $this->config[$name] = $value;
    }
}


// 两次获得的是同一个对象
$config = Config::getInstance();
var_dump($config->getAll());
// 一次设置全局生效
$config->set('app', ['app_status' => 'test']);
var_dump($config->getAll());

$config2 = Config::getInstance();
var_dump($config2);
var_dump($config->getAll());
var_dump($config->get('user'));