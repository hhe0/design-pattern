## 单例模式
> 用来创建独一无二的，只能有一个实例的对象。

### 解决问题
* 如何让变量在程序中实现共享，而不使用全局变量？
* 如果我们想控制一个类的实例在系统中的个数，如何实现？

### 代码示例
#### <a href="https://github.com/hhe0/design-pattern/blob/master/singleton-pattern/Config.php">Config.php</a>
* 使用单例模式获取配置。

#### <a href="https://github.com/hhe0/design-pattern/blob/master/singleton-pattern/SingletonExtension.php">SingletonExtension.php</a>
* 使用『多例模式』来获取配置。

### 总结与反思
* 我们可以通过一定的技术手段，控制一个类在系统中实例的个数；
* 使用单例模式也要避免使用全局变量造成的类似的问题：增加了系统的耦合度。

