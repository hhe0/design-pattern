## 模板方法模式
> 模板方法模式在一个方法中定义一个算法的骨架，而将一些步骤延迟到子类中。模板方法使得子类可以在不改变算法结构的情况下，重新定义算法中的某些步骤。

### 解决问题
* 用于封装算法步骤，具体的实现则是交由子类来完成。

### 代码示例
#### <a href="https://github.com/hhe0/design-pattern/blob/master/template-pattern/CaffeineBeverage.php">CaffeineBeverage.php</a>
* 餐厅一共提供两种饮料：咖啡和茶；
* 咖啡和茶的制作工艺大致相同，但也存在一定的区别。

### 总结与反思