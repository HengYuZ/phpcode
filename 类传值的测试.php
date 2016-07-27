<?php

/**
 * Created by PhpStorm.
 * User: zhanghengyu
 * Date: 2016/7/27
 * Time: 9:24
 * 类继承的一些测试
 * clone的对象原有成员变量的属性值是不会变的
 * 但是如果是类实例后的对象，直接赋值给变量，或者引用赋值给变量
 * 会随着改变。这是基于PHP5.6.0版本的结果。
 */
class Object
{
    public $foo = "bar";
    public $var = <<<EOD
    hello world
EOD;

}

$objectVar = new Object();
$reference = &$objectVar;
$assignment = $objectVar;

$tmp = clone($objectVar);

var_dump($objectVar);        //bar
var_dump($reference);        //bar
var_dump($assignment);      //bar
var_dump($tmp);             //bar

$reference->foo = "qux";
var_dump($objectVar);        //qux
var_dump($reference);        //qux
var_dump($assignment);      //qux
var_dump($tmp);             //bar

$objectVar->foo = null;
var_dump($objectVar);            //null
var_dump($reference);            //null
var_dump($assignment);          //null
var_dump($tmp);                //bar

var_dump($assignment->var);      //hello world
