<?php
/* Smarty version 3.1.30, created on 2017-04-19 19:44:00
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/delete_cart_item.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f80450797913_15426999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9de1c668618740a7a435a69aa3462c4f9c65599' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/delete_cart_item.tpl',
      1 => 1492640573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58f80450797913_15426999 (Smarty_Internal_Template $_smarty_tpl) {
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
