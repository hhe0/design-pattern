## 适配器模式
> 将一个类的接口，转换成客户期望的另一个接口。适配器让原本不兼容的类可以合作无间。

### 解决问题
> 包装新的接口用以适应旧的接口。

### 代码示例

#### <a href="https://github.com/hhe0/design-pattern/blob/master/adapter-pattern/MonkeyKing.php">MonkeyKing.php</a>
* 美猴王会七十二变，可以变成鸟，拥有鸟的行为。

#### <a href="https://github.com/hhe0/design-pattern/blob/master/adapter-pattern/Chameleon.php">Chameleon.php</a>
* 变色龙适应环境的例子。

### 总结与反思
* 适配器类必须含有被适配类的实例，且实现是适配类的接口。