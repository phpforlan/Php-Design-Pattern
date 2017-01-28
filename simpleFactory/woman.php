<?php
/**
 * @file woman.php
 * @author lurenzhong@xiaomi.com
 * @brief 实现人类接口的女人类
 */

class woman implements peopleInterface
{
    public function say()
    {
        echo '我是女人'. "\n";
    }

}
