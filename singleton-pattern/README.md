## 单例模式
> 单例模式涉及到一个单一的类，该类负责创建自己的对象，同时确保只有单个对象被创建。这个类提供了一种访问其唯一的对象的方式，可以直接访问，不需要实例化该类的对象。

### 意图
* 保证一个类仅有一个实例，并提供一个访问它的全局访问点。

### 主要解决
* 一个全局使用的类频繁地创建与销毁。

### 何时使用
* 当您想控制实例数目，节省系统资源的时候。

### 如何解决
* 判断系统是否已经有这个单例，如果有则返回，如果没有则创建。

### 代码示例
* 单例类只能有一个实例；
* 单例类必须自己创建自己的唯一实例；
* 单例类必须给所有其他对象提供这一实例。

#### <a href="https://github.com/hhe0/design-pattern/blob/master/singleton-pattern/Config.php">Config.php</a>
* 使用单例模式获取配置。

#### <a href="https://github.com/hhe0/design-pattern/blob/master/singleton-pattern/SingletonExtension.php">SingletonExtension.php</a>
* 使用『多例模式』来获取配置。

### 总结与反思
* 我们可以通过一定的技术手段，控制一个类在系统中实例的个数；
* 使用单例模式也要避免使用全局变量造成的类似的问题：增加了系统的耦合度。

