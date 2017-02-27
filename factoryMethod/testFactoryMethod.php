<?php
/**
 * @file testFactoryMethod.php
 * @author lurenzhong@xiaomi.com
 * @brief 测试创建型模式-工厂方法模式( 相比简单工厂模式,定义了一个包含创建对象方法的接口,让子类决定实例化哪个类。)
 */

/** 注册自动加载 */
function autoload($className)
{
    require_once './'. $className. '.php';
}
spl_autoload_register('autoload');


/** 测试工厂方法模式 */

//实例化一个男人对象
$manObj = ManFactory::create();
$manObj->say();

//实例化一个女人对象
$womanObj = WomanFactory::create();
$womanObj->say();
