<?php
/* Smarty version 3.1.30, created on 2017-04-15 12:53:45
  from "C:\wamp64\www\resources\smarty\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f25e290aa427_13040077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e97b309dece7a92cd28930f2db81e9f615f3993' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\login.tpl',
      1 => 1492276649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f25e290aa427_13040077 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<!-- Bootstrap CSS CDN -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Custom CSS File -->
<link rel="stylesheet" href="css/login.css">
<body>

<div>
	<img src="images/logo.png">
	<form action="/login.php" method="post">
		<input type="text" name="username" placeholder="Username" /><br />
		<input type="password" name="password" placeholder="Password" /><br />
		<input class="submit" type="submit" name="submit" value="Log In" /><br />
	</form>
	<p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
	<hr>
	<a href="/forgot_password.php">Forgot Password?</a><br/>
	<a href="/create_account.php">Create Account</a>
</div>
	
</body>
</html><?php }
}
