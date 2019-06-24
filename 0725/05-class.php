<?php
//  function fn($a){
//    if($a==1 || $a==2){
//    	return 1;
//    }
//  else{
//  	return fn($a-1)+fn($a-2);
//  }
// }
//  echo fn(30);
?>
<?php
 // function cn($a){
 // 	if($a>1){
 // 	  $l=$a*cn($a-1);
 // 	}else{
 // 		$l=$a;
 // 	}
 // 	return $l;
 // }
 // echo cn(10)."<br>";
 // echo cn(6)."<br>";
?>
<?php
 // $n=time()+(7*24*60*60);
 // echo $n."<br>";
 // echo date('Y-m-d')."<br>";
 // echo date('Y-m-d',$n)."<br>";
 // echo date(time());
?>
<?php
// 冒泡排序
// $arr=[33,12,44,5,78,16];
// // 一次冒泡
// for($i=0;$i<count($arr)-1;$i++){
// 	if($arr[$i]>$arr[$i+1]){
// 		$c=$arr[$i];
// 		$arr[$i]=$arr[$i+1];
// 		$arr[$i+1]=$c;
// 	}

// }
// var_dump($arr);
?>
<?php
 $arr=[125,157,15,59,75,69,3];
 for($i=count($arr);$i>=2;$i--){
 	for($j=0;$j<$i-1;$j++){
 		if($arr[$j]>$arr[$j+1]){
 			$c=$arr[$j];
 			$arr[$j]=$arr[$j+1];
 			$arr[$j+1]=$c;
 		}
 	}
 }
 var_dump($arr);
?>