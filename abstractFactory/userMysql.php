<?php
/**
 * @file userMysql.php
 * @author lurenzhong@xiaomi.com
 * @brief mysql用户类
 */

class userMysql implements userInterface
{
    /**
     * 插入新用户
     */
    public function insertUser()
    {
        echo '插入Mysql新用户成功!'. "\n";
    }
}
