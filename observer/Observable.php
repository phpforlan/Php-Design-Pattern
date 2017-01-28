<?php
/**
 * @file Observable.php
 * @author lurenzhong@xiaomi.com
 * @brief 实现接口的被观察者
 */

class Observable implements ObservableInterface
{
    private $observers = []; //保存所有观察者

    private $name = '被观察者A'; //保存被观察者名称

    /**
     * 魔术方法__get()，用于获取不存在的属性时,调用该方法
     * @param string $name 属性名称
     * @return mixed
     */
    public function __get($name = '')
    {
        return $this->$name;
    }

    /**
     * 附加观察者
     * @return boolean
     */
    public function attach(ObserverInterface $observer)
    {
        if( !in_array($observer, $this->observers, true) ) {
            $this->observers[] = $observer;
            return true;
        }else {
            return false;
        }
    }

    /**
     * 解除观察者
     */
    public function detach(ObserverInterface $observer)
    {
        //查找该观察者，如果存在，则unset
        if ( !empty($this->observers) ){
            foreach($this->observers as $k=>$observerItem){
                if( $observerItem == $observer ){
                    unset($this->observers[$k]);
                } 
            }
        }

    }

    /**
     * 通知所有观察者
     */
    public function notify()
    {
        //依次调用观察者的doSomeThing()方法
        if( !empty($this->observers) ){
            foreach($this->observers as $observerItem){
                if( method_exists($observerItem, 'doSomeThing') ){
                    $observerItem->doSomeThing($this);
                }
            }
        }

    }

}
