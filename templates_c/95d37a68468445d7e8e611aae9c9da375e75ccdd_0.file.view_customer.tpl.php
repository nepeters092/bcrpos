<?php
/* Smarty version 3.1.30, created on 2017-03-31 13:51:49
  from "C:\wamp64\www\resources\smarty\templates\view_customer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dea5459bea73_15744941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95d37a68468445d7e8e611aae9c9da375e75ccdd' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\view_customer.tpl',
      1 => 1490986298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58dea5459bea73_15744941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="row">
		
		<div id="main-body" class="col-xs-12">
			
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
				<?php echo $_smarty_tpl->tpl_vars['item']->value['customer_id'];?>

				<?php echo $_smarty_tpl->tpl_vars['item']->value['last_name'];?>

				<?php echo $_smarty_tpl->tpl_vars['item']->value['first_name'];?>

				<?php echo $_smarty_tpl->tpl_vars['item']->value['street_address'];?>

				<?php echo $_smarty_tpl->tpl_vars['item']->value['city'];?>

				<?php echo $_smarty_tpl->tpl_vars['item']->value['state'];?>

				<?php echo $_smarty_tpl->tpl_vars['item']->value['zip'];?>

				<?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>

				<?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
