<?php

namespace myIterator;

/**
 * PHP官方手册提供的实例：http://php.net/manual/en/class.iterator.php
*/
class myIterator implements \Iterator {
    private $position = 0;
    private $array = array(
        "firstElement",
        "secondElement",
        "lastElement",
    );

    public function __construct() {
        $this->position = 0;
    }

    /**
     * 重置
    */
    public function rewind() {
        var_dump(__METHOD__);
        $this->position = 0;
    }

    /**
     * 该元素是否存在
    */
    public function valid() {
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }

    /**
     * 返回当前执行的元素
    */
    public function current() {
        var_dump(__METHOD__);
        return $this->array[$this->position];
    }

    /**
     * 返回当前的key
     */
    public function key() {
        var_dump(__METHOD__);
        return $this->position;
    }

    /**
     * 指向下一个元素
    */
    public function next() {
        var_dump(__METHOD__);
        ++$this->position;
    }
}

$it = new myIterator;
$it->rewind();
echo $it->current();
echo $it->key();die;

foreach($it as $key => $value) {
    var_dump($key, $value);
    echo "\n";
}