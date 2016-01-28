<?php
/**
 * @file Strategy.php
 * @author lurenzhong@baidu.com
 * @date 16/1/28
 * @brief 策略的接口类，约定策略的所有行为
 * @version
 */

interface Strategy
{
    /**
     * 算法接口
     * @return mixed
     */
    public function algorithmInterface();
}

//-----------------------------------------------------

/**
 * @file StrategyA.php
 * @author lurenzhong@baidu.com
 * @date 16/1/28
 * @brief 策略A的具体实现
 * @version
 */

class StrategyA implements Strategy
{
    /**
     * 算法A
     * @return mixed
     */
    public function algorithmInterface(){
        echo 'algorithm A!';
    }
}


//--------------------------------------

/**
 * @file StrategyB.php
 * @author lurenzhong@baidu.com
 * @date 16/1/28
 * @brief 策略B的具体实现
 * @version
 */

class StrategyB implements Strategy
{
    /**
     * 算法B
     * @return mixed
     */
    public function algorithmInterface(){
        echo 'algorithm B';
    }
}

//--------------------------------------------------------

/**
 * @file Context.php
 * @author lurenzhong@baidu.com
 * @date 16/1/28
 * @brief 环境角色，设置策略和执行策略
 * @version
 */
class Context
{
    private $strategy = null; //用于保存策略

    /**
     * 设置指定的策略
     * @param Strategy $strategy
     */
    public function setStrategy(Strategy $strategy){
        $this->strategy = $strategy;
    }

    /**
     * 执行策略的方法
     */
    public function index(){
        if( empty($this->strategy) ){
            echo 'no stragety';
            exit;
        }

        //执行策略的方法
        $this->strategy->algorithmInterface();
    }
}


//usage:
$context = new Context();
$strategyA = new StrategyA(); //实例化策略A
$context->setStrategy(); //设置策略A
$context->index(); //执行策略

