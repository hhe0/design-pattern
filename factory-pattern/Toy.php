<?php

namespace toy;

/**
 * 玩具工厂：简单工厂模式
*/
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

/**
 * 玩具
*/
interface Toy
{
    public function getDescription();
}

/**
 * 变形金刚
*/
class Transformer implements Toy
{
    public function getDescription()
    {
        echo 'I am a transformer.' . PHP_EOL;
    }
}

/**
 * 芭比娃娃
*/
class Barbie implements Toy
{
    public function getDescription()
    {
        echo 'I am a barbie.' . PHP_EOL;
    }
}

/**
 * 瓦力
*/
class Wali implements Toy
{
    public function getDescription()
    {
        echo 'I am wali.' . PHP_EOL;
    }
}


$transform = ToyFactory::produceToy(ToyFactory::TRANSFORMER);
$transform->getDescription();

$barbie = ToyFactory::produceToy(ToyFactory::BARBIE);
$barbie->getDescription();

$wali = ToyFactory::produceToy(ToyFactory::WALI);
$wali->getDescription();

