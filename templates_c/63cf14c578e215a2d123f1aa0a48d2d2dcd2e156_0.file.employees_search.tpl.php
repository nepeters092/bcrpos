<?php
/* Smarty version 3.1.30, created on 2017-03-08 12:14:35
  from "C:\wamp64\www\resources\smarty\templates\employees_search.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c04a0b0e1933_98888996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63cf14c578e215a2d123f1aa0a48d2d2dcd2e156' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\employees_search.tpl',
      1 => 1488996872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58c04a0b0e1933_98888996 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="row">
		
		<div id="main-body" class="col-xs-12">
			
			<form action="search_db.php" method="post">
				<input type="text" name="search" value="" placeholder="Search Employees">
				<input type="submit" name="submit" value="Search">
			</form>
		
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
				</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</table>
		
			<span class="fa-stack fa-lg">
				<i class="fa fa-circle fa-stack-1x" aria-hidden="true"></i>
				<i class="fa fa-plus-circle fa-stack-2x" aria-hidden="true"></i>
			</span>Add Employee
			
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
