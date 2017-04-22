<?php
/* Smarty version 3.1.30, created on 2017-04-21 12:47:55
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/employee_revenue.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58fa45cbbde9d5_19156300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3c9e7f1bf2379907eba626277bc980500180e4b' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/employee_revenue.tpl',
      1 => 1492714455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58fa45cbbde9d5_19156300 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<div class="row">
		
		<div id="main-body" class="col-xs-12">
			
			<div id="revenue-report-container">
				<h4>Employee Revenue</h4>
				<table>
					<tr>
						<th>Employee</th>
						<th>Total</th>
					</tr>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['item']->value['first_name'];?>
</a></td>
						<td><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</td>	
					</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</table>
				<div>
					<?php if (!empty($_smarty_tpl->tpl_vars['last']->value)) {?>
					<div>Page <?php echo $_smarty_tpl->tpl_vars['pagenum']->value;?>
 of <?php echo $_smarty_tpl->tpl_vars['last']->value;?>
</div>
					<?php }?>
					<div><?php if ($_smarty_tpl->tpl_vars['pagenum']->value == 1) {?>
					<?php } else { ?> <span class="page-link"><?php echo $_smarty_tpl->tpl_vars['firstLink']->value;?>
</span> <span class="page-link"><?php echo $_smarty_tpl->tpl_vars['prevLink']->value;?>
</span> <i class="fa fa-ellipsis-h" aria-hidden="true"></i> 
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['pagenum']->value == $_smarty_tpl->tpl_vars['last']->value) {?>
					<?php } else { ?> <span class="page-link"><?php echo $_smarty_tpl->tpl_vars['nextLink']->value;?>
</span> <span class="page-link"><?php echo $_smarty_tpl->tpl_vars['lastLink']->value;?>
</span>
					<?php }?></div>
				</div>
			</div>
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
