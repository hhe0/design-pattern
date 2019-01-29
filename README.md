## 面向对象与设计模式

### 设计模式
#### 行为型模式
* <a href="https://github.com/hhe0/design-pattern/tree/master/strategy-pattern">策略模式</a>
* <a href="https://github.com/hhe0/design-pattern/tree/master/observer-pattern">观察者模式</a>
* <a href="https://github.com/hhe0/design-pattern/tree/master/template-pattern">模板方法模式</a>
* 访问者模式
* <a href="https://github.com/hhe0/design-pattern/tree/master/command-pattern">命令模式</a>
* 中介者模式
* <a href="https://github.com/hhe0/design-pattern/tree/master/status-pattern">状态模式</a>
* 责任链模式
* 备忘录模式
* 解释器模式

#### 创建型模式
* <a href="https://github.com/hhe0/design-pattern/tree/master/singleton-pattern">单例模式</a>
* <a href="https://github.com/hhe0/design-pattern/tree/master/factory-pattern">工厂模式</a>
* 建造者模式
* 原型模式

#### 结构型模式
* <a href="https://github.com/hhe0/design-pattern/tree/master/decorator-pattern">装饰器模式</a>
* <a href="https://github.com/hhe0/design-pattern/tree/master/facade-pattern">外观模式</a>
* <a href="https://github.com/hhe0/design-pattern/tree/master/adapter-pattern">适配器模式</a>
* <a href="https://github.com/hhe0/design-pattern/tree/master/composite-pattern">组合模式</a>
* <a href="https://github.com/hhe0/design-pattern/tree/master/iterator-pattern">迭代器模式</a>
* 桥接模式
* 享元模式
* <a href="https://github.com/hhe0/design-pattern/tree/master/proxy-pattern">代理模式</a>

### UML类图
* 泛华关系(Generalization)：用来描述继承关系；
* 实现关系(Realization)：用来实现一个接口；
* 聚合关系(Aggregation)：表示整体由部分组成，但是整体和部分不是强依赖的，整体不存在了部分还是会存在；
* 组合关系(Composition)：和聚合不同，组合中整体和部分是强依赖的，整体不存在了部分也不存在了；
* 关联关系(Association)：表示不同类对象之间有关联，这是一种静态关系，与运行过程的状态无关，在最开始就可以确定；
* 依赖关系(Dependency)：和关联不同，依赖关系是在运行过程中起作用的（A类是B类方法的局部变量、A类是B类方法当中的一个参数、A类向B类发送消息，从而影响B类发生变化）。

### 面向对象三大特性
#### 封装
* 隐藏内部数据和实现细节；
* 提供外部访问接口。
 
#### 继承
* `IS-A`关系的实现；
* 必须遵循`里氏替换原则`，即`子类对象必须能够替换掉所有父类对象`。

#### 多态
* 编译时多态：方法的重载；
* 运行时多态：继承、覆盖（重写）、向上转型。

### 面向对象基本原则
#### 单一责任原则
* 修改一个类的原因应该只有一个。

#### 开放封闭原则
* 类应该对扩展开放，对修改关闭。

#### 里氏替换原则
* 子类对象必须能够替换掉所有父类对象。

#### 接口分离原则
* 不应该强迫客户依赖于它们不用的方法。

#### 依赖倒置原则
* 高层模块不应该依赖于底层模块，二者都应该依赖于抽象；
* 抽象不应该依赖于细节，细节应该依赖于抽象。

##### 依赖于抽象
* 任何变量都不应该持有一个指向具体类的指针或者引用；
* 任何类都不应该从具体类派生；
* 任何方法都不应该覆写它的任何基类中的已经实现的方法。

#### 迪米特法则
* 一个对象应当对其他对象有尽可能少的了解，不和陌生人说话。

#### 合成复用原则
* 尽量使用对象组合，而不是通过继承来达到复用的目的。

#### 共同封闭原则
* 一起修改的类，应该组合在一起（同一个包里）。如果必须修改应用程序里的代码，我们希望所有的修改都发生在一个包里（修改关闭），而不是遍布在很多包里。

#### 稳定抽象原则
* 最稳定的包应该是最抽象的包，不稳定的包应该是具体的包，即包的抽象程度跟它的稳定性成正比。

#### 稳定依赖原则
* 包之间的依赖关系都应该是稳定方向依赖的，包要依赖的包要比自己更加有稳定性。

### 运行
* 在命令行下切换到相应的目录下输入命令，例如：`php Duck.php`，回车后即运行脚本。

### 说明
* 抽时间会为程序代码添加`UML类图`方便理解；
* 如果代码中存在错误，或者有更好的方法实现，欢迎提出、理性交流。

### 参考资料
* <a href="https://book.douban.com/subject/6559267/">《HeadFirst 设计模式》</a>
* <a href="https://book.douban.com/subject/2243615/">《深入PHP 面向对象、模式与实践》</a>
* <a href="https://design-patterns.readthedocs.io/zh_CN/latest/index.html">图说设计模式</a>
* <a href="https://github.com/sushengbuhuo/php-interview-2018">php-interview-2018</a>
