<?php
namespace singletonExtension;

/**
 * 对单例模式进行扩展为『多例模式』
*/
class SingletonExtension
{
    // 允许系统中存在两个不同的对象
    const NUM_OF_INSTANCE = 2;

    private static $instance = [];
    private $config;

    private function __construct()
    {
        if (is_file('.ini')) {
            $this->config = parse_ini_file('.ini', true);
        }
    }

    public static function getInstance()
    {
        // 如果对象的个数没有超过上限则允许继续创建对象，否则返回最近创建的对象
        if (count(self::$instance) < self::NUM_OF_INSTANCE) {
            self::$instance[] = new self();
        }

        return self::$instance[count(self::$instance) - 1];
    }

    public function getAll()
    {
        return $this->config;
    }

    public function has($name)
    {
        return $this->config[$name];
    }

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

/**
 * 可以观察到：
 * config1对象不会对config2对象造成影响
 * config2对象会对config3对象以及后续创建的对象造成影响
*/
$config = SingletonExtension::getInstance();
var_dump($config);
$config->set('app', ['app_status' => 'test']);
var_dump($config->getAll());

$config2 = SingletonExtension::getInstance();
var_dump($config2);
var_dump($config2->get('app'));
$config2->set('app', ['app_status' => 'product']);

$config3 = SingletonExtension::getInstance();
var_dump($config3);
var_dump($config3->get('app'));