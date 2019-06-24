<?php
 include './connect.php';
 // 接受数据
 extract($_POST);
 // 检查路劲是否存在
 if(!file_exists('uploads')){
 	mkdir('uploads');
 }
 // 接受图片
 $path='./uploads'.time().'.jpg';
 // 图片的实际路劲
 $img=move_uploaded_file($_FILES['myfile']['tmp_name'],$path);
 // 验证图片不为空
 if(empty($_FILES)){
 	echo "<script>alert('图片不能为空');location.href='index.php';</script>";
 }
// 验证文本框数据非空
if(empty($username)){
	echo "<script>alert('用户名不能为空');location.href='nidex.html';</script>";
}
// 验证密码不为空
if(empty($psd)){
	echo "<script>alert('密码不能为空');location.href='index.php';</script>";
}
// 验证确认密码不能为空
if(empty($pwd)){
	echo "<script>alert('确认密码不能为空');location.href='index.php';</script>";
}
// 验证确认密码不能为空
if(empty($sex)){
	echo "<script>alter('性别不能为空');location.href='index.php';</script>";
}
// 验证手机号不能为空
if(empty($tel)){
	echo "<script>alert('手机号不能为空');location.hreff='index.php';</script>";
}
// 验证性别不能为空
if(empty($sex)){
	echo "<script>alert('性别不能为空');location.href='index.php';</script>";
}
// 验证爱好不能为空
if(empty($hobby)){
	echo "<script>alert('爱好不能为空');location.href='index.php';</script>";
}else{
	if(count($hobby)<=2){
		echo "<script>alert('爱好至少选择三个');location.href='index';</script>";
	}
}
// 验证用户名开头不能位数字
$str=substr($username,0,1);
if($str>='0' && $str<'10'){
	echo "<script>alert('用户名不得以数字开头');location.href='index.php';</script>";
	die;
}
// 验证手机号11位
if(strlen($tel)<11 && strlen($tel)>11){
	echo "<script>alert('手机号为11位');location.href='index.php';</script>";
	die;
}
// 去两边空格 trim() 获取字符串长度strlen()
if(strlen(trim($username))<7){
	echo "<script>alert('用户名不得少于七位');location.href='index.php';</script>";
	die;
}
// 验证密码长度在6位以上
if(strlen($psd)<4){
	echo "<script>alert('密码不得少于6位');location.href='index.php';</script>";
	die;
}
// 验证两次密码输入一致
if($psd!=$pwd){
	echo "<script>alert('密码不一致');location.href='index.php';</script>";
	die;
}
// 验证密码不能以数字开头
$spsd=substr($psd,0,1);
if($spsd>='0' && $spsd<'10'){
  echo "<script>alert('密码不得以数字开头');location.href='index.php';</script>";
  die;
}
// 验证手机号不能以151 137开头
// 字符串截取 substr()
 $tell=substr($tel,0,3);
 if($tell=='151' || $tel=='137'){
 	echo "<script>alert('电话输入有误');location.href='index.php';<script>";
 }
 // 验证数据库是否存在该用户名,如果存在,重新输入
 $sql='select * from '
?>