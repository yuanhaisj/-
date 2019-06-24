<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="add.php" method="post" enctype="multipart/form-data">
      学生姓名：<input type="text" name="username"><p>
      年龄：<input type="text" name="age"><p>
      性别：<input type="radio" name="sex" value="男">男
            <input type="radio" name="sex" value="女">女<p>
      爱好：<input type="checkbox" name="hobby[]" value="爬山">爬山
            <input type="checkbox" name="hobby[]" value="锻炼">锻炼
            <input type="checkbox" name="hobby[]" value="游泳">游泳
            <input type="checkbox" name="hobby[]" value="读书">读书
            <input type="checkbox" name="hobby[]" value="睡觉">睡觉
            <input type="checkbox" name="hobby[]" value="上网">上网<p>
      班级：<input type="text" name="bj"><p>
      <input type="file" name="myfile"><p>
      <input type="submit" value="登录">
	</form>
	<form action="select.php" method="post">
      <input type="submit" value="查找">
	</form>
</body>
</html>