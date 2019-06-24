<?php
 include './connect.php';
 $select="select * from boods";
 $result=mysqli_query($conn,$select);
 $arr=mysqli_fetch_all($result,MYSQLI_ASSOC);
 $path='./up'.time().'.jpg';
 $img=move_uploaded_file($_FILES['myfile']['tmp_name'],$path);
  $da=date('Y-m-d');
?>
<table border="1" cellspacing="0">
   <tr>
     <th>id</th>
     <th>学生姓名</th>
     <th>年龄</th>
     <th>性别</th>
     <th>爱好</th>
     <th>班级</th>
     <th>图片</th>
     <th>时间</th>
     <th>操作</th>
   </tr>
 <?php
 // $da=date('Y-m-d');
 // if(!file_exists('up')){
 // 	mkdir('up');
 // }
 // $path='./up'.time().'.jpg';
 // $img=move_uploaded_file($_FILES['myfile']['tmp_name'],$path);
 // $ho=implode(',','$hobby');
  foreach ($arr as $key => $v) {
  	echo "<tr>";
  	echo "
  	<td>".$v['id']."</td>
  	<td>".$v['username']."</td>
  	<td>".$v['age']."</td>
  	<td>".$v['sex']."</td>
  	<td>".$v['hobby']."</td>
  	<td>".$v['bj']."</td>
  	<td>".$path."</td>
  	<td>".$da."</td>
  	<td>
      <a href='update.php?id=".$v['id']."'>修改</a>&nbsp;
      <a href='delete.php?id=".$v['id']."'>删除</a>
  	</td>";
  	echo "</tr>";
  }
 ?>
</table>
<a href="index.php">点我回首页</a>