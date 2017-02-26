<?php
/**
 * @file testPrototype.php
 * @author lurenzhong@xiaomi.com
 * @brief 测试创建型模式-原型模式(通过克隆已有的对象来创建新对象)
 */

/** 注册自动加载 */
function autoload($className)
{
    require_once './'. $className. '.php';
}
spl_autoload_register('autoload');

//创建一个原型对象
$prototypeObj = new Prototype('原型对象');

/** 获取第一个原型的clone */
$prototypeCloneObjOne = $prototypeObj->getPrototype();
$prototypeCloneObjOne->name = '第一个克隆对象';
echo $prototypeCloneObjOne->getName();

/** 获取第二个原型的clone */
$prototypeCloneObjTwo = $prototypeObj->getPrototype();
$prototypeCloneObjTwo->name = '第二个克隆对象';
echo $prototypeCloneObjTwo->getName();
