### 场景描述
* 存在CdProduct和BookProduct；
* CdProduct和BookProduct存在一些共同点，比如都可以打印摘要信息，区别是打印方式略有区别；
* CdProduct存在独有的获取播放时长的操作；
* BookProduct存在独有的获取页数的操作。

### UML类图
![未命名文件.png-30.9kB][1]

### 代码描述
```php
<?php
//商品类
class ShopProduct 
{
	private $title;
	private $producerMainName;
	private $producerFirstName;
	private $price;
	// 可能有而又可能没有的属性，不通过构造器传入
	private $discount = 0;
	
	public function __construct($title, $firstName, $mainName, $price)
	{
		$this->title = $title;
		$this->producerMainName = $mainName;
		$this->producerFirstName = $firstName;
		$this->price = $price;
	}
	
	public function setDiscount($num)
	{
		return $this->discount;
	}
	
	public function getTitle()
	{
		return $this->title;
	}
	
	public function getProducerMainName()
	{
		return $this->producerMainName;
	}
	
	public function getProducerFirstName()
	{
		return $this->producerFirstName;
	}
	
	public function getPrice()
	{
		return $this->price;
	}
	
	public function getDiscount()
	{
		return $this->dicount;
	}
	
	public function getProducer()
	{
		return "{$this->producerFirstName}" . "{$this->producerMainName}";
	}
	
	// 在超类中也实现了getSummaryLine方法来保证所有的ShopProduct类包括其子类都拥有该方法
	function getSummaryLine()
	{
		$base = "$this->title({$this->producerMainName},";
		$base .= "{this->producerFirstName})";
		
		return $base;
	}
}

// Cd商品类
class CdProduct extends ShopProduct
{
	public $playLength = 0;
	
	public function __construct($title, $firstName, $mainName, $price, $playLength)
	{
		// 通过调用父类的构造器避免告诉父类任何关于子类的信息
		parent::__construct($title, $firstName, $mainName, $price);
		
		$this->playLength = $playLength;
	}
	
	public function getPlayLength()
	{
		return $this->playLength;
	}
	
	public function getSummaryLine()
	{
		$base = parent::getSummaryLine();
		$base .= "{: Playing time - {$this->playLength}}";
		
		return $base;
	}
}

// Book商品类
class BookProduct extends ShopProduct
{
	private $numPages = 0;
	
	public function __construct($title, $firstName, $mainName, $price, $numPages)
	{
		// 通过调用父类的构造器避免告诉父类任何关于子类的信息
		parent::__construct($title, $firstName, $mainName, $price);
		
		$this->numPages = $numPages;
	}
		
	public function getNumberOfPages()
	{
		return $this->numPages;
	}
	
	public function getSummaryLine()
	{
		$base = parent::getSummaryLine();
		$base .= "{: page count - {$this->numPages}}";
		
		return $base;
	}
}

// 在外部需要明确类名来区分不同的类
$CdProduct = new CdProduct("My Antonia", "Willa", "Cather", 5.99, 10);
$CdProduct->getSummaryLine();
$CdProduct->getPlayLength();

$BookProduct = new $BookProduct("Alex", "Pierre", "Lemaitre", 59, 416);
$BookProduct->getSummaryLine();
$BookProduct->getNumberOfPages();
```

### 小结
#### 属性的访问权限确定
* 先将其置为private，置为最严格的权限；
* 考虑是否子类需要使用该属性，需要使用则修改权限为protected；
* 考虑外部对象是否需要使用该属性，需要使用则修改权限为public或者保留private权限增加获得器。

#### 方法的访问权限确定
* 总体思路与属性一致，区别在于外部对象如果需要使用该方法，则该方法的访问权限应该置为public。


   [1]: http://static.zybuluo.com/Minc0/59z06zxi8uszae09a08zpt92/%E6%9C%AA%E5%91%BD%E5%90%8D%E6%96%87%E4%BB%B6.png