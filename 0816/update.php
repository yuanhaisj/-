<?php
  include 'conn.php';
  $sql="select * from biao where id='{$_GET['id']}'";
  $re=$conn->query($sql);
  $arr=$re->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="updatesql.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $arr['id'];?>">
      姓名：<input type="text" name="name"><p>
      年龄：<input type="text" name="age"><p>
      性别：<input type="radio" name="sex" value="男">男
            <input type="radio" name="sex" value="女">女<p>
      爱好：<input type="checkbox" name="hobby[]" value="读书">读书
            <input type="checkbox" name="hobby[]" value="打游戏">打游戏
            <input type="checkbox" name="hobby[]" value="上网">上网
            <input type="checkbox" name="hobby[]" value="旅游">旅游
            <input type="checkbox" name="hobby[]" value="野炊">野炊<p>
      地址：<select name="se">
               <option value="上海">上海</option>
               <option value="香港">香港</option>
               <option value="深圳">深圳</option>
               <option value="广州">广州</option>
               <option value="重庆">重庆</option>
            </select><p>
      头像：<input type="file" name="file"><p>
      手机号：<input type="text" name="sj"><p>
      <input type="submit" value="修改">
	</form>
</body>
</html>