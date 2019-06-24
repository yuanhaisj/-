<?php
  include './conn.php';
  extract($_POST);
  $select="select * from bo";
  $result=mysqli_query($conn,$select);
  $arr=mysqli_fetch_all($result,MYSQLI_ASSOC);
  //  if(!file_exists('up')){
  //   mkdir('up');
  // }
// var_dump($arr);
//  $path='./up'.time().'.jpg';
//  $img=move_uploaded_file($_FILES['file']['tmp_name'],$path); 

 $da=date('Y-m-d');

 // $hobb=implode(',',$hobby);
?>
<table border="1" cellspacing="0">
  <tr>
    <th>学号</th>
    <th>姓名</th>
    <th>年龄</th>
    <th>性别</th>
    <th>爱好</th>
    <th>班级</th>
    <th>图片</th>
    <th>时间</th>
    <th>操作</th>
  </tr>
 <?php
   foreach ($arr as $v) {
   	echo "<tr>";
   	echo "
   	<td>{$v['id']}</td>
   	<td>{$v['username']}</td>
   	<td>{$v['age']}</td>
   	<td>{$v['sex']}</td>
   	<td>{$v['hobby']}</td>
   	<td>{$v['key']}</td>
   	<td><img src='{$v['tu']}' width='30' height='30'></td>
   	<td>{$da}</td>
   	<td>
      <a href='update.php?id={$v['id']}'>修改</a>
      <a href='delete.php?id={$v['id']}'>删除</a>
   	</td>";
   	echo  "</tr>";
   }
 ?>
</table>