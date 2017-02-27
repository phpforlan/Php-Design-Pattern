<?php
/**
 * @file SimpleFactory.php
 * @author lurenzhong@xiaomi.com
 * @brief 简单工厂类( 通过调用静态方法来生成对象实例 )
 */

class SimpleFactory
{
    /**
     * 创建男人对象实例
     */
    public static function createMan()
    {
        return new Man();
    }


    /**
     * 创建女人对象实例
     */
    public static function createWoman()
    {
        return new Woman();
    }

}
