<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="add.php" method="post" enctype="multipart/form-data">
     用户名：<input type="text" name="username"><p>
     性别：<input type="radio" name="sex" value="男">男<p>
           <input type="radio" name="sex" value="女">女<p>
     爱好：<input type="checkbox" name="hobby[]" value="上网">上网
     <input type="checkbox" name="hobby[]" value="学习">学习
     <input type="checkbox" name="hobby[]" value="跑步">跑步
     <input type="checkbox" name="hobby[]" value="吃饭">吃饭<p>
     设置密码：<input type="password" name="psd"><p>
     确认密码：<input type="password" name="pwd"><p>
     验证手机：<input type="text" name="tel" maxlength="11"><p>
     头像：<input type="file" name="myfle"><p>
     <input type="submit" value="注册"><p>
	</form>
</body>
</html>