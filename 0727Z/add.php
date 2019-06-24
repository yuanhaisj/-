<?php
  include './conn.php';
  var_dump($_POST);
  extract($_POST);
  if(!file_exists('up')){
  	mkdir('up');
  }

 $path='./up'.time().'.jpg';
 $img=move_uploaded_file($_FILES['myfile']['tmp_name'],$path); 

 $da=date('Y-m-d');

 $hobb=implode(',',$hobby);

 var_dump($hobb);

  $sql="insert into bo values('{$id}','{$username}','{$age}','{$sex}','{$hobb}','{$key}','{$path}','{$da}')";
  var_dump($sql);
  $re=$conn->query($sql);
  var_dump($re);
  if($re){
    header('Refresh:1;url=biao.php');
  }else{
    echo "错误".mysqli_connect_error($re);
  }
?>