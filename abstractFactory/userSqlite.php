<?php
/**
 * @file UserSqlite.php
 * @author lurenzhong@xiaomi.com
 * @brief sqlite用户类
 */

class UserSqlite implements UserInterface
{
    /**
     * 插入新用户
     */
    public function insertUser()
    {
        echo '插入Sqlite新用户成功!'. "\n";
    }

}
