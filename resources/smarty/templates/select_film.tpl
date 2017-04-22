{include file= './nav.tpl'}
{include file= './footer.tpl'}
	
	<div class="row">
		
		<div id="main-body" class="col-xs-12">
		
			<div class="row">
		
				<div class="col-xs-6">
		
					{$customerName} #{$customerId} <br />
					{$address} <br />
					Phone: {$phone} <br />
					<a name="changeCust" href="/select_customer.php">Change Customer</a><br /><br />
					
				</div>
				
				<div class="col-xs-6">
				
					${$lateFee} late fee <br />
					Member since {$member_since|date_format: "%B %e, %Y"}
					
				</div>
			
			</div>
			
			<div class="row">
		
				<div class="col-xs-12 col-md-6">
		
					Scan barcode or enter film ID:
					<form action="#" method="post">
						<input type="text" name="search" value="" placeholder="Film ID">
						<input type="submit" name="movieSubmit" value="Submit"> {$msg}
					</form> <br />
					{if !empty($mdata)}
						{foreach from=$mdata item=item key=key}
							<strong>ID</strong>: {$item.film_id} <br />
							<strong>Title</strong>: {$item.title} <br />
							<strong>Release Year</strong>: {$item.release_year} <br />
							<strong>Price</strong>: {$item.price} <br />
						{/foreach}
							<form action="#" method="post">
							<input type="submit" name="addToCart" value="Add to Cart" />
						</form> <br />
					{/if}
					
				</div>
				
				<div class="col-xs-12 col-md-6">
				
					<div id="basket">
							<h4>Shopping Cart</h4>
							{if !empty($cartData)}
								{foreach from=$cartData item=item key=key}
									{$item.film_title}
									${$item.film_price}<br />
								{/foreach}
									
									Subtotal: ${$subtotal}<br />
									Tax (5.00%): ${$taxamt}<br />
									<strong>Grand Total: {$grandTotal}</strong><br />
								<form action="#" method="post">
								
									<input type="submit" name="clearCart" value="Clear Cart" /><br />
									<a href="/checkout.php" name="checkout">Checkout</a>
								
								</form>
								
							{else}
								Your shopping cart is empty
							{/if}
					</div>
				
				</div>
				
			</div>	
			
		</div>
		
	</div>

</div>