<?php
namespace chameleon;

class Chameleon
{
    public function act()
    {
        echo 'I am a chameleon.' . "\n";
    }
}

abstract class Environment
{
    public function show()
    {
        echo 'I am still.' . "\n";
    }
}

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
