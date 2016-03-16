<html>
<body>
	<?php
		$serverName = "tcp:darrenlim2012.database.windows.net,1433";
		$dbName = "FlyKiteFeedback";
		$userName = "darren.lim.2012";
		$userPassword = "Password1";
		$connectionInfo = array("Database"=>$dbName, "UID"=>$userName, "PWD"=>$userPassword);
		$conn = sqlsrv_connect($serverName, $connectionInfo);
		
		$sql = "insert into test (ID, Name) values (?, ?)";
		$params = array(7, "Darren7");
		$stmt = sqlsrv_query($conn, $sql, $params);
		
		$comment = $gender = "";
	?>
	
	<form method="post" action="success.php"> 
		Comment: <textarea name="comment" rows="5" cols="40"></textarea>
		<br><br>
		Gender:
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<br><br>
		<input type="submit" name="submit" value="Submit"> 
	</form>
</body>
</html>