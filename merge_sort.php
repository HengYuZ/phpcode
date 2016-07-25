<?php
/**
 * Created by PhpStorm.
 * User: linshuntao
 * Date: 2016/7/25
 * Time: 14:16
 */


function merge($left,$right){
    //定义一个存放数据的数组，后续的数组插入操作用array_push函数
    $arr2=array();
    while(count($left) >0 && count($right) > 0){
        //按照大小顺序合并数组，array_shift函数为删除数组的第一个元素并返回该元素值，如果不删除的话，将会导致内存溢出。
        if($left[0]<=$right[0]){
            array_push($arr2,array_shift($left));
        }
        else{
            array_push($arr2,array_shift($right));
        }
    }
    //array_splice函数的作用为用新数组的内容替代原数组的内容
    array_splice($arr2,count($arr2),0,$left);
    array_splice($arr2,count($arr2),0,$right);
    return $arr2;
}

function mergeSort($arr){
    if(count($arr)<=1) {
        return $arr;
    }
    //将数组分成左右2个数组  array_slice函数为截取目标数组中的一段序列
    $left=array_slice($arr,0,(int)(count($arr)/2));
    $right=array_slice($arr,(int)(count($arr)/2));
    //无限细分，直到满足条件数组个数为1
    $left=mergeSort($left);
    $right=mergeSort($right);
    //合并数组
    $result=merge($left,$right);
    return $result;

}

$array=array(12,14,85,46,32,843,3,647,169,489,5,1,1,102,203);
var_dump($array);
echo '<br>';
$n=count($array);
$array=mergeSort($array,0,$n);
var_dump($array);