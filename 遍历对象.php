<?php

/**
 * Created by PhpStorm.
 * User: zhanghengyu
 * Date: 2016/7/28
 * Time: 10:33
 * 遍历对象
 */
class MyClass
{
    const constant = 'I am a constant';
    private $id = 1;
    protected $value1 = 'I am a protected value';
    public $value2 = 'I am a value';

    public function printItem(){
        foreach ($this as $key=>$v){
            print $key.'=>'.$v.'<br/>';
        }
    }
}

$a = new MyClass();
foreach ($a as $key=>$v){
    print $key.'=>'.$v.'<br/>';     //只能访问到public的属性
}
$a->printItem();     //访问到了private,protected和public的属性