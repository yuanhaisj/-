<?php
 header('content-type:text/html;charset=utf-8');
 include './conn.php';
 $se="select * from bo where id='{$_GET['id']}'";
 $re=$conn->query($se);
 $arr=$re->fetch_assoc(['hobby']);
 $add=explode(',',$arr);
 var_dump($add);
 if(in_array('上网',$add)){
  echo "checked";
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
   <form action="updatesql.php" method="post" enctype="multipart/form-data">
         <input type="hidden" name="idd" value="<?php echo $arr['id'];?>">

   学号：<input type="text" name="id" value="<?php echo $arr['id'];?>"><p>

   姓名：<input type="text" name="username" value="<?php echo $arr['username'];?>"><p>

   年龄：<input type="text" name="age" value="<?php echo $arr['age'];?>"><p>

   性别：<input type="radio" name="sex" value="<?php echo $arr['sex'];?>">男
         <input type="radio" name="sex" value="<?php echo $arr['sex'];?>">女<p>

   爱好：<input type="checkbox" name="hobby[]" value='上网'<?php  if(in_array('上网',$add)){
  echo "checked";
 } ?>
 >上网
         <input type="checkbox" name="hobby[]" value="打游戏"<?php  if(in_array('打游戏',$add)){
  echo "checked";
 } ?>>打游戏
         <input type="checkbox" name="hobby[]" value="爬山"<?php  if(in_array('爬山',$add)){
  echo "checked";
 } ?>>爬山
         <input type="checkbox" name="hobby[]" value="游泳"<?php  if(in_array('游泳',$add)){
  echo "checked";
 } ?>>游泳<p>

    班级：<select name="key">
            <option value="<?php echo $arr['key'];?>">1802</option>
            <option value="<?php echo $arr['key'];?>">1802a</option>
            <option value="<?php echo $arr['key'];?>">1802b</option>
            <option value="<?php echo $arr['key'];?>">1803</option>
            <option value="<?php echo $arr['key'];?>">1803a</option>
          </select><p> 

    <input type="file" name="myfile" value="<?php echo $arr['tu'];?>"><p>

    <input type="submit" value="确认修改">   	
  </form>
</body>
</html>
