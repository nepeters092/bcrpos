<?php
/* Smarty version 3.1.30, created on 2017-04-19 17:26:46
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/customers.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7e4269eb265_66376072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6357fc145f060ed4fd4de95e9e17e1fcd287352' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/customers.tpl',
      1 => 1492640572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58f7e4269eb265_66376072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="row">
		
		<div id="main-body" class="cust-body col-xs-12">
			
			<div id="cust-search-row" class="row">
				<div class="col-xs-12">
					<div id="cust-search-form">
						<form action="" method="post">
							<input type="text" name="search" value="" placeholder="Search Customers (enter ID or phone number)"> 
							<input type="submit" name="submit" value="Search"> <span style="margin-left: 10px"><?php echo $_smarty_tpl->tpl_vars['backButton']->value;?>
</span>
						</form>
						<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

						<a href="/add_customer.php"><span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-1x" aria-hidden="true"></i>
							<i class="fa fa-plus-circle fa-stack-2x" aria-hidden="true"></i>
						</span></a>
					</div>
				</div>
			</div> 
			<div style="overflow-x:auto;">
				<table id="customer-results">
						<tr>
							<th><a href="?orderBy=customer">ID </a></th>
							<th><a href="?orderBy=last_name">Last Name</a></th>
							<th><a href="?orderBy=first_name">First Name</a></th>
							<th><a href="?orderBy=street_address">Street Address</a></th>
							<th><a href="?orderBy=city">City</a></th>
							<th><a href="?orderBy=state">State</a></th>
							<th><a href="?orderBy=zip">Zip</a></th>
							<th><a href="?orderBy=email">Email</a></th>
							<th><a href="?orderBy=phone">Phone</a></th>
							<th></th>
						</tr>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['item']->value['customer_id'];?>
</a></td>
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
								<td><a href="/edit_customer.php?customer_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['customer_id'];?>
">Edit</a></td>		
							</tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</table>
				<div class="page-numbering">
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
