## 策略模式
> 在策略模式（Strategy Pattern）中，一个类的行为或其算法可以在运行时更改。这种类型的设计模式属于行为型模式。在策略模式中，我们创建表示各种策略的对象和一个行为随着策略对象改变而改变的 context 对象。策略对象改变 context 对象的执行算法。

### 意图
* 定义一系列的算法,把它们一个个封装起来, 并且使它们可相互替换。

### 主要解决
* 在有多种算法相似的情况下，使用 if...else 所带来的复杂和难以维护。

### 何时使用
* 一个系统有许多许多类，而区分它们的只是他们直接的行为。

### 如何解决
* 将这些算法封装成一个一个的类，任意地替换。

### 代码示例
* <a href="https://github.com/hhe0/design-pattern/blob/master/strategy-pattern/Duck.php">Duck.php</a>
* <a href="https://github.com/hhe0/design-pattern/blob/master/strategy-pattern/Kingdom.php">Kingdom.php</a>
* <a href="https://github.com/hhe0/design-pattern/blob/master/strategy-pattern/Programmer.php">Programmer.php</a>

### 总结与反思
* 将变化的方法单独封装在类中，避免代码的重复。

