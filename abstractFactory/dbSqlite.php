<?php
/**
 * @file DbSqlite.php
 * @author lurenzhong@xiaomi.com
 * @brief 实现db接口的dbSqlite类
 */

class DbSqlite implements DbInterface
{
    /**
     * 连接数据库
     */
    public function conn()
    {
        echo '连接Sqlite数据库成功!'. "\n";
    }

}
