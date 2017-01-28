<?php
/**
 * @file man.php
 * @author lurenzhong@xiaomi.com
 * @brief 实现人类接口的男人类
 */

class man implements peopleInterface
{
    public function say()
    {
        echo '我是男人'. "\n";
    }

}
