<?php
/**
 * @file mysqlFactory.php
 * @author lurenzhong@xiaomi.com
 * @brief mysql工厂类
 */

class mysqlFactory implements factoryInterface
{
    /**
     * 创建数据库实例
     */
    public function createDb()
    {
        return new dbMysql();
    }

    /**
     * 创建用户实例
     */
    public function createUser()
    {
        return new userMysql();
    }

}
