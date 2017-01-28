<?php
/**
 * @file testSimpleFactory.php
 * @author lurenzhong@xiaomi.com
 * @brief 测试简单工厂模式
 */

/** 注册自动加载函数 */
function autoload($className)
{
    require_once './'. $className. '.php';
}

spl_autoload_register('autoload');

/** 测试 */
$man = simpleFactory::createMan();
$man->say(); //我是男人

$woman = simpleFactory::createWoman();
$woman->say(); //我是女人
