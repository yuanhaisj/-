<?php
 header('content-type:text/html;cahrset=utf-8');
 $sql=new mysqli('localhost','root','','ku');
 $select="update ku set
          uid='{$_POST['uid']}',
          username='{$_POST['username']}',
          age='{$_POST['age']}' where uid='{$_post['id']}'";
 $re=$sql->query($select);
 if($re){
 	header('location:biao.php');
 }else{
 	die('修改失败'.mysqli_connect_error($re));
 }
?>