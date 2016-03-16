<html>
<head>
	<title>FlyKite! Feedback Portal</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>	
	<form method="post" action="success.php"> 
		Rating:
		<input type="radio" name="rating" value="1">Good
		<input type="radio" name="rating" value="2">Bad
		<br><br>
		Comment:
		<textarea name="comment" rows="5" cols="40" maxlength="255"></textarea>
		<br><br>
		<input type="submit" name="submit" value="Submit"> 
	</form>
</body>
</html>