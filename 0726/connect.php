<?php
header("content-type:text/html;charset=utf-8");
 $link=mysqli_connect('localhost','root','','emp');
 mysqli_set_charset($link,'utf8');
   if(!$link){
     die("链接错误：".mysqli_connect_error($link));
   }
?>