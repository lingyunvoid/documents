<?php
header("Content-type:text/html;charset=utf-8");
$arr1=array('https://pic.imgdb.cn/item/631701cd16f2c2beb1a9f3b6.jpg','https://pic.imgdb.cn/item/631701c816f2c2beb1a9ee0f.jpg','https://pic.imgdb.cn/item/631701c416f2c2beb1a9e926.jpg');
$key=array_rand($arr1);
echo '<img src="'.$arr1[$key].'"/>';
?>
