<?php
/* Smarty version 3.1.30, created on 2017-04-19 19:38:48
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/checkout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f803184b2885_02251324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e603792698c63f888b41e5dc73067ccac16503a' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/checkout.tpl',
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
function content_58f803184b2885_02251324 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home4/nepeters092/smarty/libs/plugins/modifier.date_format.php';
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<div class="row">
		
		<div id="main-body" class="col-xs-12">
		
			<div id="cust-info"	class="row">
		
				<div class="col-sm-4">
					<?php echo $_smarty_tpl->tpl_vars['customerName']->value;?>
 #<?php echo $_smarty_tpl->tpl_vars['customerId']->value;?>
 <br />
					<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
 <br />
					Phone: <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
 <br />
					<a name="changeCust" href="/select_customer.php">Change Customer</a><br /><br />
				
				</div>
				
				<div class="col-sm-4">
				
					<strong>$<?php echo $_smarty_tpl->tpl_vars['lateFee']->value;?>
</strong> late fees<br />
					Member since <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['member_since']->value,"%B %e, %Y");?>

			
				</div>
				
				<div class="col-sm-4">
				
				
			
				</div>
			
			</div>
			
			<div id="cart-info" class="row">
			
				<div class="col-xs-12 col-md-8">
				
					<div class="row">
						
						<div class="col-xs-8">
							Title
						</div>
						
						<div class="no-mobile col-xs-1">
							Price
						</div>
						
						<div class="no-mobile col-xs-1">
							Qty
						</div>
						
						<div class="col-xs-1">
							Total
						</div>
						
						<div class="col-xs-1">
						
						</div>
					
					</div>
					
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
					<div class="row">
					
						<div class="col-xs-8">
								<span style="font-size:1.3em"><?php echo $_smarty_tpl->tpl_vars['item']->value['film_title'];?>
<br />
								<span style="color:	#909090">#<?php echo $_smarty_tpl->tpl_vars['item']->value['film_id'];?>
</span>
						</div>
						
						<div class="no-mobile col-xs-1">
							<input type="text" size="5" name="unitPrice" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['film_price'];?>
" />
						</div>
						
						<div class="no-mobile col-xs-1">
							x1
						</div>
						
						<div class="col-xs-1">
							<p id="total"><?php echo $_smarty_tpl->tpl_vars['item']->value['film_price'];?>
</p>
						</div>
						
						<div class="col-xs-1">
							<a href="/delete_cart_item.php?film_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['film_id'];?>
">Delete</a>
						</div>
					
					</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					<div class="row">
					
						<div class="col-xs-8">
							<span style="font-size:1.3em">Late Fees</span>
						</div>
						
						<div class="no-mobile col-xs-1">
							<input type="text" size="5" name="unitPrice" value="<?php echo $_smarty_tpl->tpl_vars['lateFee']->value;?>
" />
						</div>
						
						<div class="no-mobile col-xs-1">
							x1
						</div>
						
						<div class="col-xs-1">
							<p id="total"><?php echo $_smarty_tpl->tpl_vars['lateFee']->value;?>
</p>
						</div>
						
						<div class="col-xs-1">
							
						</div>
					
					</div>

					<div class="row">

					</div>
					
				</div>
				
				<div id="summary-cart" class="col-xs-12 col-md-4">
					
					<div class="row">
					
						<div class="col-xs-12">
							Shopping Cart
						</div>
					
					</div>
					
					<div class="row">
					
						<div class="col-xs-12">
							Clerk: <?php echo $_smarty_tpl->tpl_vars['clerkName']->value;?>

						</div>
					
					</div>
					
					<div class="row">
					
						<div class="col-xs-12">
							Subtotal: $<?php echo $_smarty_tpl->tpl_vars['subtotalPlusLateFee']->value;?>

						</div>
					
					</div>
					
					<div class="row">
					
						<div class="col-xs-12">
							Tax (5%): $<?php echo $_smarty_tpl->tpl_vars['taxAmt']->value;?>

						</div>
					
					</div>
					
					<div class="row">
					
						<div class="col-xs-12">
							<strong>Total Due: <?php echo $_smarty_tpl->tpl_vars['grandTotal']->value;?>
</strong>
						</div>
					
					</div>
					
					<div class="row">
					
						<div class="col-xs-12">
							Return Date: <?php echo $_smarty_tpl->tpl_vars['dueDate']->value;?>

						</div>
					
					</div>
					
					<div class="pay-row row">
					
						<div class="col-xs-4">
							<p><i class="fa fa-money fa-3x" aria-hidden="true"></i></p>
						</div>
						
						<div class="col-xs-4">
							<p><i class="fa fa-cc-visa fa-3x" aria-hidden="true"></i></p>
						</div>
						
						<div class="col-xs-4">
							<p><i class="fa fa-cc-mastercard fa-3x" aria-hidden="true"></i></p>
						</div>
					
					</div>
					
					<div class="pay-row row">
					
						<div class="col-xs-4">
							<p><i class="fa fa-cc-amex fa-3x" aria-hidden="true"></i></p>
						</div>
						
						<div class="col-xs-4">
							<p><i class="fa fa-cc-discover fa-3x" aria-hidden="true"></i></p>
						</div>
						
						<div class="col-xs-4">
							<p><i class="fa fa-gift fa-3x" aria-hidden="true"></i></p>
						</div>
					
					</div>
					
					<div class="row">
					
						<div class="col-xs-12">
							Amount Due: <?php if (empty($_smarty_tpl->tpl_vars['partPay']->value)) {?> $<?php echo $_smarty_tpl->tpl_vars['grandTotal']->value;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['partPay']->value;?>
 <?php }?>
						</div>
					
					</div>
					
					<div class="row">
					
						<div class="col-xs-12">
							<form action="" method="post">Payment: <input type="text" name="amtPaid" Placeholder="0.00" /> <input type="submit" name="payNow" value="Confirm" /></form>
						</div>
					
					</div>
					
					<div class="row">
					
						<div class="col-xs-12">
							<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

						</div>
					
					</div>
				
				</div>
			
			</div>
		
		</div>
		
	</div>

</div><?php }
}
