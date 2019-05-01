<?php

namespace Meeting;

/**
 * 主题接口
*/
interface MeetingSubject
{
    public function register(MeetingObserver $meetingObserver);

    public function notify();
}

/**
 * 老板类
*/
class Boss implements MeetingSubject
{
    public $meetingObserver = [];

    public function register(MeetingObserver $meetingObserver)
    {
        $this->meetingObserver[] = $meetingObserver;
    }

    public function notify()
    {
        echo 'Let\'s have a meeting.' . "\n";

        foreach($this->meetingObserver as $observer)
        {
            $observer->Meeting();
        }
    }
}

/**
 * 观察者接口
*/
interface MeetingObserver
{
    public function Meeting();
}

/**
 * 观察者1：程序员
*/
class Programmer implements MeetingObserver
{
    public function Meeting()
    {
        echo 'I\'m coming -by a programmer.' . "\n";
    }
}

/**
 * 观察者2：产品经理
*/
class PM implements MeetingObserver
{
    public function Meeting()
    {
        echo 'I\'m coming -by a PM.' . "\n";
    }
}

/**
 * 观察者3：UI
*/
class UI implements MeetingObserver
{
    public function Meeting()
    {
        echo 'I\'m coming -by a UI.' . "\n";
    }
}

$boss = new Boss();

$boss->register(new Programmer());
$boss->register(new PM());
$boss->register(new UI());

$boss->notify();