<?php
/**
 * Created by PhpStorm.
 * User: zhanghengyu
 * Date: 2016/7/28
 * Time: 12:27
 * 往文件写入信息
 */

//获取文件指针,以写入方式打开
$handle = fopen("./test.txt", "w");
if ($handle) {
    $writeSomething = 'I write some words into file';
    $success = fwrite($handle, $writeSomething);
    if ($success)
        echo "写入成功".'<br/>';
    else {
        echo "写入失败".'<br/>';
    }
    //写完要关闭文件指针
    fclose($handle);
} else {
    echo "open file failed";
}


//读取文件
/**
 * fread函数的使用
 * fread(resource $handle , int length)
 * handle为文件指针，length是指读取最多length个字节。
 * 函数终止情况有1.读取完length个字节后，2.到达文件末尾EOF
 */
$filename = "./test.txt";
//获取文件指针,以只读方式打开
$handle = fopen($filename,'r');
if($handle){
    //读取固定长度
    $str = fread($handle, '7');     //I write
    echo $str.'<br/>';
    fclose($handle);
}else{
    echo "open file failed";
}

/**
 * 读取一行,php4.3以后不输入length的参数，则假定行的长度假定为1024。我的测试版本为php 5.6.0，现在是继续从流中读取数据直到行结束。
 */

$filename = "./test.txt";
//获取文件指针,以只读方式打开
$handle = fopen($filename,'r');
$str = fgets($handle);
echo $str.'<br/>';      //I write some words into file

