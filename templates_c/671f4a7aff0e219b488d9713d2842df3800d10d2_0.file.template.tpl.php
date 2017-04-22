<?php
/* Smarty version 3.1.30, created on 2017-03-06 17:33:10
  from "C:\wamp64\www\resources\smarty\templates\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bdf1b6c45e36_48434531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '671f4a7aff0e219b488d9713d2842df3800d10d2' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\template.tpl',
      1 => 1488826147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bdf1b6c45e36_48434531 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<!-- Bootstrap CSS CDN -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Font Awesome -->
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<!-- Custom CSS File -->
<link rel="stylesheet" href="css/main.css">

</head>

<body>

<div id="utilities" class="container-fluid">
	<div class="row">
		<div id="company" class="col-xs-4">
			<img src="images/logo.png">
		</div>
		<div id="info-dash" class="col-xs-8">
			<div><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>Log Out</div>
			<div class="no-mobile"><i class="fa fa-calendar fa-2x" aria-hidden="true"></i><div id="clock"></div></div>
			<div class="no-mobile"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>User</div>
		</div>
	</div>
</div>

<div id="page-content" class="container-fluid">
	<div class="row">
		<div id="navigation" class="col-xs-3 col-md-2">
			<div class="row">
				<a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
			</div>
			<div class="row">
				<a href="#"><i class="fa fa-usd" aria-hidden="true"></i> Sale</a>
			</div>
			<div class="row">
				<a href="#"><i class="fa fa-id-card" aria-hidden="true"></i> Customers</a>
			</div>
			<div class="row">
				<a href="#"><i class="fa fa-film" aria-hidden="true"></i> Movies</a>
			</div>
			<div class="row">
				<a href="#"><i class="fa fa-exchange" aria-hidden="true"></i> Transactions</a>
			</div>
			<div class="row">
				<a href="#"><i class="fa fa-line-chart" aria-hidden="true"></i> Reporting</a>
			</div>
			<div class="row">
				<a href="#"><i class="fa fa-barcode" aria-hidden="true"></i> Return</a>
			</div>
			<div class="row">
				<a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
			</div>
		</div>
		<div id="data" class="col-xs-9 col-md-10">

		</div>
	</div>

</div>


<!-- jQuery CDN -->
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"><?php echo '</script'; ?>
>
<!-- Bootstrap JavaScript CDN -->
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
<!-- Custom JS Files -->
<?php echo '<script'; ?>
 src="js/displayTime.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
