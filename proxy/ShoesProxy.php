<?php
/**
 * @file ShoesProxy.php
 * @author lurenzhong@xiaomi.com
 * @brief 代理对象(代理其他对象的操作)
 */

class ShoesProxy 
{
    private $shoesObj = null; //鞋子对象

    /**
     * @param string $shoesType 要生产的鞋子类型
     */
    public function product($shoesType)
    {
        switch($shoesType){
            case 'skateboard':
                $this->shoesObj = new SkateboardShoes();
                break;
            case 'sport':
                $this->shoesObj = new SportShoes();
                break;
            default:
                echo '不支持生产该类型的鞋子!'. "\n";
                exit;
        }

        $this->shoesObj->product();
    }

}
