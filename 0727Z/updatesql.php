<?php
 header('content-type:text/html;charset=utf-8');
 include './conn.php';
 // var_dump($_POST['sex']);
 // var_dump($_POST['hobby']);
 var_dump($_POST);
 extract($_POST);
 $path='./up'.time().'.jpg';
 $img=move_uploaded_file($_FILES['myfile']['tmp_name'],$path);
 $da=date('Y-m-d'); 
 $hobb=implode(',',$hobby);
 $se="update bo set
      username='{$username}',
      age='{$age}',
      sex='{$sex}',
      hobby='{$hobb}',
      key='{$key}',
      tu='{$path}',
      da='{$da}'
      where id='{$idd}'";
      echo $se;
 $re=$conn->query($se);
 var_dump($re);
 if($re){
 	 // echo "<script>alert('修改成功');window.location.href='biao.php';</script>";
 	 echo "ok";
 }else{
 	echo "<script>alert('修改失败');</script>";
 }
?>