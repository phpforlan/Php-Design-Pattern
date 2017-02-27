<?php
/**
 * @file testSimpleFactory.php
 * @author lurenzhong@xiaommi.com
 * @brief 测试简单工厂模式( 在不暴露生成逻辑的前提下，生成一个对象实例 )
 */

/** 注册自动加载 */
function autoload($className)
{
    require_once './'. $className. '.php';
}

spl_autoload_register('autoload');


/** 测试简单工厂模式 */

//生成一个男人对象实例
$manObj = SimpleFactory::createMan();
$manObj->say();

//生成一个女人对象实例
$womanObj = SimpleFactory::createWoman();
$womanObj->say();
