<?php
 header('content-type:text/html;charset=utf-8');
 $uname="nihao";
 if($_POST['uname']=$uname){
 	echo "<script>alert('登录成功');</script>";
 	session_start();
 	$_SESSION['uname']=$_POST['uname'];
 	echo "<script>window.location.href='02.php'</script>";
 }else{
 	echo "<script>alert('登录失败');</script>";
 	echo "<script>window.location.href='01.php'</script>";
 }
?>