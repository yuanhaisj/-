<?php
 include 'conn.php';
 extract($_POST);
 $sql="select * from qimo where se='{$se}' and sel='{$sel}'";
 $re=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!-- 	<form action="selectsql.php" method="post">
	分类：<select name="se">
                  <option  value="国内新闻">国内新闻</option>
                  <option value="国际新闻">国际新闻</option>
                  <option value="中国新闻">中国新闻</option>
                  <option value="美食娱乐">美食娱乐</option>
                  <option value="吃喝玩乐">吃喝玩乐</option>
	 </select>
	 状态：<select name="sel">
                  <option  value="通过">通过</option>
                  <option value="未通过">未通过</option>

                  
	 </select>
	 <input type="submit" value="提交">
	 </form> -->
	 <table>
        <?php
          while($arr=$re->fetch_assoc()){
          	echo "<tr>";
          	echo "
          	<td>{$arr['biao']}</td>
          	<td>{$arr['se']}</td>
          	<td>{$arr['sel']}</td>
          	<td><img src='{$arr['myfile']}'></td>";
          	echo "</tr>";
          }
        ?>
	 </table>
	 <?php
       $sql="select * from qimo where se='{$se}' and sel='{$sel}'";
       $re=$conn->query($sql);
       $arr=mysqli_num_rows($re);
       echo "共".$arr."内容";
	 ?>
</body>
</html>