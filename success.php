<html>
<head>
	<title>FlyKite! Feedback Portal</title>
	<link rel="icon" href="favicon.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		$serverName = "tcp:darrenlim2012.database.windows.net,1433";
		$dbName = "FlyKiteFeedback";
		$userName = "darren.lim.2012";
		$userPassword = "Password1";
		$connectionInfo = array("Database"=>$dbName, "UID"=>$userName, "PWD"=>$userPassword);
		$conn = sqlsrv_connect($serverName, $connectionInfo);
		
		$food = $_POST["food"];
		$service = $_POST["service"];
		$money = $_POST["money"];
		$recommend = $_POST["recommend"];
		$comments = $_POST["comments"];
		
		$sql = "insert into Feedback values (?, ?, ?, ?, ?)";
		$params = array($food, $service, $money, $recommend, $comments);
		$stmt = sqlsrv_query($conn, $sql, $params);
	?>
	<div class="text-center" style="margin-top: 190">
		<img src="logo.png">
		<h1>Thank You!</h1><p>
		<small>Your response has been submitted. We will use your feedback for FlyKite's future improvement.</small>
	</div>
</body>
</html>