<?php
/**
 * @file sqliteFactory.php
 * @author lurenzhong@xiaomi.com
 * @brief sqlite工厂类
 */

class sqliteFactory implements factoryInterface
{
    /**
     * 创建数据库实例
     */
    public function createDb()
    {
        return new dbSqlite();
    }

    /**
     * 创建用户实例
     */
    public function createUser()
    {
        return new userSqlite();
    }
}
