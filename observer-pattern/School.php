<?php
namespace School;

/**
 * 主题接口
*/
interface SchoolSubject
{
    public function register(Observer $observer);

    public function notify();
}

/**
 * 铃铛类
*/
class Bell implements SchoolSubject
{
    protected $observer = [];

    public function register(Observer $observer)
    {
        $this->observer[] = $observer;
    }

    public function notify()
    {
        foreach($this->observer as $observer)
        {
            $observer->leave();
        }
    }
}

/**
 * 观察者接口
*/
interface Observer
{
    public function leave();
}

/**
 * 观察者1：老师
*/
class Teacher implements Observer
{
    public function leave()
    {
        echo 'Teacher go home' . "\n";
    }
}

/**
 * 观察者2：学生
*/
class Student implements Observer
{
    public function leave()
    {
        echo 'Student go home.' . "\n";
    }

}

/**
 * 观察者3：校长
*/
class Principal implements Observer
{
    public function leave()
    {
        echo 'Principal go home.' . "\n";
    }
}

$bell = new Bell();

$bell->register(new Teacher());
$bell->register(new Student());
$bell->register(new Principal());

$bell->notify();

