<?php
 include './connect.php';
 $sql="select * from boods where id='".$_GET['id']."'";
 $result=mysqli_query($conn,$sql);
 $arr=mysqli_fetch_assoc($result);
?>
<form action="updatesql.php" method="post">
<input type="hidden" name="<?php echo $arr['id'];?>">
  学生姓名：<input type="text" name="<?php echo $arr['username'];?>"><p>
      年龄：<input type="text" name="<?php echo $arr['age'];?>"><p>
      性别：<input type="radio" name="<?php echo $arr['sex'];?>">男
            <input type="radio" name="<?php echo $arr['sex'];?>">女<p>
      爱好：<input type="checkbox" name="<?php echo $arr['hobby'];?>">爬山
            <input type="checkbox" name="<?php echo $arr['hobby'];?>">锻炼
            <input type="checkbox" name="<?php echo $arr['hobby'];?>">游泳
            <input type="checkbox" name="<?php echo $arr['hobby'];?>">读书
            <input type="checkbox" name="<?php echo $arr['hobby'];?>">睡觉
            <input type="checkbox" name="<?php echo $arr['hobby'];?>">上网<p>
      班级：<input type="text" name="<?php echo $arr['bj'];?>"><p>
      <input type="submit" value="提交">
</form>