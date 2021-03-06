<?php

namespace Duck;

/**
 * Duck抽象类
*/
abstract class Duck
{
    protected $quackBehavior;

    public function __construct(QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public abstract function fly();
}
/**
 * 封装鸭子叫的行为
*/
interface QuackBehavior
{
    public function quack();
}

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo 'Silence.' . PHP_EOL;
    }
}

class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo 'Squeak.' . PHP_EOL;
    }
}

class MullDuck extends Duck
{
    public function __construct(MuteQuack $muteQuack)
    {
        parent::__construct($muteQuack);
    }

    public function fly()
    {
        echo 'MullDuck fly.' . PHP_EOL;
    }
}

class SqueakDuck extends Duck
{
    public function __construct(Squeak $quackBehavior)
    {
        parent::__construct($quackBehavior);
    }

    public function fly()
    {
        echo 'SqueakDuck fly.' . PHP_EOL;
    }
}


$mullDuck = new MullDuck(new MuteQuack());
$mullDuck->performQuack();
$mullDuck->fly();

$squeakDuck = new SqueakDuck(new Squeak());
$squeakDuck->performQuack();
$squeakDuck->fly();


