<?php
/* Smarty version 3.1.30, created on 2017-04-19 17:25:23
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/dashboard.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7e3d37b6652_49252593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '914bbd8c46370f3d48e3cf48b1ea7324e145ff3d' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/dashboard.tpl',
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
function content_58f7e3d37b6652_49252593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="row">
		
		<div id="main-body" class="dash-body col-xs-12">
		
			<div id="dash-module-container" class="row">
			
				<div class="no-mobile col-md-1">
				</div>
				
				<div class="dash-module col-xs-3 col-md-2">
				
					<div style="background-color:#E91E63">
						<h4>Total Sales:</h4>
						<h3>$<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</h3>
					</div>
				
				</div>
				
				<div class="dash-module col-xs-3 col-md-2">
				
					<div style="background-color:#3F51B5">
						<h4>Last Sale:</h4>
						<h3>$<?php echo $_smarty_tpl->tpl_vars['last_sale']->value;?>
</h3>
					</div>
				
				</div>
				
				<div class="dash-module col-xs-3 col-md-2">
				
					<div style="background-color:#5C6BC0">
						<h4>Average Sale:</h4>
						<h3>$<?php echo $_smarty_tpl->tpl_vars['avg']->value;?>
</h3>
					</div>
				
				</div>
				
				<div class="dash-module col-xs-3 col-md-2">
				
					<div style="background-color:#7986CB">
						<h4>Customers:</h4>
						<h3><?php echo $_smarty_tpl->tpl_vars['customerCount']->value;?>
</h3>
					</div>
				
				</div>
				
				<div class="no-mobile dash-module col-xs-3 col-md-2">
				
					<div style="background-color:#9FA8DA">
						<h4>Titles:</h4>
						<h3><?php echo $_smarty_tpl->tpl_vars['movieCount']->value;?>
</h3>
					</div>
				
				</div>
				
				<div class="col-xs-3 col-md-1">
				</div>
		
			
			</div>
			
			<div class="row">
			
			
				<div style="overflow-x:auto;" class="col-xs-12 col-md-6 latest-transactions">
				
					<h4>Latest Transactions</h4>
					<table>
						<tr>
							<th>ID</th>
							<th>Customer</th>
							<th>Employee</th>
							<th>Date</th>
							<th>Time</th>
							<th>Total</th>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data2']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
						</tr>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['transaction_id'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['customer_name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['first_name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['time'];?>
</td>
							<td>$<?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</td>
						</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</table>
				
				</div>
				
				<div class="col-xs-12 col-md-6">
				
					<div id="chart_div"></div>
				
				</div>
			
			
			</div>
			
		
		</div>
		
	</div>
	
</div>
</div>
</div>



<?php }
}
