<?php
/* Smarty version 3.1.30, created on 2017-04-21 12:17:37
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/create_account.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58fa3eb17ff767_01951138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '477393041d836db6c5a318d10be4c71874368b50' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/create_account.tpl',
      1 => 1492795054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fa3eb17ff767_01951138 (Smarty_Internal_Template $_smarty_tpl) {
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
	<p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
	<hr>
	<a href="/login.php">Login</a><br/>
</div>
	
</body>
</html><?php }
}
