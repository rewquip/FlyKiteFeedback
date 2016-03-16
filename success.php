<html>
<head>
	<title>FlyKite! Feedback Portal</title>
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
		
		$rating = $_POST["rating"];
		$comment = $_POST["comment"];
		
		echo $rating;
		echo $comment;
		
		$sql = "insert into test (Rating, Comment) values (?, ?)";
		$params = array($rating, $comment);
		$stmt = sqlsrv_query($conn, $sql, $params);
	?>
</body>
</html>