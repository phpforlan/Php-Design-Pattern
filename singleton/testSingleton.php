<?php
    require_once './Singleton.php';

    //1.测试是否单例
    $singletonA = Singleton::getInstance();
    $SingletonB = Singleton::getInstance();

    if ( $singletonA == $SingletonB ){
        echo '同一个实例'. "\n";
    }else {
        echo '不同的实例'. "\n";
    }

    //2.测试是否允许直接实例化
    //$newSingleton = new Singleton(); //报fatal error
    
    //3.测试是否已经禁止克隆
    $cloneSingleton = clone $singletonA;
