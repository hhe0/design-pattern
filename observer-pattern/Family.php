<?php
namespace Family;
/**
 * 主题接口
*/
interface FamilySubject
{
    public function register(FamilyObserver $observer);

    public function notify();
}

/**
 * 父亲充当主题，发送消息
*/
class Father implements FamilySubject
{
    public $observers = [];

    public function register(FamilyObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function notify()
    {
        echo 'Let\'s eat.' . "\n";
        foreach ($this->observers as $observer)
        {
            $observer->eat();
        }
    }
}

/**
 * 观察者接口
 */
interface FamilyObserver
{
    public function eat();
}

/**
 * 观察者1：母亲
*/
class Mom implements FamilyObserver
{
    public function eat()
    {
        echo 'I\'m Mom and I eat.' . "\n";
    }
}

/**
 * 观察者2：女儿
*/
 class Daughter implements FamilyObserver
 {
     public function eat()
     {
         echo 'I\'m Daughter and I eat.' . "\n";
     }
 }

 /**
  * 观察者3：儿子
 */
 class Son implements FamilyObserver
 {
     public function eat()
     {
         echo 'I\'m Son and I eat.' . "\n";
     }
 }

$father = new Father();

$father->register(new Son());
$father->register(new Mom());
$father->register(new Daughter());

$father->notify();