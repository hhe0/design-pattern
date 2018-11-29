<?php
namespace Kingdom;

/**
 * 角色类
*/
abstract class Character
{
    protected $weaponBehavior;

    protected function __construct(WeaponBehavior $weaponBehavior)
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
    public function __construct(SwordBehavior $weaponBehavior)
    {
        parent::__construct($weaponBehavior);
    }
}

class Queen extends Character
{
    public function __construct(KnifeBehavior $weaponBehavior)
    {
        parent::__construct($weaponBehavior);
    }
}


class Knight extends Character
{
    public function __construct(AxeBehavior $weaponBehavior)
    {
        parent::__construct($weaponBehavior);
    }
}

class Troll extends Character
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
        echo 'Fight with knife.' . "\n";
    }
}

class BowAndArrowBehavior implements WeaponBehavior
{
    public function fight()
    {
        echo 'Fight with bow-and-arrow.' . "\n";
    }
}

class AxeBehavior implements WeaponBehavior
{
    public function fight()
    {
        echo 'Fight with axe.' . "\n";
    }
}

class SwordBehavior implements WeaponBehavior
{
    public function fight()
    {
        echo 'Fight with sword.' . "\n";
    }
}


$king = new King(new SwordBehavior());
$king->performFight();

$queen = new Queen(new KnifeBehavior());
$queen->performFight();

$knight = new Knight(new AxeBehavior());
$knight->performFight();

$troll = new Troll(new BowAndArrowBehavior());
$troll->performFight();

