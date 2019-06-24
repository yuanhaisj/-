<?php
 include 'conn.php';
 $sql="delete from biao where id='{$_GET['id']}'";
 $re=$conn->query($sql);
 if($re){
 	header('location:biao.php');
 }
?>