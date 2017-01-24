<?php
/**
 * @file ObserverTwo.php
 * @author lurenzhong@xiaomi.com
 * @brief 观察者two
 */

class ObserverTwo implements ObserverInterface
{
    /**
     * 行为方法
     */
    public function doSomeThing()
    {
        echo '观察者two干了一些事!'. "\n";
    }

}
