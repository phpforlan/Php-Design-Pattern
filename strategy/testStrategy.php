<?php
/**
 * @file testStrategy.php
 * @author lurenzhong@xiaomi.com
 * @brief 测试策略模式
 */

/** 注册自动加载 **/
spl_autoload_register('autoload');

function autoload($className)
{
    require_once './'. $className . '.php';
}

/** 测试 **/

//使用策略one
$substanceOne = new Substance(new StrategyOne);
$substanceOne->operation();

//使用策略two
$substanceTwo = new Substance(new StrategyTwo);
$substanceTwo->operation();
