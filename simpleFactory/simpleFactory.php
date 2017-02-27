<?php
/**
 * @file SimpleFactory.php
 * @author lurenzhong@xiaomi.com
 * @brief 简单工厂类( 通过调用静态方法来生成对象实例 )
 */

class SimpleFactory
{
    /**
     * 生成男人对象实例
     */
    public static function makeMan()
    {
        return new Man();
    }


    /**
     * 生成女人对象实例
     */
    public static function makeWoman()
    {
        return new Woman();
    }

}
