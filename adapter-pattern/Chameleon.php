<?php
namespace chameleon;

/**
 * 变色龙类
*/
class Chameleon
{
    public function act()
    {
        echo 'I am a chameleon.' . PHP_EOL;
    }
}

/**
 * 环境类
*/
abstract class Environment
{
    public function show()
    {
        echo 'I am still.' . PHP_EOL;
    }
}

/**
 * 变色龙适应环境
*/
class ChameleonChange extends Environment
{
    private $chameleon;

    public function __construct(Chameleon $chameleon)
    {
        $this->chameleon = $chameleon;
    }

    public function show()
    {
        $this->chameleon->act();
    }
}


$chameleon = new Chameleon();
$chameleonChange = new ChameleonChange($chameleon);
$chameleonChange->show();
