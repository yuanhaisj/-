<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="add.php" method="post">
       学号<input type="text" name="id"><br>
       名字<input type="text" name="name"><br>
       年龄<input type="text" name="age"><br>
       性别<input type="radio" name="sex">男
           <input type="radio" name="sex">女<br>
       班级<select name="class">
        <option value="1802">1802</option>
        <option value="1803">1803</option>
       </select><br>
       手机号<input type="text" name="sjh"><br>
       <input type="submit" value="提交">
	</form>
</body>
</html>