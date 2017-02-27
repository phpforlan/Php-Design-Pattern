<?php
/**
 * @file ManFactory.php
 * @author lurenzhong@xiaomi.com
 * @brief 实现人类工厂接口的男人工厂类
 */

class ManFactory implements PeopleFactoryInterface
{
    /**
     * 创建对象实例的方法
     */
    public static function create()
    {
        return new Man();
    }

}
