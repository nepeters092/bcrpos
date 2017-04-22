<?php
/* Smarty version 3.1.30, created on 2017-04-12 14:43:41
  from "C:\wamp64\www\resources\smarty\templates\employee_reports.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ee836de15c97_40550731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8629f0cbf729ac68551bac2a322f60fe1a89259' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\employee_reports.tpl',
      1 => 1492025986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58ee836de15c97_40550731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<div class="row">
		
		<div id="main-body" class="col-xs-12">
			
			<div id="barchart_values"></div>
			
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
