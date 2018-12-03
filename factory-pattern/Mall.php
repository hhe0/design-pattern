<?php
namespace mall;

abstract class Shop
{
    public abstract function getName();
}

class FoodShop extends Shop
{
    public static function getEgg()
    {
        return new Egg();
    }

    public static function getMilk()
    {
        return new Milk();
    }

    public function getName()
    {
        echo 'It is a food shop.' . "\n";
    }
}

class ClothesShop extends Shop
{
    public static function getHat()
    {
        return new Hat();
    }

    public static function getShoes()
    {
        return new Shoes();
    }

    public function getName()
    {
        echo 'It is a clothes shop' . "\n";
    }
}

interface FoodProduct
{
    public function eat();
}

class Egg implements FoodProduct
{
    public function eat()
    {
        echo 'The egg is tasty.' . "\n";
    }
}

class Milk implements FoodProduct
{
    public function eat()
    {
        echo 'The milk is tasty.' . "\n";
    }
}

interface ClothesProduct
{
    public function wear();
}

class Hat implements ClothesProduct
{
    public function wear()
    {
        echo 'It is a good hat.' . "\n";
    }
}

class Shoes implements ClothesProduct
{
    public function wear()
    {
        echo 'They are good shoes.' . "\n";
    }
}


$egg = FoodShop::getEgg();
$egg->eat();

$milk = FoodShop::getMilk();
$milk->eat();

$hat = ClothesShop::getHat();
$hat->wear();

$shoes = ClothesShop::getShoes();
$shoes->wear();