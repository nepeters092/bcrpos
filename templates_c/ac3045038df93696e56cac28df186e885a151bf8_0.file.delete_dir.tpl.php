<?php
/* Smarty version 3.1.30, created on 2017-04-09 16:54:41
  from "C:\wamp64\www\resources\smarty\templates\delete_dir.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58eaada154bb75_44106585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac3045038df93696e56cac28df186e885a151bf8' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\delete_dir.tpl',
      1 => 1491774879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58eaada154bb75_44106585 (Smarty_Internal_Template $_smarty_tpl) {
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
