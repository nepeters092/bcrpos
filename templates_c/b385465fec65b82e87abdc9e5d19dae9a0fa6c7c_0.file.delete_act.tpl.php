<?php
/* Smarty version 3.1.30, created on 2017-04-09 16:59:02
  from "C:\wamp64\www\resources\smarty\templates\delete_act.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58eaaea6e71cb7_48608278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b385465fec65b82e87abdc9e5d19dae9a0fa6c7c' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\delete_act.tpl',
      1 => 1491774851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58eaaea6e71cb7_48608278 (Smarty_Internal_Template $_smarty_tpl) {
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
