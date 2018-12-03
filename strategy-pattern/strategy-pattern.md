## 策略模式
> 对行为进行封装并且提供统一的接口。

### 解决问题
* 一个行为如果被多个类所共有，如何减少代码重复和耦合？

### 代码示例
#### <a href="https://github.com/hhe0/design-pattern/blob/master/strategy-pattern/Duck.php">Duck.php</a>
* 有很多种不同的鸭子；
* 每种不同的鸭子的叫声不同，或者根本不会叫。

![未命名文件.png-25.6kB][1]

#### <a href="https://github.com/hhe0/design-pattern/blob/master/strategy-pattern/Kingdom.php">Kingdom.php</a>
* 在王国里存在国王、王后、骑士、troll（不知道怎么翻译）；
* 不同的任务角色具有不同的战斗方式。

![未命名文件.png-25.6kB][2]

#### <a href="https://github.com/hhe0/design-pattern/blob/master/strategy-pattern/Programmer.php">Programmer.php</a>
* 存在使用不同编程语言的程序员，例如：PHP程序员、JAVA程序员、C程序员；
* 每种程序员编程时使用的语言不同。

![未命名文件.png-32.6kB][3]

### 总结与反思
* 通过`面向接口编程，而不是面向实现编程`来增强程序的可扩展性。

  [1]: http://static.zybuluo.com/Minc0/zy4ftoitbfnuurpg8yke36hh/%E6%9C%AA%E5%91%BD%E5%90%8D%E6%96%87%E4%BB%B6.png
  [2]: http://static.zybuluo.com/Minc0/zy4ftoitbfnuurpg8yke36hh/%E6%9C%AA%E5%91%BD%E5%90%8D%E6%96%87%E4%BB%B6.png
  [3]: http://static.zybuluo.com/Minc0/yzdc5iai8ons8zg90q6xryne/%E6%9C%AA%E5%91%BD%E5%90%8D%E6%96%87%E4%BB%B6.png