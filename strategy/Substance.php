<?php
/**
 * @file Substance.php
 * @author lurenzhong@xiaomi.com
 * @brief 依赖外部不同策略的实体类
 */

class Substance
{
    private $strategy; //策略实例

    /**
     * 构造函数-初始化策略
     */
    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * 执行策略的操作
     */
    public function operation()
    {
        $this->strategy->doSomeThing();
    }

}
