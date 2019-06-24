<?php
 session_start();
 if(!isset($_SESSION['uname'])){
 	echo "<script>alert('请登录');</script>";
 	echo "<script>window.location.href='01.html';</script>";
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	欢迎<?php echo $_SESSION['uname'];?>登录
</body>
</html>