<?php
/**
 * @file Burger.php
 * @author lurenzhong@xiaomi.com
 * @brief 定义要做的汉堡包组成结构
 */

class Burger
{
    protected $size; //大小

    protected $cheese  = false; //加奶油
    protected $banger  = false; //加香肠
    protected $lettuce = false; //加生菜
    protected $tomato  = false; //加番茄汁

    /**
     * 需要把建造者对象传入进去,里面包含了制作汉堡需要的属性
     */
    public function __construct(BurgerBuilder $builder)
    {
        $this->size = $builder->size;
        $this->cheese = $builder->cheese;
        $this->banger = $builder->banger;
        $this->lettuce = $builder->lettuce;
        $this->tomato = $builder->tomato;
    }

}
