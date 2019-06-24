<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="add.php" method="post">
       标题：<input type="text" name="biao"><p>
       分类：<select name="se">
                 <option value="国内新闻">国内新闻</option>
                 <option value="国际新闻">国际新闻</option>
                 <option value="中国新闻">中国新闻</option>
                 <option value="美食娱乐">美食娱乐</option>
                 <option value="吃喝玩乐">吃喝玩乐</option>
             </select>
       状态：<select name="sel">
                 <option value="痛过">痛过</option>
                 <option value="未通过">未通过</option>
              </select><p>
       图文：<input type="file" name="myfile"><p>
       <input type="submit" value="添加">
	</form>
	<a href="select.php">查看新闻</a>
</body>
</html>