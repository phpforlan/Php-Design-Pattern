<?php
/**
 * @file Singleton.php
 * @author lurenzhong@baidu.com
 * @date 16/1/27
 * @brief 单例模式（懒汉式）
 * @comment php不支持饿汉式的单例模式，因为php不支持在类定义时，给类的成员变量赋予非基本类型的值
 * @version
 */

class Singleton
{
    //用于保存类的实例
    private static $instance = null;

    /**
     * 构造方法私有化，不允许外部直接创建对象
     */
    private function __construct(){

    }

    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    /**
     * 防止用户克隆实例
     */
    public function __clone(){
        die('Clone is not allowed.'.E_USER_ERROR);
    }

}

//usage:
$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

if( $singleton1 === $singleton2 ){
    echo '同一个实例';
}else{
    echo '不是同一个实例';
}
