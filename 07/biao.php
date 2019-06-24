<?php
 header('content-type:text/html;charset=utf-8');
 $sql=new mysqli('localhost','root','','ku');
 $sql->set_charset('utf8');
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