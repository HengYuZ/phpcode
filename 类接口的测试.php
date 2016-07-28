<?php

/**
 * Created by PhpStorm.
 * User: zhanghengyu
 * Date: 2016/7/28
 * Time: 9:48
 * 类接口测试
 */
interface a
{
    public function printMyItem();

    const value = 'I am a value';
}

//接口b继承接口b
interface b extends a
{
    public function bfunction();
}


//类实现接口a,b
class Myclass implements a, b
{
    //报错，不能覆盖接口的常量。
    //const value = 'I am a value too';

    public function printMyItem()
    {
        // TODO: Implement printMyItem() method.
        echo "hello, a interface's function ";
    }

    public function bfunction()
    {
        // TODO: Implement bfunction() method.
        echo "hello, b interface's function ";
    }

}

//输出接口变量，下面的是B接口继承A接口的变量value.
echo 'b接口中value:'.b::value.'<br/>';
echo 'a接口中value:'.b::value;