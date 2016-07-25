<?php
/**
 * Created by PhpStorm.
 * User: linshuntao
 * Date: 2016/7/22
 * Time: 14:31
 */
    function bubble_sort($arr){
        //获取数组的元素个数
        $n=count($arr);
        //设置一个标记数组是否已排序完的变量
        $a=0;

        for($i=0;$i<$n;$i++){
            $a=false;   //设置一个判断数组是否已经排完序，如果已排完，提前结束循环。
            for($j=$n-1;$j>$i;$j--){
                /**
                 * 采用升序排序
                 * 从高位往低位比较，低位比高位先排好序。
                 */
                if($arr[$j]<$arr[$j-1]){
                        $temp=$arr[$j];
                        $arr[$j]=$arr[$j-1];
                        $arr[$j-1]=$temp;
                        $a=true;
                }
            }
            if(!$a)
                return $arr;
        }
        return $arr;
    }
    $array=array(5,6,1,7,55,77,696,123,741,52,418);
    //$array=array(1,2,3,4,5,6,7,8,9);
    $array=bubble_sort($array);
    //$n=count($array);
    //for($i=0;$i<$n;$i++){
       // echo $array[$i].',';
    //}
    var_dump($array);