<?php

namespace diningHall;

/**
 * 请求者：顾客类
*/
class Customer
{
    private $waiter;

    public function callWaiter(Waiter $waiter)
    {
        $this->waiter = $waiter;
    }

    public function order()
    {
        $this->waiter->work();
    }
}

/**
 * 服务员接口
*/
interface Worker
{
    public function work();
}

/**
 * 命令的接受者：服务员类
*/
class Waiter implements Worker
{
    private $chef;

    public function __construct(Chef $chef)
    {
        $this->chef = $chef;
    }

    public function work()
    {
        $this->chef->work();
    }
}

/**
 * 命令的执行者：厨师类
*/
class Chef implements Worker
{
    public function work()
    {
        echo 'I am cooking now!' . "\n";
    }
}


$customer = new Customer();
$chef = new Chef();
$waiter = new Waiter($chef);

$customer->callWaiter($waiter);
$customer->order();


