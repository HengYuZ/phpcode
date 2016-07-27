<?php
/**
 * Created by PhpStorm.
 * User: zhanghengyu
 * Date: 2016/7/27
 * Time: 16:20
 * 访问PHP的成员变量或者方法时候，
 * 1. 如果被引用的变量或者方法被声明为const或者static
 *    就必须使用操作符::
 *
 * 2. 如果没有被声明const或者static的变量或者方法，
 *    就必须使用操作符->
 *
 * 3. 如果类内部访问被const或者static修饰的变量或者方法
 *    就必须使用self
 *
 * 4. 如果类内部没有被const或者static修饰的变量或者方法
 *    就必须使用$this
 */

class AClass{
    static $constant = 'static value';
    const constant = 'constant value';
    private $priValue = 'I am a private value';
    public $pubValue = 'I am a public value';
    //public $constant = 'I am a public constant';
    //name = 1 + 2; 非法，类属性只能赋值为常量，不能有计算或者函数调用

    public function printConstant(){
        echo (self::constant);
    }

    public function getvalue(){
        $this->priValue = 'I have been changed';
        echo $this->priValue;
        return 3;
    }
    //public $value = $this->getvalue();  函数赋值报错

}

$A = new AClass();
$A->printConstant();      //箭头访问方法
// $A::constant = 'hello';   赋值出错了，因为const 的作用是限定一个变量不能改变
$A->getvalue();
echo $A->pubValue;      //访问了pubValue变量


echo $A::constant.'<br/>';     //对象(类名)+双冒号访问const修饰属性
echo $A::$constant.'<br/>';     //对象(类名)+双冒号访问static修饰属性

