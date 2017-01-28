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
$mysqlFactory = new mysqlFactory(); //实例化Mysql工厂
$dbMysql = $mysqlFactory->createDb(); //创建Mysql实例
$dbMysql->conn();

//2.测试sqlite工厂 
$sqliteFactory = new sqliteFactory(); //实例化sqlite工厂
$dbSqlite = $sqliteFactory->createDb(); //创建sqlite实例
$dbSqlite->conn();
