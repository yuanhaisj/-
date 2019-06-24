<?php
  include 'conn.php';
  extract($_POST);
  var_dump($_POST);
  $da=date('Y-m-d H:i:s');
  $ho=implode(',',$hobby);
  $path="./111/{$_FILES['file']['name']}";
  move_uploaded_file($_FILES['file']['tmp_name'], $path);
  $sql="update biao set
        name='{$name}',
        age='{$age}',
        sex='{$sex}',
        hobby='{$ho}',
        se='{$se}',
        file='{$path}',
        sj='{$sj}',
        shi='{$da}'
        where id='{$id}'";
  $re=$conn->query($sql);
  if($re){
  	header('location:biao.php');
  }
?>