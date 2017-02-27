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
        echo 'I am a man, i am talking!'. "\n";
    }

}
