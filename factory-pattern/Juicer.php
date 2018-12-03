<?php
namespace juicer;

/**
 * 饮料机接口
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
    public function getDescription()
    {
        echo 'I am a cup of juice.' . "\n";
    }
}

/**
 * 橙汁
*/
class OrangeJuice extends Juice
{
    public function getDescription()
    {
        echo 'I am a cup of orange juice.' . "\n";
    }
}

/**
 * 葡萄汁
*/
class GrapeJuice extends Juice
{
    public function getDescription()
    {
        echo 'I am a cup of grape juice.' . "\n";
    }
}


$orangeJuice = OrangeJuicer::getJuice();
$orangeJuice->getDescription();

$grapeJuice = GrapeJuicer::getJuice();
$grapeJuice->getDescription();


