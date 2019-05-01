<?php

namespace juicer;

/**
 * 饮料机接口：工厂方法模式
*/
interface Juicer
{
    public static function getJuice();
}

/**
 * 橙汁饮料机
*/
class OrangeJuicer implements Juicer
{
    public static function getJuice()
    {
        return new OrangeJuice();
    }
}

/**
 * 葡萄汁饮料机
*/
class GrapeJuicer implements Juicer
{
    public static function getJuice()
    {
        return new GrapeJuice();
    }
}

/**
 * 果汁
*/
abstract class Juice
{
    public abstract function getDescription();
}

/**
 * 橙汁
*/
class OrangeJuice extends Juice
{
    public function getDescription()
    {
        echo 'I am a cup of orange juice.' . PHP_EOL;
    }
}

/**
 * 葡萄汁
*/
class GrapeJuice extends Juice
{
    public function getDescription()
    {
        echo 'I am a cup of grape juice.' . PHP_EOL;
    }
}


$orangeJuice = OrangeJuicer::getJuice();
$orangeJuice->getDescription();

$grapeJuice = GrapeJuicer::getJuice();
$grapeJuice->getDescription();


