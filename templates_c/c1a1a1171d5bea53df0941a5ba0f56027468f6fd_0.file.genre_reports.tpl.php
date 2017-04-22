<?php
/* Smarty version 3.1.30, created on 2017-04-12 16:27:13
  from "C:\wamp64\www\resources\smarty\templates\genre_reports.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ee9bb127fb89_39029636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1a1a1171d5bea53df0941a5ba0f56027468f6fd' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\genre_reports.tpl',
      1 => 1492032376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58ee9bb127fb89_39029636 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<div class="row">
		
		<div id="main-body" class="col-xs-12">
			
			<div class="row">
			
				<div class="col-xs-12 col-md-6">
					<div id="chart_div"></div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div id="barchart_values"></div>
				</div>
			
			</div>
			
			<div class="row">
			
				<div class="col-xs-12 col-md-6">
					<div id="cat_chart"></div>
				</div>
				<div class="col-xs-12 col-md-6">
				</div>
			
			</div>
			
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
