<?php
/**
 * Created by PhpStorm.
 * User: linshuntao
 * Date: 2016/7/22
 * Time: 15:35
 */
    function selectSort($arr){
        $n=count($arr);
        for($i=0;$i<$n;$i++){
            //开始假设该轮循环的第一位为最小值
            $minIndex=$i;
            for($j=$i+1;$j<$n;$j++){
                //按照升序排序 将最小的一个数挑出来
                if($arr[$j]<$arr[$minIndex]){
                    $minIndex=$j;
                }
            }
            //将每次循环所挑出的最小数与低位元素交换，低位较高位先排好序。
            if($minIndex!=$i){
                $temp=$arr[$i];
                $arr[$i]=$arr[$minIndex];
                $arr[$minIndex]=$temp;
            }
        }
        return $arr;
    }

    $array=array(12,4,36,852,47,694,246,1,346,74,65);
    var_dump($array);
    echo '<br>';
    $array=selectSort($array);
    var_dump($array);