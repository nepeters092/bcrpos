<?php
/* Smarty version 3.1.30, created on 2017-04-20 10:57:40
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/restore_session.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f8da74f41f86_43038811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f1775ae22ce95f6336604e7ebdc4497d38d4b29' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/restore_session.tpl',
      1 => 1492703793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58f8da74f41f86_43038811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<div class="row">
		
		<div id="main-body" class="col-xs-12">
			
			<p style="margin-top:10px">Do you wish to restore your previous session?</p>
			<form method="post" action="" id="restoreSes">
				<input name="yes" type="submit" method="post" value="Yes" />
				<input name="no" type="submit" method="post" value="No" />
			</form>
			
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
