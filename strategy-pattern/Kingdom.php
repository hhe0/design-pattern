<?php

namespace Kingdom;

/**
 * 角色类
*/
abstract class Character
{
    protected $weaponBehavior;

    public function __construct(WeaponBehavior $weaponBehavior)
    {
        $this->weaponBehavior = $weaponBehavior;
    }

    public function performFight() 
    {
        $this->weaponBehavior->fight();
    }
}

class King extends Character
{
    public function __construct(KnifeBehavior $weaponBehavior)
    {
        parent::__construct($weaponBehavior);
    }
}

class Queen extends Character
{
    public function __construct(BowAndArrowBehavior $weaponBehavior)
    {
        parent::__construct($weaponBehavior);
    }
}

/**
 * 封装使用武器的行为
*/
interface WeaponBehavior
{
    public function fight();
}

class KnifeBehavior implements WeaponBehavior
{
    public function fight()
    {
        echo 'Fight with knife.' . PHP_EOL;
    }
}

class BowAndArrowBehavior implements WeaponBehavior
{
    public function fight()
    {
        echo 'Fight with bow-and-arrow.' . PHP_EOL;
    }
}


$king = new King(new KnifeBehavior());
$king->performFight();

$queen = new Queen(new BowAndArrowBehavior());
$queen->performFight();
