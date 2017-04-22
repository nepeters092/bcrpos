<?php
/* Smarty version 3.1.30, created on 2017-04-15 12:17:51
  from "C:\wamp64\www\resources\smarty\templates\forgot_password.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f255bfdb50f5_27580764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99c8483a4b1fbb7ced4203daa75578aa675772ee' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\forgot_password.tpl',
      1 => 1492276670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f255bfdb50f5_27580764 (Smarty_Internal_Template $_smarty_tpl) {
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
	<form action="" method="post">
		<input type="text" name="username" placeholder="Username" /><br />
		<input type="text" name="security1" placeholder="What is your mother's maiden name?" /><br />
		<input type="text" name="security2" placeholder="What high school did you attend?" /><br />
		<input class="submit" type="submit" name="submit" value="Recover Password" /><br />
	</form>
	<p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
	<hr>
	<a href="/login.php">Login</a><br/>
</div>
	
</body>
</html><?php }
}
