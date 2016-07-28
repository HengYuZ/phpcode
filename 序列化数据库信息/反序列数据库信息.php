<?php
/**
 * Created by PhpStorm.
 * User: zhanghengyu
 * Date: 2016/7/28
 * Time: 11:58
 * 反序列化数据库的信息
 */
include('./数据库信息文件.php');
$info = file_get_contents('store');
$mysqlInfo = unserialize($info);
//输出反序列化后得到的东西
var_dump($mysqlInfo->show_data());