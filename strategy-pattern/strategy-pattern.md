## 策略模式
> 对不同类的同一行为的不同实现进行封装：将相同的不同放在一起，将不同的地方放在一起，减少代码耦合，增加可复用性。

### 解决问题
* 一个行为如果被多个类所共有，如何处理？

### 代码示例
#### <a href="https://github.com/hhe0/design-pattern/blob/master/strategy-pattern/Duck.php">Duck.php</a>
* 有很多种不同的鸭子；
* 每种不同的鸭子的叫声不同，或者根本不会叫。

#### <a href="https://github.com/hhe0/design-pattern/blob/master/strategy-pattern/Kingdom.php">Kingdom.php</a>
* 在王国里存在国王、王后、骑士、troll（不知道怎么翻译）；
* 不同的任务角色具有不同的战斗方式。

#### <a href="https://github.com/hhe0/design-pattern/blob/master/strategy-pattern/Programmer.php">Programmer.php</a>
* 存在使用不同编程语言的程序员，例如：PHP程序员、JAVA程序员、C程序员；
* 每种程序员编程时使用的语言不同。

### 总结与反思
* 多去体会一下`面向接口编程，而不是面向实现编程`；
* 是否是说我们每有一个封装的行为就需要传递一个对象？这样会不会很麻烦？