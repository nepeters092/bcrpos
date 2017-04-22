<?php
/* Smarty version 3.1.30, created on 2017-04-09 20:36:53
  from "C:\wamp64\www\resources\smarty\templates\transactions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58eae1b599de29_49465760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f3a995fbf3172d0413fe4ea535f1e92ae3b635' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\transactions.tpl',
      1 => 1491788211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58eae1b599de29_49465760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<div class="row">
		
		<div id="main-body" class="col-xs-12">
		
			<div class="row">
				<div class="col-xs-12">
					<div id="latest-title">
						<div><h4>Latest Transations</h4></div>
						<div><a href="/search_transactions.php"><span class="fa-stack">
							<span class="fa-stack fa-lg">
								<i class="fa fa-square fa-stack-2x"></i>
								<i class="fa fa-search fa-stack-1x fa-inverse"></i>
							</span>
						</span></a></div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			
			<div id="transactions" class="row">
				<div class="col-xs-12">
					<table id="transaction-results">
						<tr>
							<th style="width:8%">ID</th>
							<th>Customer</th>
							<th>Item(s)</th>
							<th>Employee</th>
							<th>Date</th>
							<th>Time</th>
							<th>Total</th>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
						</tr>
						<tr>
							<td style="width:8%"><?php echo $_smarty_tpl->tpl_vars['item']->value['transaction_id'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['customer_name'];?>
</td>
							<td id="items"><span data-toggle="tooltip" title='<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
'><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span></td>
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
			</div>
			
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
