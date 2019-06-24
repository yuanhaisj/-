<?php
 header('content-type:text/html;charset=utf-8');
 session_start();
 if(isset($_COOKIE['name'])){
 	$_SESSION['name']=$_COOKIE['name'];
 }
 if(@!isset($_SESSION['name'])){
 	echo '请先登录';
 	die;
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	欢迎<?php echo $_COOKIE['name'];?>登录
</body>
</html>