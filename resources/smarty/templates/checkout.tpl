{include file= './nav.tpl'}
{include file= './footer.tpl'}
	
	<div class="row">
		
		<div id="main-body" class="col-xs-12">
		
			<div id="cust-info"	class="row">
		
				<div class="col-sm-4">
					{$customerName} #{$customerId} <br />
					{$address} <br />
					Phone: {$phone} <br />
					<a name="changeCust" href="/select_customer.php">Change Customer</a><br /><br />
				
				</div>
				
				<div class="col-sm-4">
				
					<strong>${$lateFee}</strong> late fees<br />
					Member since {$member_since|date_format: "%B %e, %Y"}
			
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
					
					{foreach from=$data item=item key=key}
					<div class="row">
					
						<div class="col-xs-8">
								<span style="font-size:1.3em">{$item.film_title}<br />
								<span style="color:	#909090">#{$item.film_id}</span>
						</div>
						
						<div class="no-mobile col-xs-1">
							<input type="text" size="5" name="unitPrice" value="{$item.film_price}" />
						</div>
						
						<div class="no-mobile col-xs-1">
							x1
						</div>
						
						<div class="col-xs-1">
							<p id="total">{$item.film_price}</p>
						</div>
						
						<div class="col-xs-1">
							<a href="/delete_cart_item.php?film_id={$item.film_id}">Delete</a>
						</div>
					
					</div>
					{/foreach}
					<div class="row">
					
						<div class="col-xs-8">
							<span style="font-size:1.3em">Late Fees</span>
						</div>
						
						<div class="no-mobile col-xs-1">
							<input type="text" size="5" name="unitPrice" value="{$lateFee}" />
						</div>
						
						<div class="no-mobile col-xs-1">
							x1
						</div>
						
						<div class="col-xs-1">
							<p id="total">{$lateFee}</p>
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
							Clerk: {$clerkName}
						</div>
					
					</div>
					
					<div class="row">
					
						<div class="col-xs-12">
							Subtotal: ${$subtotalPlusLateFee}
						</div>
					
					</div>
					
					<div class="row">
					
						<div class="col-xs-12">
							Tax (5%): ${$taxAmt}
						</div>
					
					</div>
					
					<div class="row">
					
						<div class="col-xs-12">
							<strong>Total Due: {$grandTotal}</strong>
						</div>
					
					</div>
					
					<div class="row">
					
						<div class="col-xs-12">
							Return Date: {$dueDate}
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
							Amount Due: {if empty($partPay)} ${$grandTotal} {else} {$partPay} {/if}
						</div>
					
					</div>
					
					<div class="row">
					
						<div class="col-xs-12">
							<form action="" method="post">Payment: <input type="text" name="amtPaid" Placeholder="0.00" /> <input type="submit" name="payNow" value="Confirm" /></form>
						</div>
					
					</div>
					
					<div class="row">
					
						<div class="col-xs-12">
							{$msg}
						</div>
					
					</div>
				
				</div>
			
			</div>
		
		</div>
		
	</div>

</div>