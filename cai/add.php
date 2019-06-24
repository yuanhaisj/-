<?php
 include 'conn.php';
 $sql="insert into jiang values('{$_POST['name']}','{$_POST['sz']}')";
 $re=$conn->query($sql);
 if($re){
 	header("location:index.php");
 }
?>