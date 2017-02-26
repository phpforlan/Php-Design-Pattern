<?php
/**
 * @file BurgerBuilder.php
 * @author lurenzhong@xiaomi.com
 * @brief 汉堡包建造者
 */

class BurgerBuilder
{
    public $size;

    public $cheese  = false;
    public $banger  = false;
    public $lettuce = false;
    public $tomato  = false;

    /**
     * 建造者构造函数
     */
    public function __construct($size)
    {
        $this->size = $size;
    }

    /**
     * 制作一个汉堡包(核心方法)
     */
    public function build()
    {
        return new Burger($this);
    }

    /**
     * 添加奶油
     */
    public function addCheese()
    {
        $this->cheese = true;
    }

    /**
     * 添加香肠
     */
    public function addBanger()
    {
        $this->banger = true;
    }

    /**
     * 添加生菜
     */
    public function addLettuce()
    {
        $this->lettuce = true;
    }

    /**
     * 添加番茄汁
     */
    public function addTomato()
    {
        $this->tomato = true;
    }

}
