<?php
/* Smarty version 3.1.30, created on 2017-04-21 12:27:46
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/forgot_password.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58fa4112dfa7a3_87160965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a76506b5318a532398d8d147b17ef99a963122d' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/forgot_password.tpl',
      1 => 1492795664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fa4112dfa7a3_87160965 (Smarty_Internal_Template $_smarty_tpl) {
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
