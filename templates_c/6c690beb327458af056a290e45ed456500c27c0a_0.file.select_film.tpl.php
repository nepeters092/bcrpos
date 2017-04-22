<?php
/* Smarty version 3.1.30, created on 2017-04-19 17:27:05
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/select_film.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7e439631953_25956587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c690beb327458af056a290e45ed456500c27c0a' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/select_film.tpl',
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
function content_58f7e439631953_25956587 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home4/nepeters092/smarty/libs/plugins/modifier.date_format.php';
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<div class="row">
		
		<div id="main-body" class="col-xs-12">
		
			<div class="row">
		
				<div class="col-xs-6">
		
					<?php echo $_smarty_tpl->tpl_vars['customerName']->value;?>
 #<?php echo $_smarty_tpl->tpl_vars['customerId']->value;?>
 <br />
					<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
 <br />
					Phone: <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
 <br />
					<a name="changeCust" href="/select_customer.php">Change Customer</a><br /><br />
					
				</div>
				
				<div class="col-xs-6">
				
					$<?php echo $_smarty_tpl->tpl_vars['lateFee']->value;?>
 late fee <br />
					Member since <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['member_since']->value,"%B %e, %Y");?>

					
				</div>
			
			</div>
			
			<div class="row">
		
				<div class="col-xs-12 col-md-6">
		
					Scan barcode or enter film ID:
					<form action="#" method="post">
						<input type="text" name="search" value="" placeholder="Film ID">
						<input type="submit" name="movieSubmit" value="Submit"> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

					</form> <br />
					<?php if (!empty($_smarty_tpl->tpl_vars['mdata']->value)) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mdata']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
							<strong>ID</strong>: <?php echo $_smarty_tpl->tpl_vars['item']->value['film_id'];?>
 <br />
							<strong>Title</strong>: <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
 <br />
							<strong>Release Year</strong>: <?php echo $_smarty_tpl->tpl_vars['item']->value['release_year'];?>
 <br />
							<strong>Price</strong>: <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 <br />
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							<form action="#" method="post">
							<input type="submit" name="addToCart" value="Add to Cart" />
						</form> <br />
					<?php }?>
					
				</div>
				
				<div class="col-xs-12 col-md-6">
				
					<div id="basket">
							<h4>Shopping Cart</h4>
							<?php if (!empty($_smarty_tpl->tpl_vars['cartData']->value)) {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartData']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
									<?php echo $_smarty_tpl->tpl_vars['item']->value['film_title'];?>

									$<?php echo $_smarty_tpl->tpl_vars['item']->value['film_price'];?>
<br />
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

									
									Subtotal: $<?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>
<br />
									Tax (5.00%): $<?php echo $_smarty_tpl->tpl_vars['taxamt']->value;?>
<br />
									<strong>Grand Total: <?php echo $_smarty_tpl->tpl_vars['grandTotal']->value;?>
</strong><br />
								<form action="#" method="post">
								
									<input type="submit" name="clearCart" value="Clear Cart" /><br />
									<a href="/checkout.php" name="checkout">Checkout</a>
								
								</form>
								
							<?php } else { ?>
								Your shopping cart is empty
							<?php }?>
					</div>
				
				</div>
				
			</div>	
			
		</div>
		
	</div>

</div><?php }
}
