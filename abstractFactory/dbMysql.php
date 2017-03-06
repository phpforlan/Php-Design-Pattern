<?php
/**
 * @file DbMysql.php
 * @author lurenzhong@xiaomi.com
 * @brief 实现db接口的dbMysql类
 */

class DbMysql implements DbInterface
{
    public function conn()
    {
        echo '连接Mysql数据库成功!'. "\n";
    }

}
