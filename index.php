<html>
<body>
	<?php
		$serverName = "tcp:darrenlim2012.database.windows.net,1433";
		$userName = "darren.lim.2012";
		$userPassword = "Password1";
		$dbName = "FlyKiteFeedback";
		$connectionInfo = array("Database"=>$dbName, "UID"=>$userName, "PWD"=>$userPassword);
		$conn = sqlsrv_connect($serverName, $connectionInfo);
		
		$sql = "insert into test (ID, Name) values (?, ?)";
		$params = array(7, "Darren7");
		$stmt = sqlsrv_query($conn, $sql, $params);
	?>
</body>
</html>