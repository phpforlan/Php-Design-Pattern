<?php
/**
 * @file testBuilder.php
 * @author lurenzhong@xiaomi.com
 * @brief 测试建造者模式(当创建过程只有一个步骤的时候使用工厂模式，而当创建过程有多个步骤的时候使用建造者模式。)
 */

/** 自动加载 */

function autoload($className)
{
    require_once './'. $className . '.php';
}

spl_autoload_register('autoload');


/** 测试建造者模式 */
$burgerBuilerObj = new BurgerBuilder(14); //14寸大小的汉堡包建造者
$burgerBuilerObj->addCheese(); //添加奶油
$burgerBuilerObj->addBanger(); //添加香肠

$burgerObj = $burgerBuilerObj->build(); //正式建造汉堡包
var_dump($burgerObj);
