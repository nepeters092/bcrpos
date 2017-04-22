<?php
/* Smarty version 3.1.30, created on 2017-04-19 16:17:22
  from "C:\wamp64\www\resources\smarty\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7d3e2f08864_15304174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8afae876ee337e658a9f9419faf695fb8e76f60d' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\header.tpl',
      1 => 1492636641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f7d3e2f08864_15304174 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
 <!--Load the AJAX API-->
<?php echo '<script'; ?>
 type="text/javascript" src="https://www.gstatic.com/charts/loader.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap CSS CDN -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Font Awesome -->
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<!-- Custom CSS Files -->
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/sale.css">
<link rel="stylesheet" href="/css/customers.css">
<link rel="stylesheet" href="/css/transactions.css">
<link rel="stylesheet" href="/css/movies.css">
<link rel="stylesheet" href="/css/reports.css">
<link rel="stylesheet" href="/css/dashboard.css">
<link rel="stylesheet" href="/css/employees.css">
<link rel="stylesheet" href="/css/settings.css">
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
 type="text/javascript" src="/js/addInput.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/js/tooltip.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/js/charts.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
     google.charts.load('current', {'packages':['corechart']});
<?php echo '</script'; ?>
>

</head>

<body>


<div id="utilities" class="container-fluid">
	<div class="row">
		<div id="company" class="col-xs-7">
		</div>
		<div id="info-dash" class="col-xs-5">
			<div><a id="logout" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Log Out</a></div>
			<div>Welcome, <?php echo $_smarty_tpl->tpl_vars['nameGreet']->value;?>
</a></div>
		</div>
	</div>
</div>
<?php }
}
