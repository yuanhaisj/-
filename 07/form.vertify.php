<?php
//验证手机号
if(!preg_match("/^13[82]\d{9}|18[35]\d{9}$/",$_POST['tel'])){
	echo "<script>alert('手机号输入错误');location.href='#';</script>";die;
}