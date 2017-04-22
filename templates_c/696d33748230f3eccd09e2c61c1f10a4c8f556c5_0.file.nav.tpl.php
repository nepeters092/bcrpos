<?php
/* Smarty version 3.1.30, created on 2017-04-11 16:28:34
  from "C:\wamp64\www\resources\smarty\templates\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ed4a82c347f8_31704322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '696d33748230f3eccd09e2c61c1f10a4c8f556c5' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\nav.tpl',
      1 => 1491946112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ed4a82c347f8_31704322 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="page-content" class="container-fluid">
	<div class="row">
		<div id="navigation" class="col-xs-3 col-md-2">
			<a href="/dashboard.php"><div class="row">
				<i class="no-mobile fa fa-tachometer fa-2x" aria-hidden="true"></i> Dashboard
			</div></a>
			<a href="/sale.php"><div class="row">
				<i class="no-mobile fa fa-barcode fa-2x" aria-hidden="true"></i> Sales & Returns
			</div></a>
			<a href="/customers.php"><div class="row">
				<i class="no-mobile fa fa-address-book fa-2x" aria-hidden="true"></i> Customers
			</div></a>
			<a href="/movies.php"><div class="row">
				<i class="no-mobile fa fa-film fa-2x" aria-hidden="true"></i> Movies
			</div></a>
			<a href="/transactions.php"><div class="row">
				<i class="no-mobile fa fa-exchange fa-2x" aria-hidden="true"></i> Transactions
			</div></a>
			<a href="/employees.php"><div class="row">
				<i class="no-mobile fa fa-id-card fa-2x" aria-hidden="true"></i> Employees
			</div></a>
			<a href="/reports.php"><div class="row">
				<i class="no-mobile fa fa-line-chart fa-2x" aria-hidden="true"></i> Reporting
			</div></a>
			<a href="/settings.php"><div class="row">
				<i class="no-mobile fa fa-cog fa-2x" aria-hidden="true"></i> Settings
			</div></a>
		</div>
		<div id="data" class="col-xs-9 col-md-10">

			<div class="row">
			
				<div id="content-title" class="col-xs-12">
					<h4><?php echo $_smarty_tpl->tpl_vars['navTitle']->value;?>
</h4>
				</div>
				
			</div>
			
			<div class="row">
				
				<div id="nav-trail" class="col-xs-12">
					<p><a href="/dashboard.php">Home</a> / <?php echo $_smarty_tpl->tpl_vars['currPage']->value;?>
</p>
				</div>
				
			</div>
			
	<?php }
}
