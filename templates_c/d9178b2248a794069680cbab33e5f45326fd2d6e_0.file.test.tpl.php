<?php
/* Smarty version 3.1.30, created on 2017-03-19 17:18:37
  from "C:\wamp64\www\resources\smarty\templates\test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cf03bd3a6a52_38830123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9178b2248a794069680cbab33e5f45326fd2d6e' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\test.tpl',
      1 => 1489961849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58cf03bd3a6a52_38830123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
				<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

				<?php echo $_smarty_tpl->tpl_vars['item']->value['genre'];?>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		
			<span class="fa-stack fa-lg">
				<i class="fa fa-circle fa-stack-1x" aria-hidden="true"></i>
				<i class="fa fa-plus-circle fa-stack-2x" aria-hidden="true"></i>
			</span>Add Employee
			
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
