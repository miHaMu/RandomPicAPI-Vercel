<?php 
//v0.1 🤔
$path = $_SERVER['DOCUMENT_ROOT'].'/album';//获取相册在主机中的绝对路径
$files=array();
if ($handle=opendir("$path")) {
while(false !== ($file = readdir($handle))) {
if ($file != "." && $file != "..") {
if(substr($file,-3)=='png' || substr($file,-3)=='jpg' || substr($file,-4)=='webp') $files[count($files)] = $file;//带后缀筛选的文件数组
}
$random=rand(0,count($files)-1);
}
closedir($handle);
$url="./album/$files[$random]";
header("Location: $url");//302
}
?>
