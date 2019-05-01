<?php

namespace milkTea;

/**
 * 奶茶
*/
interface MilkTea
{
    public function getCost();

    public function getDescription();
}

/**
 * 基础款
*/
class BasicMilkTea implements MilkTea
{
    public function getCost()
    {
        return 10;
    }

    public function getDescription()
    {
        echo 'A cup of basic milk tea.' . PHP_EOL;
    }
}

/**
 * 辅料
*/
abstract class Excipient implements MilkTea
{
    protected $milkTea;

    public function __construct(MilkTea $milkTea)
    {
        $this->milkTea = $milkTea;
    }

    public function getCost()
    {
        $this->milkTea->getCost();
    }

    public abstract function getDescription();
}

/**
 * 抹茶
*/
class Matcha extends Excipient
{
    public function getCost()
    {
        return  $this->milkTea->getCost() + 3.0;
    }

    public function getDescription()
    {
        $this->milkTea->getDescription();
        echo 'add some matcha.' . PHP_EOL;
    }
}

/**
 * 珍珠
*/
class Pearl extends Excipient
{
    public function getCost()
    {
        return  $this->milkTea->getCost() + 1.5;
    }

    public function getDescription()
    {
        $this->milkTea->getDescription();
        echo 'add some pearl.' . PHP_EOL;
    }
}

/**
 * 椰果
*/
class Coconut extends Excipient
{
    public function getCost()
    {
        return  $this->milkTea->getCost() + 1.0;
    }

    public function getDescription()
    {
        $this->milkTea->getDescription();
        echo 'add some coconut.' . PHP_EOL;
    }
}

/**
 * 注入灵魂
*/
class Soul extends Excipient
{
    public function getCost()
    {
        // 灵魂无价
        return $this->milkTea->getCost() + 0.0;
    }

    public function getDescription()
    {
        $this->milkTea->getDescription();
        echo 'add soul.' . PHP_EOL;
    }
}

// 一杯基础款的奶茶 + 抹茶 + 珍珠
$tea = new Coconut(new Pearl(new Matcha(new BasicMilkTea())));
$tea->getDescription();
$cost = $tea->getCost();
echo 'It costs: ' . $cost . PHP_EOL;

// 如果只是这样，这杯奶茶是缺乏灵魂的
$tea = new Soul($tea);
$tea->getDescription();
$cost = $tea->getCost();
echo 'It costs: ' . $cost . PHP_EOL;