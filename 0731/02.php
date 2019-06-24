<?php
 include './conn.php';
 $sql='select name,pas from boo';
 $re=$conn->query($sql);
 var_dump($re);
 while($row=$re->fetch_assoc()){
 	if($_POST['name']==$row['name']){
 		if($_POST['pas']==$row['pas']){
 			if(isset($_POST['day7'])){
 				setcookie('name','$_POST[name]',time()+7*24*3600,'/');
 	session_start();
 	$_SESSION['name']=$_COOKIE['name'];
 	echo "<script>window.location.href='sy.php';</script>";
 	die;
 			}else{
 				session_start();
 				$_SESSION['name']=$_POST['name'];
 			echo "<script>window.location.href='sy.php';</script>";
 			die;
 			}
 		}
 	}
 }
 echo "<script>window.location.href='01.php';</script>";
?>