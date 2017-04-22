<?php
/* Smarty version 3.1.30, created on 2017-04-20 16:38:57
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/returns.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f92a71581ac2_08239904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95422015549d2d201fbac2bff8a3d792ed9be4e2' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/returns.tpl',
      1 => 1492724317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58f92a71581ac2_08239904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<div class="row">
		
		<div style="padding-top: 10px" id="main-body" class="return-container col-xs-12">
		
			<form method="post" action="">
				Enter film ID below: <br />
				<input style="margin-bottom:5px" type="text" name="returnId" placeholder="Film ID" /> <br />
				<input style="margin-bottom:5px" type="submit" name="return" value="Submit" /> <br />
				<?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>

				<br />
				
				<?php if (!empty($_smarty_tpl->tpl_vars['filmTitle']->value)) {?>
					Mark <strong><?php echo $_smarty_tpl->tpl_vars['filmTitle']->value;?>
</strong> as returned? <br />
					<form action="" method="post">
						<input type="submit" name="yes" value="Yes" />
						<input type="submit" name="cancel" value="Cancel" />
					</form>
				<?php }?>
			
			</form>
		
		</div>
		
	</div>

</div><?php }
}
