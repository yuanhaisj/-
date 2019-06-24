<?php
 header('content-type:text/html;charset=utf-8');
 include "./connect.php";
 extract($_POST);
 $ho=implode(',',$hobby);
 $sql="insert into boods(username,age,sex,hobby,bj) values('".$username."','".$age."','".$sex."','".$ho."','".$bj."')";
 $s=mysqli_query($conn,$sql);
 var_dump($s);
 $select="select * from boods";
 $result=mysqli_query($conn,$select);
 $arr=mysqli_fetch_all($result,MYSQLI_ASSOC);
 $da=date('Y-m-d');
 if(!file_exists('up')){
 	mkdir('up');
 }
 $path='./up'.time().'.jpg';
 $img=move_uploaded_file($_FILES['myfile']['tmp_name'],$path);
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
 // $da=date('Y-M-d');
 // if(!file_exists('up')){
 // 	mkdir('up');
 // }
 // $path='./up'.time().'.jpg';
 // $img=move_uploaded_file($_FILES['myile']['tmp_name'],$path);
 
  foreach ($arr as $key => $v) {
  	echo "<tr>";
  	echo "
  	<td>".$v['id']."</td>
  	<td>".$v['username']."</td>
  	<td>".$v['age']."</td>
  	<td>".$v['sex']."</td>
  	<td>".$v['hobby']."</td>
  	<td>".$v['bj']."</td>
  	<td><img src='".$path."'></td>

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