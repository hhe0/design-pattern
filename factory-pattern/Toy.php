<?php
namespace toy;

class ToyFactory
{
    public static function produceToy($toyName)
    {
        switch($toyName)
        {
            case 'transformer':
                return new Transformer();
                break;
            case 'barbie':
                return new Barbie();
                break;
            case 'wali':
                return new Wali();
                break;
            default:
                throw new \Exception('Unknown toy name!');
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


$transform = ToyFactory::produceToy('transformer');
$transform->getDescription();

$barbie = ToyFactory::produceToy('barbie');
$barbie->getDescription();

$wali = ToyFactory::produceToy('wali');
$wali->getDescription();

