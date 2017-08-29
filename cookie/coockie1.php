<?php
session_start();
setcookie('uid',21,time()+360);
$filename=fopen('sessionid.txt','a');
$id= session_id();
$cookie=@$_REQUEST['cookie'];
$array=['sessionid'=>$id,'cookie'=>$cookie];
$jsondata=json_encode($array);

fwrite($filename,$jsondata.'\n');
fclose($filename);
if(isset($_COOKIE['uid']))
{
	echo "Your user Id is".$_COOKIE['uid'];
}
else
{
	echo "hello welcome to our fucking site";
}


?>
<html>
 <head>
	<title>my cookie</title>
 </head>
 <body>
  <h3>This is my web page for cookie</h3>
 </body>
 
</html>