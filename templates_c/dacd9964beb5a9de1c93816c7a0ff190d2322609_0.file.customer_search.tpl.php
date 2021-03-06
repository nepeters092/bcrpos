<?php
/* Smarty version 3.1.30, created on 2017-03-11 10:21:51
  from "C:\wamp64\www\resources\smarty\templates\customer_search.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c4241f01f0d9_09957040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dacd9964beb5a9de1c93816c7a0ff190d2322609' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\customer_search.tpl',
      1 => 1489249302,
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
function content_58c4241f01f0d9_09957040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="row">
		
		<div id="main-body" class="col-xs-12">
			
			<form action="search_customer.php" method="post">
				<input type="text" name="search" value="" placeholder="Search Customers">
				<input type="submit" name="submit" value="Search">
			</form>
		
			<table>
				<tr>
					<th><a href="?orderBy=customer_id">ID </a></th>
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
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['customer_id'];?>
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
			</span>Add Customer
			
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
