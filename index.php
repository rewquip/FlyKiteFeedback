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
		
		$sql = "select * FROM test";
		
		$result = mssql_query($sql) 
			or die('A error occured: ' . mysql_error());
		
		$count = mssql_num_rows($result);
		echo "Showing $count rows:<hr/>\n\n";
		
		while ($row = mssql_fetch_assoc($result)) {
			echo $row['Fieldname'] . "\n";		 
		}
		
		mssql_close($conn);
		
		echo "My first PHP script!";
	?>
</body>
</html>