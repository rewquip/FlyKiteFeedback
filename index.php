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
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$valid = true;
			
			if (empty($_POST["comment"])) {
				$comment = "";
			} else {
				$comment = $_POST["comment"];
			}
			
			if (empty($_POST["gender"])) {
				$genderErr = "Gender is required";
				$valid = false;
			} else {
				$gender = $_POST["gender"];
			}
			
			if($valid){
				header("location:success.php");
				exit();
			}
		}
	?>
	
	<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>"> 
		Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
		<br><br>
		Gender:
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
		<span class="error">* <?php echo $genderErr; ?></span>
		<br><br>
		<input type="submit" name="submit" value="Submit"> 
	</form>
</body>
</html>