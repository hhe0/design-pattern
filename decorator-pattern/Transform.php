<?php

namespace transform;

/**
 * 汽车人接口
*/
interface Transform
{
    public function move();
}

/**
 * 汽车人的一个形态
*/
class Car implements Transform
{
    public function move()
    {
        echo 'Move like a car.' . PHP_EOL;
    }
}

/**
 * 转换形态
*/
abstract class Changer implements Transform
{
    protected $transform;

    public function __construct(Transform $transform)
    {
        $this->transform = $transform;
    }

    public abstract function move();

}

/**
 * 机器人形态
*/
class Robot extends Changer
{
    public function move()
    {
        echo 'Move like a robot.' . PHP_EOL;

        $this->transform->move();
    }

    public function say()
    {
        echo 'Say like a robot.' . PHP_EOL;
    }
}

/**
 * 飞机形态
*/
class Airplane extends Changer
{
    public function move()
    {
        echo 'Move like a airplane.' . PHP_EOL;

        $this->transform->move();
    }

    public function fly()
    {
        echo 'Fly like a airplane' . PHP_EOL;
    }
}

// 汽车人 变身 飞行汽车人
$airCar = new Airplane(new Car());
$airCar->fly();

// 飞行汽车人 变身 机器汽车人
$robotCar = new Robot($airCar);

// 现在我能以三种方式进行移动
$robotCar->move();
// 我甚至还能说话
// 但是我丧失了飞行的能力
$robotCar->say();

