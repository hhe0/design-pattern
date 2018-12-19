<?php
namespace caffeineBeverage;

abstract class CaffeineBeverage
{
    // 该方法在子类中不允许改变，保证步骤的正确性
    // 声明为final的子类无法被继承，声明为final的方法无法被覆盖
    final public function prepareRecipe()
    {
        $this->boilWater();

        $this->brew();

        if ($this->customerWantsCondiment()) {
            $this->addCondiment();
        }

        $this->pourInCup();
    }

    // 该方法一般为子类所共有
    // 提供默认实现，子类可以不实现而直接继承
    // 该方法在子类中一定存在
    public function boilWater()
    {
        echo 'boil water.' . "\n";
    }

    // 该方法为子类方法所特有，可能每个子类的实现都不同
    // 抽象方法，子类必须实现（子类不考虑为抽象类的情况）
    // 该方法在子类中一定存在
    public abstract function brew();

    // 该方法在步骤中可能有，可能没有，必须实现
    public abstract function addCondiment();

    public function pourInCup()
    {
        echo 'pour the beverage in the cup.' . "\n";
    }

    // 钩子方法，用来实现步骤中的可选方法
    // 在该类中提供默认行为，可以选择覆盖，或者直接继承
    public function customerWantsCondiment()
    {
        return true;
    }
}

class Tea extends CaffeineBeverage
{
    public function brew()
    {
        echo 'brew the tea.' . "\n";
    }

    public function addCondiment()
    {
        echo 'add honey.' . "\n";
    }

    // 茶里面加蜂蜜会不会有些怪？
    public function customerWantsCondiment()
    {
        return false;
    }
}

class Coffee extends CaffeineBeverage
{
    public function brew()
    {
        echo 'brew the coffee.' . "\n";
    }

    public function addCondiment()
    {
        echo 'add honey.' . "\n";
    }
}

$tea = new Tea();
$tea->prepareRecipe();

$coffee = new Coffee();
$coffee->prepareRecipe();