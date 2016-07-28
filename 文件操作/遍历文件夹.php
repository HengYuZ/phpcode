<?php
/**
 * Created by PhpStorm.
 * User: zhanghengyu
 * Date: 2016/7/28
 * Time: 15:14
 * 遍历文件夹,利用递归实现
 */

function showfile($filepath, $ceng)
{
    $handle = opendir($filepath);
    while (false !== ($file = readdir($handle))) {
        if ($file !== '.' && $file !== '..') {
            $str = $filepath.'/'.$file;
            if(is_dir($str))
            {
                echo "<pre>$ceng--|--$file</pre>";
                showfile($str,$ceng.'--');
            }else {
                echo "<pre>$ceng--|--$file</pre>";
            }
        }
    }
}
showfile('/mnt/hgfs/www/test/phpcode','|--');