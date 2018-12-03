<?php
namespace juicer;

interface Juicer
{
    public static function getJuice();
}

class OrangeJuicer implements Juicer
{
    public static function getJuice()
    {
        return new OrangeJuice();
    }
}

class GrapeJuicer implements Juicer
{
    public static function getJuice()
    {
        return new GrapeJuice();
    }
}

abstract class Juice
{
    public function getDescription()
    {
        echo 'I am a cup of juice.' . "\n";
    }
}

class OrangeJuice extends Juice
{
    public function getDescription()
    {
        echo 'I am a cup of orange juice.' . "\n";
    }
}

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


