### 场景描述
* 存在抽象类ShopProductWriter；
* 在该类的基础上存在不同的实现XmlProductWriter、TextProductWriter。

![未命名文件.png-14.5kB][1]

```php
<?php

abstract class ShopProductWriter
{
    protected $products = array();

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    abstract public function write();
}

class XmlProductWriter extends ShopProductWriter
{
    public function write()
    {
        $str = '<?xml version="1.0" encoding="UTF-8">' . "\n";
        $str .= "<products>\n";

        foreach ($this->products as $shopProduct)
        {
            $str .= "\t<product title=\"{$shopProduct->getTitle()}\">\n";
            $str .= "\t\t<summary>\n";
            $str .= "\t\t{$shopProduct->getSummaryLine()}\n";
            $str .= "\t\t</summary>\n";
            $str .= "\t</product>\n";
        }

        $str .= "</products>\n";

        print $str;
    }
}

class TextProductWriter extends ShopProductWriter
{
    public function write()
    {
        $str = "PRODUCTS:\n";

        foreach ($this->products as $shopProduct)
        {
            $str .= $shopProduct->getSummaryLine() . "\n";
        }

        print $str;
    }
}
```


  [1]: http://static.zybuluo.com/Minc0/xvvq1wujflffmdxcvxk00ok0/%E6%9C%AA%E5%91%BD%E5%90%8D%E6%96%87%E4%BB%B6.png