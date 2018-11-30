<?php
namespace transform;

interface Transform
{
    public function move();
}

class Car implements Transform
{
    public function move()
    {
        echo 'Move like a car.' . "\n";
    }
}

abstract class Changer implements Transform
{
    protected $transform;

    public function __construct(Transform $transform)
    {
        $this->transform = $transform;
    }

    public abstract function move();

}

class Robot extends Changer
{
    public function move()
    {
        echo 'Move like a robot.' . "\n";

        $this->transform->move();
    }

    public function say()
    {
        echo 'Say like a robot.' . "\n";
    }
}

class Airplane extends Changer
{
    public function move()
    {
        echo 'Move like a airplane.' . "\n";

        $this->transform->move();
    }

    public function fly()
    {
        echo 'Fly like a airplane' . "\n";
    }
}

// 汽车人 变身 飞行汽车人
$airCar = new Airplane(new Car());
$airCar->fly();

// 飞行汽车人 变身 机器机车人
$robotCar = new Robot($airCar);

// 现在我能以三种方式进行移动
$robotCar->move();
// 我甚至还能说话
$robotCar->say();

