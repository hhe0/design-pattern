<?php
namespace MilkTea;

/**
 * 奶茶类
*/
class MilkTea
{
    protected $decorator = [];
    private $cost = 0;

    public function addDecorator(Decorator $decorator)
    {
        $this->decorator[] = $decorator;
    }

    public function cost()
    {
        foreach ($this->decorator as $decorator)
        {
            $this->cost += $decorator->getCost();
        }

        echo 'It costs '. $this->cost . ".\n";
    }
}

/**
 * 装饰器接口
*/
interface Decorator
{
    public function getCost();
}

/**
 * 热度
*/
abstract class Heat implements Decorator
{
    protected $cost;

    public function getCost()
    {
        return $this->cost;
    }
}

/**
 * 热的
*/
class Hot extends Heat
{
    public $cost = 0.3;
}

/**
 * 温的
*/
class Warm extends Heat
{
    public $cost = 0.2;
}

/**
 * 凉的
*/
class Cold extends Heat
{
    public $cost = 0.1;
}

/**
 * 体积
*/
abstract class Volume implements Decorator
{
    protected $cost;

    public function getCost()
    {
        return $this->cost;
    }
}

/**
 * 大杯
*/
class Large extends Volume
{
    public $cost = 15;
}

/**
 * 中杯
*/
class Medium extends Volume
{
    public $cost = 12;
}

/**
 * 小杯
*/
class Small extends Volume
{
    public $cost = 10;
}

/**
 * 奶茶套餐
 */
class Package extends MilkTea
{
    public function __construct()
    {
        $this->decorator[] = new Hot();
        $this->decorator[] = new Large();
    }
}

// 一份大杯、冷的奶茶
$milkTea = new MilkTea();

$milkTea->addDecorator(new Large());
$milkTea->addDecorator(new Cold());

$milkTea->cost();

// 一份中杯、热的奶茶
$milkTea = new MilkTea();

$milkTea->addDecorator(new Medium());
$milkTea->addDecorator(new Hot());

$milkTea->cost();

// 来份套餐
$package = new Package();

$package->cost();
