<?php
 include 'conn.php';
 extract($_POST);
 $ho=implode(',',$hobby);
 $da=date('Y-m-d H:i:s');
 $path="./111/{$_FILES['file']['name']}";
 move_uploaded_file($_FILES['file']['tmp_name'],$path);
 $sql="insert into biao values(null,'{$name}','{$age}','{$sex}','{$ho}','{$se}','{$path}','{$sj}','{$da}')";
 $re=$conn->query($sql);
 if($re){
 	header('location:biao.php');
 }else{
 	header('location:index.html');
 }
?>
