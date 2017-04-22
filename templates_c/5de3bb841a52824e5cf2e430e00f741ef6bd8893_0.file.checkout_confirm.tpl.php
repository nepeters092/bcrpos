<?php
/* Smarty version 3.1.30, created on 2017-04-21 13:29:41
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/checkout_confirm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58fa4f95a9e0a6_11796791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5de3bb841a52824e5cf2e430e00f741ef6bd8893' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/checkout_confirm.tpl',
      1 => 1492698486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58fa4f95a9e0a6_11796791 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="row">
	
		<div class="col-xs-12">
		
			<h4>Transaction complete. Please review the details below:</h4>
			<p style="font-size: 1.5em"><strong>$<?php echo $_smarty_tpl->tpl_vars['change']->value;?>
</strong> is your change</p>
			
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
				<strong>Transaction ID</strong>: <?php echo $_smarty_tpl->tpl_vars['item']->value['transaction_id'];?>
 <br />
				<strong>Customer Name</strong>: <?php echo $_smarty_tpl->tpl_vars['item']->value['customer_name'];?>
 <br />
				<strong>Clerk Name</strong>: <?php echo $_smarty_tpl->tpl_vars['item']->value['clerk_name'];?>
 <br />
				<strong>Date</strong>: <?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
 <br />
				<strong>Time</strong>: <?php echo $_smarty_tpl->tpl_vars['item']->value['time'];?>
 <br />
				<strong>Total</strong>: $<?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
 <br />
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			
			<a href="/transactions.php">View Transactions</a>
			
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
