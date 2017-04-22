<?php
/* Smarty version 3.1.30, created on 2017-03-29 01:24:29
  from "C:\wamp64\www\resources\smarty\templates\sales.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58db531d98cf90_34545424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '592fbe09fae660a9d2e659b8c72b8935bfee2560' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\sales.tpl',
      1 => 1490768666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58db531d98cf90_34545424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<div class="row">
		
		<div id="main-body" class="col-xs-12">
		
			<div class="row">
				
				<div id="sale-film-search" class="col-xs-6">
					<div class="row">
						<div class="col-xs-12">
							<form action="#" method="post">
								<i class="fa fa-tag" aria-hidden="true"></i><input type="text" name="filmId" placeholder="Scan or enter film ID" />
								<input type="submit" name="searchFilm" value="Search" /> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
 <br />
							</form>
						</div>
					</div>
					
					<div class="row">
						<div id="sales-results-table" class="col-xs-12">
							<table>
								<tr>
									<th>ID</th>
									<th>Title</th>
									<th>Price</th>
									<th>Add</th>
								</tr>
								<?php if (!empty($_smarty_tpl->tpl_vars['filmData']->value)) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filmData']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['item']->value['film_id'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
										<td>$<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
										<td></td>
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
				
				<div class="col-xs-6">
			
					Customer <br />
					<input type="text" name="customerId" placeholder="Scan or enter customer ID" />
					<input type="submit" name="submitCust" value="Submit" /> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

					<?php if (!empty($_smarty_tpl->tpl_vars['customerData']->value)) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customerData']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
							<?php echo $_smarty_tpl->tpl_vars['item']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['last_name'];?>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					<?php }?>
					
				</div>
			
			</div>
			
		</div>
		
	</div>

</div><?php }
}
