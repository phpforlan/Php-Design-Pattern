<?php
/**
 * @file ObservableInterface.php
 * @author lurenzhong@xiaomi.com
 * @brief 被观察者接口
 */

interface ObservableInterface
{
    /**
     * 附加观察者
     * @return void
     */
    public function attach(ObserverInterface $observer);

    /**
     * 解除观察者
     * @return void
     */
    public function detach(ObserverInterface $observer);

    /**
     * 通知所有观察者
     * @return void
     */
    public function notify();

}
