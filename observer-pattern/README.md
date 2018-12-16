## 观察者模式
> 将不同的观察者类抽象为一个接口，主题类向接口发送通知，而不是向具体的类进行通知。

### 解决问题
* 如果新增新的观察者，必须更改主题类，不方便扩充。

### 代码示例
#### <a href="https://github.com/hhe0/design-pattern/blob/master/observer-pattern/Family.php">Family.php</a>
* 爸爸通知家庭成员妈妈、儿子以及女儿一起吃饭。

#### <a href="https://github.com/hhe0/design-pattern/blob/master/observer-pattern/Meeting.php">Meeting.php</a>
* 老板通知程序员、PM以及UI一起开会。

#### <a href="https://github.com/hhe0/design-pattern/blob/master/observer-pattern/School.php">School.php</a>
* 放学打铃通知老师、学生以及校长放学。

### 总结与反思
* `面向接口编程，而不是面向实现编程`思想的体现。