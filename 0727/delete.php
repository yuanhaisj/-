<?php
  include './connect.php';
  $sql="delete from boods where id='".$_GET['id']."'";
  $result=mysqli_query($conn,$sql);
  if($result){
  	header('location:biao.php');
  }
?>