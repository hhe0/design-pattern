## 装饰器模式
> 将一个类的对象嵌入到另一个对象中，而另一个对象来决定是否调用嵌入对象的行为以便扩展自己的行为，我们称这个嵌入的对象为`装饰器`。

### 解决问题
* 装饰模式以对客户透明的方式动态地给一个对象附加上更多的责任，换言之，客户端并不会觉得对象在装饰前和装饰后有什么不同。装饰模式可以在不需要创造更多子类的情况下，将对象的功能加以扩展。这就是装饰模式的模式动机。

### 代码示例
#### <a href="https://github.com/hhe0/design-pattern/blob/master/decorator-pattern/MilkTea.php">MilkTea.php</a>
* 一杯奶茶可以加抹茶、珍珠、椰果，计算其价格、输出其描述；
* 一杯加了抹茶的奶茶仍然是一杯奶茶，我们为其增加了新的行为，赋予了新的责任。

#### <a href="https://github.com/hhe0/design-pattern/blob/master/decorator-pattern/Transform.php">Transform.php</a>
* 汽车人可以变为机器人或者飞行器。

#### <a href="https://github.com/hhe0/design-pattern/blob/master/decorator-pattern/Shape.php">Shape.php</a>
* 存在大圆和小圆。

### 总结与反思
* `面向接口编程，而不是面向实现编程`思想的体现；
* 使用装饰器模式的好处是可以多次进行装饰，自由组合。