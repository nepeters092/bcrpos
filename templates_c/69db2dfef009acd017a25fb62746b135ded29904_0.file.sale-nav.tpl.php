<?php
/* Smarty version 3.1.30, created on 2017-03-19 14:46:37
  from "C:\wamp64\www\resources\smarty\templates\sale-nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cee01d88eea5_77779019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69db2dfef009acd017a25fb62746b135ded29904' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\sale-nav.tpl',
      1 => 1489952746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cee01d88eea5_77779019 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="page-content" class="container-fluid">
	<div class="row">
		<div id="navigation" class="col-xs-4 col-md-2">
			<a href="/dashboard.php"><div class="row">
				<i class="no-mobile fa fa-tachometer fa-2x" aria-hidden="true"></i> Dashboard
			</div></a>
			<a href="sale.php"><div class="row">
				<i class="no-mobile fa fa-barcode fa-2x" aria-hidden="true"></i> Sales & Returns
			</div></a>
			<a href="/customers.php"><div class="row">
				<i class="no-mobile fa fa-address-book fa-2x" aria-hidden="true"></i> Customers
			</div></a>
			<a href="#"><div class="row">
				<i class="no-mobile fa fa-film fa-2x" aria-hidden="true"></i> Movies
			</div></a>
			<a href="#"><div class="row">
				<i class="no-mobile fa fa-exchange fa-2x" aria-hidden="true"></i> Transactions
			</div></a>
			<a href="/employees.php"><div class="row">
				<i class="no-mobile fa fa-id-card fa-2x" aria-hidden="true"></i> Employees
			</div></a>
			<a href="#"><div class="row">
				<i class="no-mobile fa fa-line-chart fa-2x" aria-hidden="true"></i> Reporting
			</div></a>
			<a href="#"><div class="row">
				<i class="no-mobile fa fa-cog fa-2x" aria-hidden="true"></i> Settings
			</div></a>
		</div>
		<div id="data" class="col-xs-4 col-md-7">

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
				
			</div><?php }
}
