<?php
 header('content-type:text/html;charset=utf-8');
 $sql=new mysqli('localhost','root','','ku');
 $sql->set_charset('utf8');
 if(empty($_POST)){
    die("没有数据");
 }
 if(preg_match('/\S/',$_POST['id'])){
 	echo "<script>alert('编号不能是空');location.href='yz.php';</script>";
 }
 if(preg_match('/\D/',$_POST['id'])){
 	echo "<script>alert('编号不能是非数字');location.href='yz.php';</script>";
 }
 if(preg_match('/\d/',$_POST['name'])){
 	echo "<script>alert('名字不能是数字');location.href='yz.php';</script>";
 }
 if(preg_match('/\D/',$_POST['age'])){
 	echo "<script>alert('年龄不能是非数字');location.href='yz.php.php';</script>";
 }
 if(!preg_match('/^135\d{8}$ | 138\d{8}$ | 187\d{8}$/',$_POST['sjh'])){
   echo "<script>alert('手机号格式不对，必须是数字11位数');location.href='yz.php';</script>";
 }else{
 	echo "<script>alert('正确');</script>";
 }
?>