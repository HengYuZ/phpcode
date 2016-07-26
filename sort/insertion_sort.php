<?php
/**
 * Created by PhpStorm.
 * User: linshuntao
 * Date: 2016/7/22
 * Time: 16:02
 */
    function insertionSort($arr){
        $n = count($arr);
        for ($i = 1; $i < $n; $i++) {
            //升序排序
            if ($arr[$i - 1] > $arr[$i]) {
                //提取要交换位置的数值
                $temp = $arr[$i];
                $j = $i;
                //交换数据，撤出目标位置，让给该轮循环的最小值
                while ($j > 0 && $arr[$j - 1] > $temp) {
                    $arr[$j]=$arr[$j-1];
                    $j--;
                }
                //将该轮循环的最小值赋值目标位置
                $arr[$j] = $temp;
            }
        }
        return $arr;
    }

    $array=array(12,14,85,46,32,843,3,647,169,489,5,1,1);
    var_dump($array);
    echo '<br>';
    $array=insertionSort($array);
    var_dump($array);