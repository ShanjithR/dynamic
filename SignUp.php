<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="signup.css">
	
</head>
<body>
    	

<form action="app_form.php" method="post">
  <h2>Sign Up</h2>
        <p>
			<label for="name" class="floatLabel">Name</label>
			<input  name="name" type="text">
		</p>
		<p>
			<label for="email" class="floatLabel">Email</label>
			<input  name="email" type="text">
		</p>
		<p>
			<label for="password" class="floatLabel">Password</label>
			<input  name="password" type="password">
			
		</p>
		<p>
			<label for="confirm_password" class="floatLabel">Confirm Password</label>
			<input name="confirm_password" type="password">
			
		</p>
		<p>
			<input type="submit" value="Create My Account">
		</p>
	</form>
	
</body>
</html>