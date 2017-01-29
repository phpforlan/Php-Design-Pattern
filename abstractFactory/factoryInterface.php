<?php
/**
 * @file factoryInterface.php
 * @author lurenzhong@xiaomi.com
 * @brief 抽象工厂接口
 */

interface factoryInterface
{
    /**
     * 创建数据库实例
     */
    public function createDb();

    /**
     * 插入新用户
     */
    public function createUser();

}
