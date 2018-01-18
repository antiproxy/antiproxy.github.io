<?php
if(isset($_POST['password'])){
	if ($_POST['password'] == 'capitalproxyservice') {
		echo "Welcome to the service!";
		exit;
	}else{
		echo "Thank you, come again.";
		exit;
	}
}
?>
<html>
<head>
	<title>Anti Proxy Sign-in</title>
</head>
<body>
	<table>
		<tr>	
			<form action="enter.php" method="post">
				<td>
					<input type="text" name="username">
				</td>

	<td><input type="password" name="password"></td>	
	<td><input type="submit" name="enter" value="enter"></td>
	</tr>
	</form>
	</table>

</body>
</html>
