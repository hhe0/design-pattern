### 场景描述
* 存在Lecture和Seminar；
* 按照收费方式的不同分别分为FixedPriceLecture、TimedPriceLecture以及FixedPriceSeminar、TimedPriceSeminar。

### 方案一：使用继承
* 将收费方式的不同体现在子类：FixedPriceLecture、TimedPriceLecture、FixedPriceSeminar、TimedPriceSeminar。

#### UML类图
![未命名文件 (1).png-16.9kB][1]

#### 代码描述
```php
abstract class Lesson
{
    protected $duration;

    function __construct($duration)
    {
        $this->duration = $duration;
    }

    function cost() {}

    function chargeType() {}
}

class Lecture extends Lesson
{
    // Lecture的特定实现
}

class Seminar extends Lesson
{
    // Seminar的特定实现
}

class FixedPriceLecture extends Lecture
{
    function cost()
    {
        return 30;
    }

    function chargeType()
    {
        return 'fixed rate';
    }
}

class TimedPriceLecture extends Lecture
{
    function cost()
    {
        return (5 * $this->duration);
    }

    function chargeType()
    {
       return 'hourly rate';
    }
}

class FixedPriceSeminar extends Seminar
{
    function cost()
    {
        return 30;
    }

    function chargeType()
    {
        return 'fixed rate';
    }
}

class TimedPriceSeminar extends Seminar
{
    function cost()
    {
        return (5 * $this->duration);
    }

    function chargeType()
    {
        return 'hourly rate';
    }
}

$fixedLecture = new FixedPriceLecture(5);
print "{$fixedLecture->cost()} ({$fixedLecture->chargeType()})\n";

$timedSeminar = new TimedPriceSeminar(3);
print "{$timedSeminar->cost()} ({$timedSeminar->chargeType()})\n";
```

#### 小结
* 这种实现方式的一个很明显的一个弊端就是一个算法被冗余了多次，一旦发生了更改则需要更改多个地方，耦合度高；
* 子类之间的差异性是通过自身覆盖方法体现的。

### 方案二：使用继承
* 将收费方式的不同体现在类Lesson。
#### UML类图
![未命名文件 (1).png-16.9kB][1]
#### 代码描述
```php
abstract class Lesson
{
    protected $duration;
    const FIXED = 1;
    const TIMED = 2;
    private $costtype;

    function __construct($duration, $costtype = 1)
    {
        $this->duration = $duration;
        $this->costtype = $costtype;
    }

    function cost()
    {
        switch ($this->costtype)
        {
            case self::TIMED:
                return (5 * $this->duration);
                break;
            case self::FIXED:
                return 30;
                break;
            default:
                $this->costtype = self::FIXED;
                return 30;
        }
    }

    function chargeType()
    {
        switch ($this->costtype)
        {
            case self::TIMED:
                return 'hourly rate';
                break;
            case self::FIXED:
                return 'fixed rate';
            default:
                $this->costtype = self::FIXED;
                return 'fixed rate';
        }
    }
}

class Lecture extends Lesson
{
    // Lecture的特定实现
}

class Seminar extends Lesson
{
    // Seminar的特定实现
}

$lecture = new Lecture(5, Lesson::FIXED);
print "{$lecture->cost()} ({$lecture->chargeType()})\n";

$seminar = new Seminar(3, Lesson::TIMED);
print "{$seminar->cost()} ({$seminar->chargeType()})\n";
```
#### 小结
* 这种实现方式的好处是算法只被实现了一次，缺点是与我们使用多态来替代条件分支的思想背道而驰；
* 子类之间的差异性是在父类中传递参数实现的。

### 方案三：使用组合
* 将各种收费方式剥离出来形成一个对象。
#### UML类图
![未命名文件 (2).png-18.5kB][2]
#### 代码描述
```php
abstract class Lesson
{
    private $duration;
    private $costStrategy;

    function __construct($duration, CostStrategy $strategy)
    {
        $this->duration = $duration;
        $this->costStrategy = $strategy;
    }

    function cost()
    {
        return $this->costStrategy->cost($this);
    }

    function chargeType()
    {
        return $this->costStrategy->chargeType($this);
    }

    function getDuration()
    {
        return $this->duration;
    }

    // Lesson类的更多方法
}

class Lecture extends Lesson
{
    // Lecture的特定实现
}

class Seminar extends Lesson
{
    // Seminar的特定实现
}

abstract class CostStrategy
{
    abstract function cost(Lesson $lesson);
    abstract function chargeType(Lesson $lesson);
}

class TimedCostStrategy extends CostStrategy
{
    function cost(Lesson $lesson)
    {
        return ($lesson->getDuration() * 5);
    }
    
    function chargeType(Lesson $lesson)
    {
        return 'hourly rate';
    }
}

class FixedCostStrategy extends CostStrategy
{
    function cost(Lesson $lesson)
    {
        return 30;
    }

    function chargeType(Lesson $lesson)
    {
        return 'fixed rate';
    }
}

$lecture = new Lecture(4, new FixedCostStrategy());
print "{$lecture->cost()} ({$lecture->chargeType()})\n";

$seminar = new Seminar(4, new TimedCostStrategy());
print "{$seminar->cost()} ({$seminar->chargeType()})\n";

```
#### 小结
* 使用策略模式通过组合而非继承可以很好的解决这个问题。

  [1]: http://static.zybuluo.com/Minc0/9i7hf9c3ey0gn7dabitj8ppy/%E6%9C%AA%E5%91%BD%E5%90%8D%E6%96%87%E4%BB%B6%20%281%29.png
  [2]: http://static.zybuluo.com/Minc0/rbbe79xwg9j72zi50y902luw/%E6%9C%AA%E5%91%BD%E5%90%8D%E6%96%87%E4%BB%B6%20%282%29.png