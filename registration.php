<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bootstrap 4 Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		
	</head>
	<body>

		<div class="container">
			<form>
				<input type="hidden" name="action" value="registration">	
				<div class="form-group">
					<label for="fname">First Name</label>
					<input type="text" name="fname" class="form-control" placeholder="Enter fname" id="fname">
				</div>
				<div class="form-group">
					<label for="lname">Last Name</label>
					<input type="text" name="lname" class="form-control" placeholder="Enter lname" id="lname">
				</div>
				<div class="form-group">
					<label for="uname">Username</label>
					<input type="text" name="uname" class="form-control" placeholder="Enter email" id="uname">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" class="form-control" placeholder="Enter password" id="password">
				</div>
				<div class="form-group">
					<label for="cpassword">Confirm Password:</label>
					<input type="password" name="cpassword" class="form-control" placeholder="Enter password" id="cpassword">
				</div>
				<div class="form-group form-check">
					<label class="form-check-label">
					  <input class="form-check-input" type="checkbox"> Remember me
					</label>
				</div>
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script>
			//Check for page load
			
			//$(selector).action();
			$(document).ready(function(){
				alert('ok');
			});
			
		</script>
		
	</body>
</html>