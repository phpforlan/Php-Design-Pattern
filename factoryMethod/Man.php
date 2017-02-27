<?php
/**
 * @file Man.php
 * @author lurenzhong@xiaomi.com
 * @brief 实现人类接口的男人类
 */

class Man implements PeopleInterface
{
    /**
     * 男人说话的方法
     */
    public function say()
    {
        echo '我是男人，我在说话!'. "\n";
    }

}
