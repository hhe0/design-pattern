<?php

namespace shape;

interface Shape
{
    public function show();
}

class Circle implements Shape
{
    public function show()
    {
        echo 'circle.' . PHP_EOL;
    }
}

abstract class SizeDecorator implements Shape
{
    protected $sizeDecorator;

    public function __construct(Shape $shape)
    {
        $this->sizeDecorator = $shape;
    }

    public function show()
    {
        $this->sizeDecorator->show();
    }
}

class Large extends SizeDecorator
{
    public function show()
    {
        echo 'I am a big ';

        $this->sizeDecorator->show();
    }
}

class Small extends SizeDecorator
{
    public function show()
    {
        echo 'I am a small ';

        $this->sizeDecorator->show();
    }
}

$circleA = new Large(new Circle());
$circleA->show();

$circleB = new Small(new Circle());
$circleB->show();