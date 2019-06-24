<?php
 include 'conn.php';
 $sql="select * from jiang where sz=(select sz from jiang group by sz having count(*)=1 order by sz limit 1)";
 $re=$conn->query($sql);
 $arr=$re->fetch_assoc();
 echo '<h1>开奖页面</h1>';
 echo "<h3>中奖人是{$arr['name']},中奖号码是{$arr['sz']}</h3>";
 $sqli='select * from jiang';
 $res=$conn->query($sqli);
 echo '开奖记录<br>';
 echo '<table border=1>';
 echo '<tr>';
 echo '<th>昵称</th><th>中奖号码</th>';
 echo '</tr>';
 while($add=$res->fetch_assoc()){
     echo '<tr>';
     echo "<td>{$add['name']}</td>
           <td>{$add['sz']}</td>";
     echo '</tr>';
 }
 echo '</table>';
?>