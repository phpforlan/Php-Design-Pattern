<?php
/**
 * @file TestProxy.php
 * @author lurenzhong@xiaomi.com
 * @brief 测试代理模式(不需要关注内部实现，交给代理对象即可)
 */

/** 注册自动加载 */
function autoload($className)
{
    require_once './'. $className. '.php';
}

spl_autoload_register('autoload');


/** 开始测试代理模式 */
$shoesProxyObj = new ShoesProxy();

//生产滑板鞋
$shoesProxyObj->product('skateboard');

//生产运动鞋
$shoesProxyObj->product('sport');
