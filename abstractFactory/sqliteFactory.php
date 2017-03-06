<?php
/**
 * @file SqliteFactory.php
 * @author lurenzhong@xiaomi.com
 * @brief sqlite工厂类
 */

class SqliteFactory implements FactoryInterface
{
    /**
     * 创建Sqlite数据库实例
     */
    public static function createDb()
    {
        return new dbSqlite();
    }

    /**
     * 创建Sqlite用户实例
     */
    public static function createUser()
    {
        return new userSqlite();
    }
}
