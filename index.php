<html>
<body>
<?php
$conn = new PDO("sqlsrv:Server=http://darrenlim2012.database.windows.net;Database=FlyKiteFeedback", "darren.lim.2012", "Password1");

if($conn) {
	echo "Connection established.<br/>";
} else {
	echo "Connection could not be established.<br/>";
	die(print_r(sqlsrv_errors(), true));
}

echo "My first PHP script!";
?>
</body>
</html>