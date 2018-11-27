<?php
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

class Queen extends Character
{
    public function __construct(KnifeBehavior $weaponBehavior)
    {
        parent::__construct($weaponBehavior);
    }
}

class King extends Character
{
    public function __construct(BowAndArrowBehavior $weaponBehavior)
    {
        parent::__construct($weaponBehavior);
    }
}

class Troll extends Character
{
    public function __construct(AxeBehavior $weaponBehavior)
    {
        parent::__construct($weaponBehavior);
    }
}

class Knight extends Character
{
    public function __construct(SwordBehavior $weaponBehavior)
    {
        parent::__construct($weaponBehavior);
    }
}

interface WeaponBehavior
{
    public function fight();
}

class KnifeBehavior implements WeaponBehavior
{
    public function fight()
    {
        echo 'fight with knife.' . "\n";
    }
}

class BowAndArrowBehavior implements WeaponBehavior
{
    public function fight()
    {
        echo 'fight with bow-and-arrow.' . "\n";
    }
}

class AxeBehavior implements WeaponBehavior
{
    public function fight()
    {
        echo 'fight with axe.' . "\n";
    }
}

class SwordBehavior implements WeaponBehavior
{
    public function fight()
    {
        echo 'fight with sword.' . "\n";
    }
}

$queen = new Queen(new KnifeBehavior());
$queen->performFight();

$king = new King(new BowAndArrowBehavior());
$king->performFight();

$troll = new Troll(new AxeBehavior());
$troll->performFight();

$knight = new Knight(new SwordBehavior());
$knight->performFight();