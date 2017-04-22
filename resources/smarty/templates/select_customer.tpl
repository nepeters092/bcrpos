{include file= './nav.tpl'}
{include file= './footer.tpl'}
	
	<div class="row">
		
		<div id="main-body" class="col-xs-12">
		
			Select a customer to begin:
			<form id="customer-sale-form" action="#" method="post">
				<input type="text" name="custSearch" placeholder="Enter Customer ID">
				<input type="submit" name="custSubmit" value="Submit"> 
			</form><br />
			{foreach from=$custData item=item key=key}
				{$item.first_name} {$item.last_name} #{$item.customer_id} <br />
				{$item.street_address}<br />
				{$item.city}, {$item.state} {$item.zip} <br />
				Phone: {$item.phone} <br />
				<form method="post" action="">
					<input type="submit" name="confirmCust" value="Confirm" />
					<input type="submit" name="cancelCust" value="Cancel" />
				</form>
			{/foreach}
		
		</div>
		
	</div>

</div>