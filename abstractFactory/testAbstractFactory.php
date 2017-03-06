<?php
/**
 * @file testAbstractFactory.php
 * @author lurenzhong@xiaomi.com
 * @brief 测试抽象工厂模式
 */

/** 注册自动加载函数 */
function autoload($className)
{
    require_once './'. $className. '.php';
}
spl_autoload_register('autoload');

/** 测试 */

//1.测试mysql工厂
$mysqlDbObj = MysqlFactory::createDb(); //创建Mysql实例
$mysqlDbObj->conn();

$mysqlUserObj = MysqlFactory::createUser(); //创建user实例
$mysqlUserObj->insertUser();

echo '----------------'. "\n";

//2.测试sqlite工厂 
$sqliteDbObj = SqliteFactory::createDb(); //创建sqlite实例
$sqliteDbObj->conn();

$sqliteUserObj = SqliteFactory::createUser(); //创建user实例
$sqliteUserObj->insertUser();
