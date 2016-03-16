<html>
<head>
	<title>FlyKite! Feedback Portal</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style type="text/css">
		textarea {
			resize: none;
		}
	</style>
</head>
<body>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="page-header text-center">
				<h1>FlyKite! Feedback Portal</h1><br>
				<small>We value your feedback greatly and welcome any comments you may have to help improve our programs and services.</small><p>
			</div>
			<form method="post" action="success.php">
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-2 text-center">
							<label>Poor</label>
						</div>
						<div class="col-md-2 text-center">
							<label>Fair</label>
						</div>
						<div class="col-md-2 text-center">
							<label>Average</label>
						</div>
						<div class="col-md-2 text-center">
							<label>Good</label>
						</div>
						<div class="col-md-2 text-center">
							<label>Excellent</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label>How would you rate FlyKite's quality of food?</label>
						</div>
						<div class="col-md-2 text-center">
							<label class="radio-inline">
								<input type="radio" name="rating" value="1">
							</label>
						</div>
						<div class="col-md-2 text-center">
							<label class="radio-inline">
								<input type="radio" name="rating" value="2">
							</label>
						</div>
						<div class="col-md-2 text-center">
							<label class="radio-inline">
								<input type="radio" name="rating" value="3">
							</label>
						</div>
						<div class="col-md-2 text-center">
							<label class="radio-inline">
								<input type="radio" name="rating" value="4">
							</label>
						</div>
						<div class="col-md-2 text-center">
							<label class="radio-inline">
								<input type="radio" name="rating" value="5">
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<label>How would you rate FlyKite's quality of service?</label>
						</div>
						<div class="col-md-2 text-center">
							<label class="radio-inline">
								<input type="radio" name="rating" value="1">
							</label>
						</div>
						<div class="col-md-2 text-center">
							<label class="radio-inline">
								<input type="radio" name="rating" value="2">
							</label>
						</div>
						<div class="col-md-2 text-center">
							<label class="radio-inline">
								<input type="radio" name="rating" value="3">
							</label>
						</div>
						<div class="col-md-2 text-center">
							<label class="radio-inline">
								<input type="radio" name="rating" value="4">
							</label>
						</div>
						<div class="col-md-2 text-center">
							<label class="radio-inline">
								<input type="radio" name="rating" value="5">
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label>Do you have any suggestions for FlyKite's improvement?</label><br>
					<textarea class="form-control" name="comment" rows="5" maxlength="255"></textarea>
				</div>
				<div class="form-group text-center">
					<button class="btn btn-default" type="submit">Submit
				</div>
			</form>
		</div>
	</div>
</body>
</html>