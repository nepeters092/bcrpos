<?php
/* Smarty version 3.1.30, created on 2017-04-20 15:32:03
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/sale.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f91ac3755f14_41580662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fb137638c35268a9c6460d4aea07ba16dbe57ea' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/sale.tpl',
      1 => 1492720315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58f91ac3755f14_41580662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<div class="row">
		
		<div id="main-body" class="sale-body col-xs-12">
		
			<div id="sale-return" class="row">
			
				<div class="col-xs-6">
					<a href="/select_customer.php"><div id="sale-box">Sales</div></a>
				</div>
				
				<div class="col-xs-6">
					<a href="/returns.php"><div id="return-box">Returns</div></a>
				</div>
			
			</div>
		
		</div>
		
	</div>

</div><?php }
}
