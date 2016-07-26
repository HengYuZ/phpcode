<?php
/**
 * Created by PhpStorm.
 * User: zhanghengyu
 * Date: 2016/7/26
 * Time: 9:30
 *
 * 慕课网PHP进阶课上杂七杂八的代码碎片
 */

function hello(){
    echo "hello git , hello world";
}
hello();

$str = '苹果很好吃。';
//请将变量$str中的苹果替换成香蕉
$str = str_replace('苹果','香蕉',$str);
var_dump($str);

class Car {
    public $name = 'car';

    public function __clone() {
        $obj = new Car();
        $obj->name = $this->name;
    }
}
$a = new Car();
$a->name = 'new car';
$b = clone $a;
if ($a == $b) echo '==';   //true
if ($a === $b) echo '==='; //false

$str = serialize($a); //对象序列化成字符串
echo $str.'<br>';
$c = unserialize($str); //反序列化为对象
var_dump($c);

//请修改变量p的正则表达式，使他能够匹配str中的姓名
$p = '/\w+\s\w+/';
$str = "name:steven jobs";
preg_match($p, $str, $match);
echo $match[0]; //结果为：steven jobs


$subject = "my email is spark@imooc.com";
//在这里补充代码，实现正则匹配，并输出邮箱地址
$p = '/\w+@\w+\.\w+/';
preg_match($p, $subject,$matches);
print_r($matches);

$str = "<ul>
            <li>item 1</li>
            <li>item 2</li>
        </ul>";
//在这里补充代码，实现正则匹配所有li中的数据
$p = '/<li>(.*)<\/li>/';
preg_match_all($p,$str, $matches);
print_r($matches[0]);

$str = '主要有以下几个文件：index.php, style.css, common.js';
//将目标字符串$str中的文件名替换后增加em标签
$p = '/(\w+)*\.(php|css|js)*/i';
$replacement = '<em>'.'$1 $2 $3'.'</em>';
echo preg_replace($p, $replacement, $str);