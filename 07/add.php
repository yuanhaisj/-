<?php
 header('content-type:text/html;charset=utf-8');
 $sql=new mysqli('localhost','root','','ku');
 $sql->set_charset('utf8');
 if(preg_match('/\D/', $_POST['uid'])){
 	echo "<script>alert('编号不能是非数字');location.href='index.php';</script>";
 }
 if(preg_match('/\d/',$_POST['username'])){
 	echo "<script>alert('名字不能是数字');location.href='index.php;</script>";
 }
 if(preg_match('/\D/')){
 	echo "<script>alert('编号不能是非数字');location.href='index.php';</script>";
 }
 $sqli="insert into ku values('{$_POST['uid']}','{$_POST['username']}','{$_POST['age']}')";
 echo $sqli;
 $reu=$sql->query($sqli);
 var_dump($reu);
 $se="select * from ku";
 $res=$sql->query($se);
 echo '<table border=1>';
 while($row=$res->fetch_assoc()){
 	echo '<tr>';
 	echo "<td>{$row['uid']}</td>
 	<td>{$row['username']}</td>
 	<td>{$row['age']}</td>
 	<td><a href='update.php?uid={$row['uid']}'>修改</a>||
 	<a href='delete.php?uid={$row['uid']}'>删除</a>
 	</td>";
 	echo '</tr>';
 }
 echo '</table>';
 ?>