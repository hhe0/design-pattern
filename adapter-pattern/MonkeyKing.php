<?php

namespace monkeyKing;

/**
 * 对外接口：Bird抽象类
*/
abstract class Bird
{
    public function fly()
    {
        echo 'I can fly.' . PHP_EOL;
    }

    public function sing()
    {
        echo 'I like singing as a bird.' . PHP_EOL;
    }
}

/**
 * 需要适配的接口：MonkeyKing类
*/
class MonkeyKing
{
    public function roll()
    {
        echo 'I can roll instead of flying.' . PHP_EOL;
    }

    public function talk()
    {
        echo 'I can talk instead of singing.' . PHP_EOL;
    }
}

/**
 * 适配器：SeventyTwoChange（七十二变）
*/
class SeventyTwoChange extends bird
{
    private $monkeyKing;

    public function __construct(MonkeyKing $monkeyKing)
    {
        $this->monkeyKing = $monkeyKing;
    }

    public function fly()
    {
        echo 'Now I can fly like a bird.' . PHP_EOL;

        $this->monkeyKing->roll();
    }

    public function sing()
    {
        echo 'Now I can sing like a bird.' . PHP_EOL;

        $this->monkeyKing->talk();
    }
}

$monkeyKing = new MonkeyKing();
$monkeyKingBird = new SeventyTwoChange($monkeyKing);

$monkeyKingBird->fly();
$monkeyKingBird->sing();

