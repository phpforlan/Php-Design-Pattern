<?php
/**
 * @file WomanFactory.php
 * @author lurenzhong@xiaomi.com
 * @brief 实现人类工厂接口的女人工厂类
 */

class WomanFactory implements PeopleFactoryInterface
{
    /**
     * 创建一个对象实例的方法
     */
    public static function create()
    {
        return new Woman();
    }
    
}
