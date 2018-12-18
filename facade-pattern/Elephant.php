<?php
namespace elephant;

class ElephantIntoFridge
{
    public static function openFridge()
    {
        echo 'First Step: open the fridge' . "\n";
    }

    public static function IntoFridge()
    {
        echo 'Second Step: put the elephant into the fridge.' . "\n";
    }

    public static function closeFridge()
    {
        echo 'Third Step: close the fridge.' . "\n";
    }

    public static function putElephantIntoFridge()
    {
        // 打开冰箱
        self::openFridge();
        // 把大象塞到冰箱里
        self::IntoFridge();
        // 关上冰箱
        self::closeFridge();
    }
}

// 保留客户端对于原接口的访问
// 把大象放到冰箱需要三步：打开冰箱、把大象塞到冰箱里、关上冰箱
ElephantIntoFridge::openFridge();
ElephantIntoFridge::IntoFridge();
ElephantIntoFridge::closeFridge();

// 现在客户端可以更加方便的使用接口，隐藏了系统的复杂性
// 现在把大象放到冰箱只需要一步！
ElephantIntoFridge::putElephantIntoFridge();