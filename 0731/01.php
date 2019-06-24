<?php
 if(isset($_COOKIE['name'])){
 	session_start();
 	$_SESSION['name']=$_COOKIE
 	['name'];
 	echo '<script>window.location.href="sy.php";</script>';
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="02.php" method="post">
     姓名：<input type="text" name="name" ><br>
     密码：<input type="password" name="pas"><br>
     <input type="checkbox" name="day7">七天免登陆<br>
     <input type="submit" value="登录">
	</form>
</body>
</html>