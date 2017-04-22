<?php
/* Smarty version 3.1.30, created on 2017-04-19 16:07:05
  from "C:\wamp64\www\resources\smarty\templates\employees.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7d179e52896_94884703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b820661c8bc51b0773969a9b36675b9c0dcebf75' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\employees.tpl',
      1 => 1492636024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58f7d179e52896_94884703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<div class="row">
		
		<div id="main-body" class="emp-body col-xs-12">
			<div id="employee-search-form">
				<form action="" method="post">
					<input type="text" name="search" value="" placeholder="Search Employees (enter Employee ID or phone number)">
					<input type="submit" name="submit" value="Search">
					<?php echo $_smarty_tpl->tpl_vars['backButton']->value;?>

				</form>
			</div>
		
			<table>
				<tr>
					<th><a href="?orderBy=employee_id">ID </a></th>
					<th><a href="?orderBy=last_name">Last Name</a></th>
					<th><a href="?orderBy=first_name">First Name</a></th>
					<th><a href="?orderBy=street_address">Street Address</a></th>
					<th><a href="?orderBy=city">City</a></th>
					<th><a href="?orderBy=state">State</a></th>
					<th><a href="?orderBy=zip">Zip</a></th>
					<th><a href="?orderBy=email">Email</a></th>
					<th><a href="?orderBy=phone">Phone</a></th>
					<th></th>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
				</tr>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['employee_id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['last_name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['first_name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['street_address'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['city'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['state'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['zip'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
</td>
					<td><a href="/edit_employee.php?employee_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['employee_id'];?>
">Edit</a></td>
				</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</table>
			
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
