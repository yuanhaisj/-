<?php
 session_start();
 if(!isset($_SESSION['name'])){
 	echo "<script>alert('请先登录');window.location.href='index.html';</script>";
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
   欢迎<?php echo $_SESSION['name'];?>登录
</body>
</html>