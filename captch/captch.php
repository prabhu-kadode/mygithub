<?php
session_start();

$str=md5(microtime());;




$str=substr($str,0,6);
$_SESSION['cap_code']=$str;

$img=imagecreate(100,40);
imagecolorallocate($img,102, 14, 14);
$txtcolor=imagecolorallocate($img,124, 109, 109);
imagestring($img,20,5,5,$str,$txtcolor);
header('content:image/jpeg');
imagejpeg($img);
?>
https://www.facebook.com/TheIndianThing/videos/vb.1480763085562800/1597017663937341/?type=2&theater