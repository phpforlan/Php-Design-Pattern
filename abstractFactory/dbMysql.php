<?php
/**
 * @file dbMysql.php
 * @author lurenzhong@xiaomi.com
 * @brief 实现db接口的dbMysql类
 */

class dbMysql implements dbInterface
{
    public function conn()
    {
        echo '连接Mysql数据成功!'. "\n";
    }

}
