<html>
<body>
	<?php
		$serverName = "tcp:darrenlim2012.database.windows.net,1433";
		$userName = "darren.lim.2012";
		$userPassword = "Password1";
		$dbName = "FlyKiteFeedback";
		
		$connectionInfo = array("Database"=>$dbName, "UID"=>$userName, "PWD"=>$userPassword, "MultipleActiveResultSets"=>true);
		sqlsrv_configure("WarningsReturnAsErrors", 0);
		$conn = sqlsrv_connect($serverName, $connectionInfo);
		
		if($conn === false) {
			FatalError("Failed to connect...");
		} else {
			echo "Connected<p>";
		}
		
		$query = sqlsrv_query($conn, "SELECT * from test");
		while($obj = sqlsrv_fetch_object($query))
			echo $obj->ID.", ".$obj->Name."<br/>";
		
		echo "My first PHP script!";
	?>
</body>
</html>