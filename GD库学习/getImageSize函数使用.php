<?php
	
	/**
	getimagesize(string $filename)， $filename 也可以是URL 
	这个函数返回图片的大小，主要是宽高，图片类型，以及一个
	文本字符串如：height=yyyy

	至于$type,
	1 => GIF;
	2 => JPG;
	3 => PNG;
	4 => SWF;
	5 => PSD;
	6 => PMD;

	此外，这个函数是不需要GD库的。
	*/


	list($width, $height, $type, $attr) = getimagesize('imgs/cat.png');
	//返回文本字符串信息
	var_dump($attr);
	//输出图片的类型
	var_dump($type);

	