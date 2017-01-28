<?php
/**
 * @file StrategyOne.php
 * @author lurenzhong@xiaomi.com
 * @brief 实现策略接口的策略one
 */
class StrategyOne implements StrategyInterface
{
    /**
     * 策略one具体做的事情
     */
    public function doSomeThing()
    {
        echo '策略one干了一些事情，做了一些操作!'. "\n";
    }
    
}
