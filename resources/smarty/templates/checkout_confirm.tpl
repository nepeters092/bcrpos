{include file= './nav.tpl'}
{include file= './footer.tpl'}

	<div class="row">
	
		<div class="col-xs-12">
		
			<h4>Transaction complete. Please review the details below:</h4>
			<p style="font-size: 1.5em"><strong>${$change}</strong> is your change</p>
			
			{foreach from=$data item=item key=key}
				<strong>Transaction ID</strong>: {$item.transaction_id} <br />
				<strong>Customer Name</strong>: {$item.customer_name} <br />
				<strong>Clerk Name</strong>: {$item.clerk_name} <br />
				<strong>Date</strong>: {$item.date} <br />
				<strong>Time</strong>: {$item.time} <br />
				<strong>Total</strong>: ${$item.total} <br />
			{/foreach}
			
			<a href="/transactions.php">View Transactions</a>
			
		</div>
		
	</div>
	
</div>
</div>
