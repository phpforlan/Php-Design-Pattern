<?php
/**
 * @file SportShoes.php
 * @author lurenzhong@xiaomi.com
 * @brief 实现鞋子接口的运动鞋类
 */

class SportShoes implements ShoesInterface
{
    public function product()
    {
        echo '生产运动鞋!'. "\n";
    }

}
