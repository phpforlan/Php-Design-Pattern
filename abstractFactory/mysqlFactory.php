<?php
/**
 * @file MysqlFactory.php
 * @author lurenzhong@xiaomi.com
 * @brief mysql工厂类
 */

class MysqlFactory implements FactoryInterface
{
    /**
     * 创建Mysql数据库实例
     */
    public static function createDb()
    {
        return new dbMysql();
    }

    /**
     * 创建Mysql用户实例
     */
    public static function createUser()
    {
        return new userMysql();
    }

}
