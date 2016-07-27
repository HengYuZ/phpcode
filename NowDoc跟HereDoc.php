<?php
/**
 * Created by PhpStorm.
 * User: zhanghengyu
 * Date: 2016/7/27
 * Time: 11:23
 * 测试nowdocs跟heredocs的区别
 * nowdocs不能解析变量
 * 而heredocs 可以解析变量
 *
 */

$a = 'I am $a';
$str1 = <<<'EOD'
hello world
    I am nowdocs, 不能解析$a;
EOD;

$str2 = <<<EOD
hello world
    I am heredocs,不同于$str1;
EOD;

var_dump($str1);
var_dump($str2);
