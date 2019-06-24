<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="selectsql.php" method="post" enctype="multipart/form-data">
      <select name="key">
         <option value="name">名字</option>
         <option value="age">年龄</option>
         <option value="sex">性别</option>
         <option value="hobby">爱好</option>
         <option value="se">地址</option>
         <option value="file">头像</option>
         <option value="sj">手机号</option>
      </select>
      <input type="text" name="value"><br>
      <input type="submit" value="查找">
	</form>
</body>
</html>