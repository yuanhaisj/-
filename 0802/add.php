<?php
  include 'conn.php';
  extract($_POST);
  $sql="insert into qimo values('{$biao}','{$se}','{$sel}','{$myfile}')";
  $re=$conn->query($sql);
  if($re){
  	echo "<script>alert('添加成功');window.location.href='index.php';</script>";
  }else{
  	echo "<script>alert('添加失败');window.locatqion.href='index.php';</script>";
  }
?>