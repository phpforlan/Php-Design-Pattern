<?php
/**
 * @file Observerable.php
 * @author lurenzhong@baidu.com
 * @date 16/2/10
 * @brief 观察者模式
 * @version
 */


/**
 * 观察者接口，规定其中的方法（统一格式）
 * Interface Observerable
 */
interface Observerable
{
    /**
     * update更新方法
     * @return mixed
     */
    public function update();
}


/**
 * 观察者A
 * Class ObserverableA
 */
class ObserverableA implements Observerable
{
    /**
     * update更新方法
     * @return mixed
     */
    public function update(){
        echo '这里是观察者A，这里可以做一些更新操作';
    }
}


/**
 * 观察者B
 * Class ObserverableB
 */
class ObserverableB implements Observerable
{
    /**
     * update更新方法
     * @return mixed
     */
    public function update(){
        echo '这里是观察者B，这里可以做一些更新操作';
    }

}



class beObserverable
{
    private $observers = array(); //保存观察者

    /**
     * 添加观察者
     * @param Observerable $observerable
     */
    public function attach(Observerable $observerable){
        $this->observers[] = $observerable;
    }


    /**
     * 删除观察者
     * @param Observerable $observerable
     */
    public function detach(Observerable $observerable){

        foreach($this->observers as $k=>$val){
            if($val === $observerable){
                unset($this->observers[$k]);
            }
        }
    }

    /**
     * 触发更新操作（所有观察者）
     */
    public function trigger(){

        foreach($this->observers as $k=>$val){
            $val->update();
        }
    }

}



$observerableA = new ObserverableA(); //观察者A
$observerableB = new ObserverableB(); //观察者B

$beObserverable = new beObserverable(); //被观察者

//添加观察者A和观察者B
$beObserverable->attach($observerableA);
$beObserverable->attach($observerableB);

//触发更新操作（影响所有观察者）
$beObserverable->trigger();






