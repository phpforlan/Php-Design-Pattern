<?php
/**
 * @file StrategyTwo.php
 * @author lurenzhong@xiaomi.com
 * @brief 实现策略接口的策略two
 */

class StrategyTwo implements StrategyInterface
{
    /**
     * 策略two的具体行为方法
     */
    public function doSomeThing()
    {
        echo '策略two做了一些事情，干了一些操作!'. "\n";
    }
    
}
