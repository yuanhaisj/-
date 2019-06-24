<?php
 header('content-type:text/html;charset=utf-8');
 $conn=new mysqli('localhost','root','','ku');
 $conn->set_charset('utf8');
 extract($_POST);
 if(empty($name)){
 	echo "<script>alert('用户名不能为空');window.location.href='index.php';</script>";
 }
 if(empty($psd)){
 	echo "<script>alert('密码不能为空');window.location.href='index.php';</script>";
 }
 if(strlen($psd)<=4){
    echo "<script>alert('密码必须是4位以上');window.location.href='index.php';</script>";
 }
 if(empty($pwd)){
 	echo "<script>alert('确认密码不能为空');window.location.href='index.php';</script>";
 }
 if(empty($sj)){
 	echo "<script>alert('手机号不能为空');window.location.href='index.php';</script>";
 }
 if($psd!=$pwd){
 	echo "<script>alert('密码不一致');window.location.href='index.php';</script>";
 }
 if(strlen(trim($name))<=6 && preg_match('/\d/', $name)){
 	echo "<script>alert('用户名必须是6位以上，第一位不能为数字');window.location.href='index.php';</script>";
 }
 if(strlen($sj)!=11){
 	echo "<script>alert('手机号必须是11位');window.location.href='index.php';</script>";
 }
 $st=substr('$sj',0,3);
 if($st!='185' || $st!='138' || $st!='183' || $st!='132'){
   echo "<script>alert('手机号错误');window.location.href='index.php';</script>";
 }
$sql="insert into kao values(null,'{$name}','{$psd}','{$sj}')";
$re=$conn->query($re);
while ($arr=$re->fetch_assoc()) {
	echo "<table border=1 cellspacing=0>";
	echo "<tr>";
	echo "
	      <td>{$arr['id']}</td>
	      <td>{$arr['name']}</td>
	      <td>{$arr['psd']}</td>
	      <td>{$arr['sj']}</td>";
	echo "</tr>";
	echo "</table>";
}
?>