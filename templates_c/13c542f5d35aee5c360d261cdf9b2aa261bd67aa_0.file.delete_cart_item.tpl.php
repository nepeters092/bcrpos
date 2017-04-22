<?php
/* Smarty version 3.1.30, created on 2017-04-15 13:25:26
  from "C:\wamp64\www\resources\smarty\templates\delete_cart_item.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f26596910824_38317541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13c542f5d35aee5c360d261cdf9b2aa261bd67aa' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\delete_cart_item.tpl',
      1 => 1492280725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58f26596910824_38317541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="row">
		
		<div id="main-body" class="col-xs-12">
		
			Delete <strong><?php echo $_smarty_tpl->tpl_vars['movieTitle']->value;?>
</strong> from cart?
			<form action="" method="post">
				<input type="submit" name="deleteFrom" value="Confirm" />
			</form>
			
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
