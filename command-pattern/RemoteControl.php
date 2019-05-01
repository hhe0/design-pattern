<?php

namespace remoteControl;

/**
 * 遥控器类
 */
class RemoteControl
{
    const LIGHT_ON_BUTTON = 1;
    const LIGHT_OFF_BUTTON = 0;

    private $button = [];

    public function addButton(Button $button, $button_type)
    {
        $this->button[$button_type] = $button;
    }

    public function press($button_type)
    {
        $this->button[$button_type]->work();
    }
}


/**
 * 按钮接口
 */
interface Button
{
    // 按下按钮的操作
    public function work();
}

/**
 * 命令类：打开灯的按钮
 */
class LightOnButton implements Button
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function work()
    {
        $this->light->on();
    }
}

/**
 * 命令类：关闭灯的按钮
 */
class LightOffButton implements Button
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function work()
    {
        $this->light->off();
    }
}

/**
 * 接受类：灯
 */
class Light
{
    public function on()
    {
        echo 'The light is on now.' . "\n";
    }

    public function off()
    {
        echo 'The light is off now.' . "\n";
    }
}


$remoteControl = new RemoteControl();

$light = new Light();
$lightOnButton = new LightOnButton($light);
$lightOffButton = new LightOffButton($light);

// 开灯按钮
$remoteControl->addButton($lightOnButton, RemoteControl::LIGHT_ON_BUTTON);
// 关灯按钮
$remoteControl->addButton($lightOffButton, RemoteControl::LIGHT_OFF_BUTTON);

// 开灯
$remoteControl->press(RemoteControl::LIGHT_ON_BUTTON);
// 关灯
$remoteControl->press(RemoteControl::LIGHT_OFF_BUTTON);



