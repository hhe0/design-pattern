## 观察者模式
> 当对象间存在一对多关系时，则使用观察者模式（Observer Pattern）。比如，当一个对象被修改时，则会自动通知它的依赖对象。观察者模式属于行为型模式。

### 意图
* 定义对象间的一种一对多的依赖关系，当一个对象的状态发生改变时，所有依赖于它的对象都得到通知并被自动更新。

### 主要解决
* 一个对象状态改变给其他对象通知的问题，而且要考虑到易用和低耦合，保证高度的协作。

### 何时使用
* 一个对象（目标对象）的状态发生改变，所有的依赖对象（观察者对象）都将得到通知，进行广播通知。

### 如何解决
* 使用面向对象技术，可以将这种依赖关系弱化。

### 代码示例
#### <a href="https://github.com/hhe0/design-pattern/blob/master/observer-pattern/Family.php">Family.php</a>
* 爸爸通知家庭成员妈妈、儿子以及女儿一起吃饭。

#### <a href="https://github.com/hhe0/design-pattern/blob/master/observer-pattern/Meeting.php">Meeting.php</a>
* 老板通知程序员、PM以及UI一起开会。

#### <a href="https://github.com/hhe0/design-pattern/blob/master/observer-pattern/School.php">School.php</a>
* 放学打铃通知老师、学生以及校长放学。

### 总结与反思
* `面向接口编程，而不是面向实现编程`思想的体现。