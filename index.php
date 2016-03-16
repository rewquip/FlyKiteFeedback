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
		}
		
		$sql = "insert into test (ID, Name) values (?, ?)";
		$params = array(5, "Darren5");
		$stmt = sqlsrv_query($conn, $sql, $params);
		
		/*
		$sql = "SELECT * from test";
		$stmt = sqlsrv_query($conn, $sql);
		while($obj = sqlsrv_fetch_object($stmt))
			echo $obj->ID.", ".$obj->Name."<br/>";
		*/
		
		echo "<p>My first PHP script!";
	?>
	<script>
		console.log(<? echo json_encode($conn); ?>);
	</script>
</body>
</html>