<html>
<head>
	<title>FlyKite! Feedback Portal</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>	
	<form method="post" action="success.php">
		<div class="form-group">
			<label>How would you rate FlyKite's quality of service?</label><br>
			<label class="radio-inline">
				<input type="radio" name="rating" value="1">Good
			</label>
			<label class="radio-inline">
				<input type="radio" name="rating" value="2">Bad
			</label>
		</div>
		<div class="form-group">
			<label>Do you have any suggestions for FlyKite's improvement?</label><br>
			<textarea class="form-control" name="comment" rows="5" maxlength="255"></textarea>
		</div>
		<div class="form-group">
			<button class="btn btn-default" type="submit">Submit
		</div>
	</form>
</body>
</html>