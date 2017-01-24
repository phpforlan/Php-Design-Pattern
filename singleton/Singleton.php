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
    private function __construct()
    {

    }

    /**
     * 获取单例
     */
    public static function getInstance()
    {
        if( !self::$instance instanceof self ){
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * 防止用户克隆实例
     */
    public function __clone()
    {
       exit('clone is not allowed!'. "\n"); 
    }

}
