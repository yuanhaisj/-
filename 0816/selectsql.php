<?php
 include 'conn.php';
 $sql="select * from biao where {$_POST['key']}='{$_POST['value']}'";
 $re=$conn->query($sql);
?>
<html>
    <table border="1" cellspacing="0">
     <tr>
       <th>id</th>
       <th>姓名</th>
       <th>年龄</th>
       <th>性别</th>
       <th>爱好</th>
       <th>地址</th>
       <th>头像</th>
       <th>手机号</th>
       <th>时间</th>
       <th>操作</th>
     </tr>
<?php
  while( $arr=$re->fetch_assoc()){

  	echo '<tr>';
    echo "
          <td>{$arr['id']}</td>
   	      <td>{$arr['name']}</td>
   	      <td>{$arr['age']}</td>
   	      <td>{$arr['sex']}</td>
   	      <td>{$arr['hobby']}</td>
   	      <td>{$arr['se']}</td>
   	      <td><img src='{$arr['file']}' width='50' hight='50'></td>
   	      <td>{$arr['sj']}</td>
   	      <td>{$arr['shi']}</td>
   	      <td><a href='update.php?id={$arr['id']}'>修改</a>||
   	          <a href='delete.php?id={$arr['id']}'>删除</a>
   	      </td>";
  	echo '</tr>';
  }
?>
    </table>
    <a href="index.html">返回首页</a>
</html>