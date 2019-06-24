<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="selectsql.php" method="post">
        分类：<select name="se" id="">
                 <option  value="国内新闻">国内新闻</option>
                  <option value="国际新闻">国际新闻</option>
                  <option value="中国新闻">中国新闻</option>
                  <option value="美食娱乐">美食娱乐</option>
                  <option value="吃喝玩乐">吃喝玩乐</option>
              </select>
        状态：<select name="sel" id="">
                 <option  value="通过">通过</option>
                  <option value="未通过">未通过</option>
              </select><p>
        <input type="submit" value="提交">
	</form>
</body>
</html>