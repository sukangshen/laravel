<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="<?=url('index/add_do')?>" method="post">
	<table>
		<tr>
			<td>姓名</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
		<input type="hidden" name="_token" value="<?=csrf_token()?>">
			<td>密码</td>
			<td><input type="text" name="pass"></td>
		</tr>
		<tr>
			<td><input type="submit" value="添加"></td>
			<td></td>
		</tr>
	</table>
</form>
</body>
</html>