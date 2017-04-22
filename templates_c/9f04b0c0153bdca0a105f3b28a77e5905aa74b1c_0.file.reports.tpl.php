<?php
/* Smarty version 3.1.30, created on 2017-04-11 17:15:35
  from "C:\wamp64\www\resources\smarty\templates\reports.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ed5587c0ed61_85268954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f04b0c0153bdca0a105f3b28a77e5905aa74b1c' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\reports.tpl',
      1 => 1491948934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58ed5587c0ed61_85268954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<div class="row">
		
		<div id="main-body" class="col-xs-12">
			
			<div id="chart_div"></div>
			
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
