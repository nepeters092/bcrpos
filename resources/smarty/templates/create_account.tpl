<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>{$title}</title>
<!-- Bootstrap CSS CDN -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Custom CSS File -->
<link rel="stylesheet" href="css/login.css">
</head>
<body>

<div id="create-account">
	<img src="images/logo.png">
	<form action="" method="post">
		<input type="text" name="first" placeholder="First Name" /><br />
		<input type="text" name="last" placeholder="Last Name" /><br />
		<input type="text" name="email" placeholder="Email Address" /><br />
		<input type="text" name="username" placeholder="Username" /><br />
		<input type="password" name="password" placeholder="Password" /><br />
		<input type="password" name="verify" placeholder="Confirm Password" /><br />
		<input type="text" name="security1" placeholder="What is your mother's maiden name?" /><br />
		<input type="text" name="security2" placeholder="What high school did you attend?" /><br />
		<input id="login" type="submit" name="createAcct" value="Create Account" /><br />
	</form>
	<p>{$msg}</p>
	<hr>
	<a href="/login.php">Login</a><br/>
</div>
	
</body>
</html>