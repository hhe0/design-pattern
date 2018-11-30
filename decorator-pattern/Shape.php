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
        echo 'circle.' . "\n";
    }
}

abstract class ShapeDecorator implements Shape
{
    protected $shapeDecorator;

    public function __construct(Shape $shape)
    {
        $this->shapeDecorator = $shape;
    }

    public function show()
    {
        $this->shapeDecorator->show();
    }
}

class Large extends ShapeDecorator
{
    public function show()
    {
        echo 'I am a big ';

        $this->shapeDecorator->show();
    }
}

class Small extends ShapeDecorator
{
    public function show()
    {
        echo 'I am a small ';

        $this->shapeDecorator->show();
    }
}

$circleA = new Large(new Circle());
$circleA->show();

$circleB = new Small(new Circle());
$circleB->show();