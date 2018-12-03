<?php
namespace toy;

class ToyFactory
{
    const TRANSFORMER = 1;
    const BARBIE = 2;
    const WALI = 3;

    public static function produceToy($toyName)
    {
        switch($toyName)
        {
            case self::TRANSFORMER:
                return new Transformer();
                break;
            case self::BARBIE:
                return new Barbie();
                break;
            case self::WALI:
                return new Wali();
                break;
            default:
                throw new \InvalidArgumentException('Unknown toy name!');
                break;
        }
    }
}

interface Toy
{
    public function getDescription();
}

class Transformer implements Toy
{
    public function getDescription()
    {
        echo 'I am a transformer.' . "\n";
    }
}

class Barbie implements Toy
{
    public function getDescription()
    {
        echo 'I am a barbie.' . "\n";
    }
}

class Wali implements Toy
{
    public function getDescription()
    {
        echo 'I am wali.' . "\n";
    }
}


$transform = ToyFactory::produceToy(ToyFactory::TRANSFORMER);
$transform->getDescription();

$barbie = ToyFactory::produceToy(ToyFactory::BARBIE);
$barbie->getDescription();

$wali = ToyFactory::produceToy(ToyFactory::WALI);
$wali->getDescription();

