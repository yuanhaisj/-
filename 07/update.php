<?php
 header('content-type:text/html;charset=utf-8');
 $sql=new mysqli('localhost','root','','ku');
 $sql->set_charset('utf8');
 $select="select * from ku where uid='{$_GET['uid']}'";
 $re=$sql->query($select);
 $arr=$re->fetch_assoc();
 var_dump($arr);
?>
<form action="updatesql.php" method="post">
<input type="text">

 编号<input type="text" name="uid" value="<?php echo $arr['uid'];?>"><p>
 姓名<input type="text" name="username" value="<?php echo $arr['username'];?>"><p>
 年龄<input type="text" name="age" value="<?php echo $arr['age'];?>"><p>
 <input type="submit" value="确认修改">
</form>