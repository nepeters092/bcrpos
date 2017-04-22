<?php
/* Smarty version 3.1.30, created on 2017-04-21 12:23:11
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58fa3fffc48f19_63021124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94128ab997cc4f11860267425f84a6d904ea718b' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/login.tpl',
      1 => 1492795389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fa3fffc48f19_63021124 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
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
