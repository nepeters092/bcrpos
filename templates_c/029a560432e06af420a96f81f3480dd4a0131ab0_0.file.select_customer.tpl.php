<?php
/* Smarty version 3.1.30, created on 2017-04-21 13:13:22
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/select_customer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58fa4bc2c1ce76_28133476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '029a560432e06af420a96f81f3480dd4a0131ab0' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/select_customer.tpl',
      1 => 1492798399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58fa4bc2c1ce76_28133476 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<div class="row">
		
		<div id="main-body" class="col-xs-12">
		
			Select a customer to begin:
			<form id="customer-sale-form" action="#" method="post">
				<input type="text" name="custSearch" placeholder="Enter Customer ID">
				<input type="submit" name="custSubmit" value="Submit"> 
			</form><br />
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custData']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
				<?php echo $_smarty_tpl->tpl_vars['item']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['last_name'];?>
 #<?php echo $_smarty_tpl->tpl_vars['item']->value['customer_id'];?>
 <br />
				<?php echo $_smarty_tpl->tpl_vars['item']->value['street_address'];?>
<br />
				<?php echo $_smarty_tpl->tpl_vars['item']->value['city'];?>
, <?php echo $_smarty_tpl->tpl_vars['item']->value['state'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['zip'];?>
 <br />
				Phone: <?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
 <br />
				<form method="post" action="">
					<input type="submit" name="confirmCust" value="Confirm" />
					<input type="submit" name="cancelCust" value="Cancel" />
				</form>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		
		</div>
		
	</div>

</div><?php }
}
