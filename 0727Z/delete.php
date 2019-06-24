<?php
  include './conn.php';
  $se="delete from bo where id={$_GET['id']}";
  $re=$conn->query($se);
  if($re){
  	echo "<script>alert('删除成功');window.location.href='biao.php';</script>";
  }
?>