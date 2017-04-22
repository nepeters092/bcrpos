<?php
/* Smarty version 3.1.30, created on 2017-04-03 18:49:36
  from "C:\wamp64\www\resources\smarty\templates\checkout_confirm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e2df90377cb5_88232557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccd136119158acc524e710e74743e71e291a62ca' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\checkout_confirm.tpl',
      1 => 1491263374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58e2df90377cb5_88232557 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="row">
	
		<div class="col-xs-12">
		
			Transaction complete. Please review the details below: <br />
			
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
