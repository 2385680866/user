<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
</head>
<body>
	<form action="/reg2" method="post">
		@csrf
		<table>
			<tr>
				<td>用户名</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>电话</td>
				<td><input type="text" name="tel"></td>
			</tr>
			<tr>
				<td>邮箱</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="password" name="pwd1"></td>
			</tr>
			<tr>
				<td>确认密码</td>
				<td><input type="password" name="pwd2"></td>
			</tr>
			<tr>
				<td><input type="submit" value="提交"></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>