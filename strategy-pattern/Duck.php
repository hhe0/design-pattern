<?php
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
 * 鸭子叫的行为
*/
interface QuackBehavior
{
    public function quack();
}

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo 'Silence.' . "\n";
    }
}

class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo 'Squeak.' . "\n";
    }
}

class MullDuck extends Duck
{
    protected $quackBehavior;

    public function __construct(MuteQuack $muteQuack)
    {
        parent::__construct($muteQuack);
    }

    public function fly()
    {
        echo 'MullDuck fly.' . "\n";
    }
}

class SqueakDuck extends Duck
{
    protected $quackBehavior;

    public function __construct(Squeak $quackBehavior)
    {
        parent::__construct($quackBehavior);
    }

    public function fly()
    {
        echo 'SqueakDuck fly.' . "\n";
    }
}

$mullDuck = new MullDuck(new MuteQuack());
$mullDuck->performQuack();


$squeakDuck = new SqueakDuck(new Squeak());
$squeakDuck->performQuack();




