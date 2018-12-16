## 工厂模式
* 用来生成对象的设计模式。

### 解决问题
* `工厂方法模式`通过让子类决定改创建的对象是什么，来达到将对象创建的过程封装的目的；
* `抽象工厂模式`提供一个接口，用于创建相关或依赖对象的家族，而不需要明确指定具体类。

### 代码示例
#### 简单工厂模式
##### <a href="https://github.com/hhe0/design-pattern/blob/master/factory-pattern/Toy.php">Toy.php</a>
* 存在一个玩具工厂，用来生产各种类型的玩具。

#### 工厂方法模式
##### <a href="https://github.com/hhe0/design-pattern/blob/master/factory-pattern/Juicer.php">Juicer.php</a>
* 存在两个饮料机：橙汁机和葡萄汁机；
* 橙汁机用于生产橙汁，葡萄汁机用于生产葡萄汁。

#### 抽象工厂模式
##### <a href="https://github.com/hhe0/design-pattern/blob/master/factory-pattern/Mall.php">Mall.php</a>
* 存在一个商场；
* 商场有两家商店：一家食品店，一家服装店；
* 食品店卖肉类、鸡蛋等；
* 服装店卖帽子、鞋子等。

### 总结与反思
* 客户端获取对象不一定非要使用`new`，可以使用`工厂模式`方式进行获取；
* 找出会变化的方面（工厂），把它们从不变的部分分离出来。