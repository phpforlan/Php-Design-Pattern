<?php
/**
 * @file Woman.php
 * @author lurenzhong@xiaomi.com
 * @brief 实现人类接口的女人类
 */

class Woman implements PeopleInterface
{
    /**
     * 女人的说话方法
     */
    public function say()
    {
        echo '我是女人，我在说话!'. "\n";
    }

}
