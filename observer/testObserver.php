<?php
/**
 * @file testObserver.php
 * @author lurenzhong@xiaomi.com
 * @brief 测试观察者模式
 */

/** 注册类的自动加载，避免手动require_once() */
function autoload($className)
{
    require_once './'. $className. '.php';
}

spl_autoload_register('autoload');


/** 测试 */

$observable = new Observable(); // 实例化一个被观察者

//实例化观察者们
$observerOne = new ObserverOne();
$observerTwo = new ObserverTwo();

//在被观察者里，注册观察者
$observable->attach($observerOne);
$observable->attach($observerTwo);

//被观察者通知观察者们
$observable->notify();
