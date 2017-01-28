<?php
/**
 * @file simpleFactory.php
 * @author lurenzhong@xiaomi.com
 * @brief 简单工厂模式-通过静态方法创建对象
 */

class simpleFactory 
{
    /**
     * 创建男人对象
     */
    public static function createMan()
    {
        return new Man();
    }

    /**
     * 创建女人对象
     */
    public static function createWoman()
    {
        return new Woman();
    }
    
}
