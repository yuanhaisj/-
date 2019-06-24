<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>猜数字页面<h1>
	<form action="add.php" method="post">
      用户昵称：<input type="text" name="name"><p>
      猜测数字：<input type="text" name="sz"><p>
      <input type="submit" value="提交"><p>
      <span id="sp"></span>
	</form>
 <script>
   // 实例化ajax对象
   var xhr =new XMLHttpRequest();
   // 准备请求
   xhr.open('GET','ajax.php');
   // 发送请求
   xhr.send();
   // 判断并获取响应
   xhr.onreadystatechange=function(){
   	if(xhr.readyState==4&&xhr.status==200){
   		var str =xhr.responseText;
   		if((10-str)==0){
   			sp.innerHTML="<a href='kai.php'>可以开奖啦</a>";
   		}else{
   			sp.innerHTML="还差"+(10-str)+"个人开奖";
   		}
   	}
   }
 </script>
</body>
</html>