<?php
namespace mall;

/**
 * 商店
*/
abstract class Shop
{
    public abstract function getName();
}

/**
 * 食品店
*/
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

/**
 * 服装店
*/
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

/**
 * 食物
*/
interface FoodProduct
{
    public function eat();
}

/**
 * 鸡蛋
*/
class Egg implements FoodProduct
{
    public function eat()
    {
        echo 'The egg is tasty.' . "\n";
    }
}

/**
 * 牛奶
*/
class Milk implements FoodProduct
{
    public function eat()
    {
        echo 'The milk is tasty.' . "\n";
    }
}

/**
 * 服装
*/
interface ClothesProduct
{
    public function wear();
}

/**
 * 帽子
*/
class Hat implements ClothesProduct
{
    public function wear()
    {
        echo 'It is a good hat.' . "\n";
    }
}

/**
 * 鞋子
*/
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