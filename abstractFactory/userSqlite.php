<?php
/**
 * @file userSqlite.php
 * @author lurenzhong@xiaomi.com
 * @brief sqlite用户类
 */

class userSqlite implements userInterface
{
    /**
     * 插入新用户
     */
    public function insertUser()
    {
        echo '插入Sqlite新用户成功!'. "\n";
    }

}
