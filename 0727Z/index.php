<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="add.php" method="post" enctype="multipart/form-data">
      学号：<input type="text" name="id"><p>
      姓名：<input type="text" name="username"><p>
      年龄：<input type="text" name="age"><p>
      性别：<input type="radio" name="sex" value="男">男
            <input type="radio" name="sex" value="女">女<p>
      爱好：<input type="checkbox" name="hobby[]" value="上网">上网
            <input type="checkbox" name="hobby[]" value="打游戏">打游戏
            <input type="checkbox" name="hobby[]" value="爬上">爬山
            <input type="checkbox" name="hobby[]" value="游泳">游泳<p>
      
      班级：<select name="key">
               <option value="1802">1802</option>
               <option value="1802a">1802a</option>
               <option value="1802b">1802b</option>
               <option value="1803">1803</option>
               <option value="1803a">1803a</option>
            </select><p>
      <input type="file" name="myfile"><p>
      <input type="submit" value="提交">
	</form>
	<form action="select.php" method="post">
       <input type="submit" value="搜索">
	</form>
</body>
</html>