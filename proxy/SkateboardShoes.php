<?php
/**
 * @file SkateboardShoes.php
 * @author lurenzhong@xiaomi.com
 * @brief 实现鞋子接口的滑板鞋类
 */

class SkateboardShoes implements ShoesInterface
{
    public function product()
    {
        echo '生产滑板鞋!'. "\n";
    }

}
