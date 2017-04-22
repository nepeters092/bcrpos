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

<div>
	<img src="images/logo.png">
	<form action="/login.php" method="post">
		<input type="text" name="username" placeholder="Username" /><br />
		<input type="password" name="password" placeholder="Password" /><br />
		<input class="submit" type="submit" name="submit" value="Log In" /><br />
	</form>
	<p>{$msg}</p>
	<hr>
	<a href="/forgot_password.php">Forgot Password?</a><br/>
	<a href="/create_account.php">Create Account</a>
</div>
	
</body>
</html>