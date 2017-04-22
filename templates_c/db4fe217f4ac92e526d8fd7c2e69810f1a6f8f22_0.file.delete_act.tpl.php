<?php
/* Smarty version 3.1.30, created on 2017-04-19 19:05:09
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/delete_act.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7fb351a96a7_87375908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db4fe217f4ac92e526d8fd7c2e69810f1a6f8f22' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/delete_act.tpl',
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
function content_58f7fb351a96a7_87375908 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="row">
		
		<div id="main-body" class="col-xs-12">
		
			<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
 
			<form action="" method="post">
				<input type="submit" name="deleteFrom" value="Confirm" />
			</form>
			
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
