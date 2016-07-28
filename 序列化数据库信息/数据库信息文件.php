<?php

/**
 * Created by PhpStorm.
 * User: zhanghengyu
 * Date: 2016/7/28
 * Time: 11:47
 * 序列化数据库信息
 */
class MySqlInfo
{
    private $localhost;
    private $username;
    private $passwd;
    private $dbname;

    function __construct($localhost, $username, $passwd, $dbname)
    {
        $this->localhost = $localhost;
        $this->username = $username;
        $this->passwd = $passwd;
        $this->dbname = $dbname;
    }

    public function show_data()
    {
        return array(
                'localhost' => $this->localhost,
                'username' => $this->username,
                'passwd' => $this->passwd,
                'dbname' => $this->dbname
        );
    }
}

$mysqlInfo = new MySqlInfo('localhost', 'root', 'root', 'test');

$info = serialize($mysqlInfo);
file_put_contents('store', $info);


