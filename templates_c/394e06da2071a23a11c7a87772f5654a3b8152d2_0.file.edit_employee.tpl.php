<?php
/* Smarty version 3.1.30, created on 2017-04-21 12:44:47
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/edit_employee.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58fa450f198825_92502432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '394e06da2071a23a11c7a87772f5654a3b8152d2' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/edit_employee.tpl',
      1 => 1492796684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58fa450f198825_92502432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="row">
		
		<div id="main-body" class="col-xs-12">
			
			<form id="editEmpForm" action="#" method="post">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
				<strong>Employee ID:</strong> <?php echo $_smarty_tpl->tpl_vars['item']->value['employee_id'];?>
 <br />
				Last Name:<br /> <input type="text" name="lastName" value='<?php echo $_smarty_tpl->tpl_vars['item']->value['last_name'];?>
'> <br />
				First name:<br /> <input type="text" name="firstName" value='<?php echo $_smarty_tpl->tpl_vars['item']->value['first_name'];?>
'> <br />
				Address:<br /> <input type="text" name="streetAddr" value='<?php echo $_smarty_tpl->tpl_vars['item']->value['street_address'];?>
'> <br />
				City:<br /> <input type="text" name="city" value='<?php echo $_smarty_tpl->tpl_vars['item']->value['city'];?>
'> <br />
				State:<br /> <input type="text" name="state" value='<?php echo $_smarty_tpl->tpl_vars['item']->value['state'];?>
'> <br />
				Zip:<br /> <input type="text" name="zip" value='<?php echo $_smarty_tpl->tpl_vars['item']->value['zip'];?>
'> <br />
				Email:<br /> <input type="text" name="email" value='<?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
'> <br />
				Phone:<br /> <input type="text" name="phone" value='<?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
'> <br />
				<input type="submit" name="editEmployee" value="Submit" />
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</form>
			<a href="/employees.php">Return</a>
			<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

			
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
