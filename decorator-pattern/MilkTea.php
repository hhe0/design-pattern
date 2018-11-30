<?php
namespace milkTea;

/**
 * 奶茶
*/
interface MilkTea
{
    public function getCost();
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
}

/**
 * 珍珠
*/
class Perl extends Excipient
{
    public function getCost()
    {
        return  $this->milkTea->getCost() + 1.5;
    }
}

/**
 * 椰果
*/
class Coconut extends Excipient
{
    public function getCost()
    {
        return  $this->milkTea->getCost() + 1;
    }
}


// 一杯基础款的奶茶 + 抹茶 + 珍珠
$teaA = new Perl(new Matcha(new BasicMilkTea()));
$costA = $teaA->getCost();
echo 'It costs: ' . $costA . "\n";

// 再加点椰果
$teaB = new Coconut($teaA);
$costB = $teaB->getCost();
echo 'It costs: ' . $costB . "\n";