## 策略模式
> 『策略模式』定义了算法族，分别封装起来，让它们之间可以互相替换，此模式让算法的变化独立于使用算法的客户。

### 解决问题
* 如何避免或减少因继承导致的代码重复？

### 代码示例
#### <a href="https://github.com/hhe0/design-pattern/blob/master/strategy-pattern/Duck.php">Duck.php</a>
* 有很多种不同的鸭子；
* 每种不同的鸭子的叫声不同，或者根本不会叫。

![未命名文件.png-25.6kB][1]

#### <a href="https://github.com/hhe0/design-pattern/blob/master/strategy-pattern/Kingdom.php">Kingdom.php</a>
* 在王国里存在国王、王后；
* 不同的任务角色具有不同的战斗方式。

![未命名文件.png-25.6kB][2]

#### <a href="https://github.com/hhe0/design-pattern/blob/master/strategy-pattern/Programmer.php">Programmer.php</a>
* 存在使用不同编程语言的程序员，例如：PHP程序员、JAVA程序员、C程序员以及数据程序员；
* 每种程序员编程时使用的语言不同；
* 数据程序员可能使用JAVA、C、PHP等语言；
* 通过封装编程的行为就可以在这里实现的避免了重复。

![未命名文件.png-32.6kB][3]

### 总结与反思
* `封装变化`原则的体现。

  [1]: http://static.zybuluo.com/Minc0/zy4ftoitbfnuurpg8yke36hh/%E6%9C%AA%E5%91%BD%E5%90%8D%E6%96%87%E4%BB%B6.png
  [2]: http://static.zybuluo.com/Minc0/zy4ftoitbfnuurpg8yke36hh/%E6%9C%AA%E5%91%BD%E5%90%8D%E6%96%87%E4%BB%B6.png
  [3]: http://static.zybuluo.com/Minc0/yzdc5iai8ons8zg90q6xryne/%E6%9C%AA%E5%91%BD%E5%90%8D%E6%96%87%E4%BB%B6.png