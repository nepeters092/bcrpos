<?php
/* Smarty version 3.1.30, created on 2017-04-19 20:00:07
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/search_transactions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f80817acd3c1_05404520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15866e5abda9d18ceb1dc61756b4e67bedcd24c8' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/search_transactions.tpl',
      1 => 1492640577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58f80817acd3c1_05404520 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<div class="row">
		
		<div id="main-body" class="search-transactions-body col-xs-12">
		
			<div class="row">
			
				<div id="tr-form-container" class="col-xs-12 col-md-5">
					<strong>Complete at least one field:</strong> <br />
					<form action="" method="post" id="transaction-search">
						<div class="form-label">Customer ID</div><input class="tr-text-input" type="text" name="custId"  /><br />
						<div class="form-label">Customer Surname</div><input class="tr-text-input" type="text" name="custName" /><br />
						<div class="form-label">Film ID</div><input class="tr-text-input" type="text" name="filmId" /><br />
						<div class="form-label">Film Title</div><input class="tr-text-input" type="text" name="filmTitle" /><br />
						<div class="form-label">Date</div><input class="tr-text-input" type="date" name="transDate" /><br />
						<div class="form-label">Employee Name</div><input class="tr-text-input" type="text" name="empName" /><br />
						<br />
						<div class="form-label"><strong>Limit</strong></div>
						
						<div id="tr-radio-group">
							<div id="tr-group-b">
								<input type="radio" name="entryLimit" value="lastFive" /> Last 5 <br />
								<input type="radio" name="entryLimit" value="lastFifty" /> Last 50 <br />
								<input type="radio" name="entryLimit" value="lastHundred" /> Last 100 <br />
							</div>
						</div>
						
						<br /><input id="tr-submit" type="submit" name="submit" value="Search" />
					
					
					</form>
				</div>
				
				<div id="tr-result-container" class="col-xs-12 col-md-7">
					<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

					<?php if (!empty($_smarty_tpl->tpl_vars['data']->value)) {?>
						<div id="tr-result-title">
							<strong>Results</strong>
						</div>
						<table>
						<tr>
							<th>#</th>
							<th>Date</th>
							<th>Time</th>
							<th>Cust. Name</th>
							<th>Total</th>
							<th>Clerk</th>
						</tr>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['transaction_id'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['time'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['customer_name'];?>
</td>
									<td>$<?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['first_name'];?>
</td>
								</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					<?php }?>
					
					</table>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
