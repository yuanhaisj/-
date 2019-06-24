<?php
 include "conn.php";
 $sql="select count(*) as a from jiang";
 $re=$conn->query($sql);
 $row=$re->fetch_assoc();
 echo $row['a'];
?>