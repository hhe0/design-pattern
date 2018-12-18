<?php
namespace draw;

class DrawFacade
{
    public function drawHuman()
    {
        $this->drawHead();
        $this->drawBody();
        $this->drawLeg();
        $this->drawFoot();
    }

    public function drawHead()
    {
        echo 'I am drawing the head.' . "\n";
    }

    public function drawBody()
    {
        echo 'I am drawing the body.' . "\n";
    }

    public function drawLeg()
    {
        echo 'I am drawing the leg.' . "\n";
    }

    public function drawFoot()
    {
        echo 'I am drawing the foot.' . "\n";
    }
}


$painter = new DrawFacade();

// 依次绘画
$painter->drawHead();
$painter->drawBody();
$painter->drawLeg();
$painter->drawFoot();

// 一次绘画
$painter->drawHuman();