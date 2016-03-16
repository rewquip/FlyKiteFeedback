<html>
<body>
<?php
$serverName = "http://darrenlim2012.database.windows.net";
$connectionInfo = array("Database"=>"FlyKiteFeedback", "UID"=>"darren.lim.2012", "PWD"=>"Password1");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if($conn ) {
	echo "Connection established.<br/>";
}else{
	echo "Connection could not be established.<br/>";
	die(print_r( sqlsrv_errors(), true));
}

echo "My first PHP script!";
?>
</body>
</html>