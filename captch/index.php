<?php 

if(isset($_POST['varify']))
{
	session_start();
	$cp_code=$_SESSION['cap_code'];
	$user_input=$_POST['cp'];
	
	if($cp_code===$user_input)
	{
		echo "valid";
		
	}
	else
	{
		echo "not valid";
	}
	
	
}
?>
<html>
<head>
<title>Captch creationp</title>
</head>
<body>
<form action ="" method="post">
<br><br>
<img src="captch.php"><br>
<a href="captch.jpeg" download="downlaod">download</a>
<input type="text" name="cp">
<input type="submit" name="varify" value="varify">
</form>
</body>
</html>