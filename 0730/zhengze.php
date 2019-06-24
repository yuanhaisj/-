<?php
 $str='hi,this is his history';
 $patt='/hi/';
 preg_match_all($patt,$str,$matches);
 print_r($matches);
 echo "<br>";
 // 把字符串的hi单词找出来
 // 规律，单词开始处-->hi--->单词结束处\b
 $patt = '/\bhi\b/';
 $str = 'hi, this is some history book';
 preg_match_all($patt,$str,$res);
 print_r($res);
 ?>