<?php

/**
 * Created by PhpStorm.
 * User: zhanghengyu
 * Date: 2016/7/28
 * Time: 9:09
 * 类继承的测试
 */
class foo
{
    public function printItem($str)
    {
        echo 'FOO:' . $str . PHP_EOL;   //PHP_EOL在浏览器你输出不能换行,因为浏览器解析的是html码。PHP_EOL指的是 \n ;这个是ASCII码,所以在文本文件时使用PHP_EOL会换行。浏览器下换行使用"<br/>".
    }

    public function printPHP()
    {
        echo 'PHP is great' . PHP_EOL;
    }
}

class bar extends foo
{

    public function printItem($str)
    {
        parent::printItem($str);         //调用父类方法，在类外难以通过类bar实例化的对象去访问父类方法
        echo 'bar:' . $str . '<br/>';
    }
}

$barObject = new bar();
$barObject->printItem("hello world");

$barObject->printItem("hello Tom");

$barObject->printPHP();

