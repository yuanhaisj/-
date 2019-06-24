<?php
session_start();
 header('content-type:text/html;charset=utf-8');
 $sql=new mysqli('localhost','root','','text');
 $sql->set_charset('utf8');
 $sele="select name,pwd from bo";
 $res=$sql->query($sele);
 while($row=$res->fetch_assoc()){
 	if($_POST['name']==$row['name']){
 		if($_POST['pwd']=$row['pwd']){
 			$_SESSION['name']=$_post['name'];
 			echo "<script>alert('登录成功');window.location.href='index.php';</script>";
 		}else{
 			echo "<script>alert('未注册，请先注册');window.location.href='index.html';</script>";
 		}
 	}else{
 		echo "<script>alert('未有该账户');window.location.href='index.html';</script>";
 	}
 }
?>