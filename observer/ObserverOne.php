<?php
/**
 * @file ObserverOne.php
 * @author lurenzhong@xiaomi.com
 * @brief 观察者one
 */

class ObserverOne implements ObserverInterface
{
    /**
     * 行为方法
     */
    public function doSomeThing(ObservableInterface $observable)
    {
        echo $observable->name. '通知观察者one干了一些事情!'. "\n";
    }

}
