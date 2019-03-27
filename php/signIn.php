<html>
<head>
   		<meta charset="UTF-8">
</head>
<body>
	<form method="post" action="signProcess.php">
		<table align="center" cellpadding=10 border=1>
			<tr>
				<td><h1>WELCOME</h1></td>
			</tr>
			<tr>
				<td><input type="text" size=15 name=sign_id placeholder="id"></td>
			</tr>
			<tr>
				<td><input type="password" size=15 name=sign_pass placeholder="pass"></td>
			</tr>
			<tr>
    				<td><input type="checkbox" value="yes" name="id_check">ID 저장</td>
    		</tr>
			<tr>
				<td><input type="submit" name=submit value="Sign In"> <input
					type="reset" name=reset value="Reset"></td>
			</tr>
		</table>
	</form>
</body>
</html>