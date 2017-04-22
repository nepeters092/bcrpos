<?php
/* Smarty version 3.1.30, created on 2017-04-20 15:22:56
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/reports.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f918a0869dc2_80641972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03bb36674c47c6453bb2cf710beeb3108fcc91e1' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/reports.tpl',
      1 => 1492719739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58f918a0869dc2_80641972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<div class="row">
		
		<div id="main-body" class="report-body col-xs-12">
			
			<div style="background-color:#C51162"><a href="daily_revenue.php"><i class="fa fa-calendar fa-2x" aria-hidden="true"></i> Daily Revenue</a></div>
			<div style="background-color:#F50057"><a href="customer_revenue.php"><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i> Revenue by Customer</a></div>
			<div style="background-color:#FF4081"><a href="employee_revenue.php"><i class="fa fa-id-card fa-2x" aria-hidden="true"></i> Sales by Employee</a></div>
			
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
