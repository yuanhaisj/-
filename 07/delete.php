<?php
 header('clontent-type:text/html;charset=utf-8');
 $sql=new mysqli('localhost','root','','ku');
 $sql->set_charset('utf8');
 $sqli="delete from ku where uid={$_GET['uid']}";
 if($sql->query($sqli)){
 	echo '<script>alert("删除成功")</script>';
 	header("Refresh:1;ulr=biao.php"); 
 }
?>