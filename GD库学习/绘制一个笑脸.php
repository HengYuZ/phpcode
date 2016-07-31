<?php
	
	//创建一个 200 X 200的图像
	$img1 = imagecreatetruecolor(400,400);

	//分配颜色
	$white = imagecolorallocate($img1, 255, 255, 255);
	$black = imagecolorallocate($img1, 0, 0, 0);

	//画一个笑脸
	
	//左边的眼睛
	imagearc($img1, 100, 150, 100, 100, 0, 360, $white);
	//右边的眼睛
	imagearc($img1, 300, 150, 100, 100, 0, 360, $white);	
	
	//嘴角弧线
	imagearc($img1, 200, 200, 210, 250, 40, 140, $white);
	
	//外部脸型
	imagearc($img1, 200, 200, 350, 350, 0, 360, $white);

	//将图像输出到浏览器
	header("Content-type: image/png");
	imagepng($img1);	
	
	//释放内存
	imagedestroy($img1);