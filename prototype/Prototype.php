<?php
/**
 * @file Prototype.php
 * @author lurenzhong@xiaomi.com
 * @brief 原型类
 */

class Prototype
{
    private $name;

    /**
     * 构造函数
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 魔术方法__set
     */
    public function __set($property, $value)
    {
        $this->$property = $value;
    }

    /**
     * 获取对象的名称
     */
    public function getName()
    {
        echo '我是: '. $this->name. "\n";
    }

    /**
     * 获取原型对象
     */
    public function getPrototype()
    {
        return clone $this;
    }

}
