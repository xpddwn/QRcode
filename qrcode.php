<?php
//引入phpqrcode库文件
include('phpqrcode.php'); 
// 二维码数据 
$data = '这只是一个测试'; 
// 生成的文件名 
$filename = 'pic/test.bmp'; 
// 纠错级别：L、M、Q、H 
$errorCorrectionLevel = 'L';  
// 点的大小：1到10 
$matrixPointSize = 4;  
//创建一个二维码文件 
QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
//输入二维码到浏览器
QRcode::png($data); 
//输出二维码生成过程中的时间benchmark
QRtools::timeBenchmark();   
?>