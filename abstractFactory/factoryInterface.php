<?php
/**
 * @file FactoryInterface.php
 * @author lurenzhong@xiaomi.com
 * @brief 抽象工厂接口-定义一系列相关的接口方法
 */

interface FactoryInterface
{
    /**
     * 创建数据库实例的抽象方法
     */
    public static function createDb();

    /**
     * 创建用户实例的抽象方法
     */
    public static function createUser();

}
