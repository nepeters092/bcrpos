{include file= './nav.tpl'}
{include file= './footer.tpl'}
	
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
						{foreach from=$data item=item key=key}
						</tr>
						<tr>
							<td style="width:8%">{$item.transaction_id}</td>
							<td>{$item.customer_name}</td>
							<td id="items"><span data-toggle="tooltip" title='{$item.title}'>{$item.title}</span></td>
							<td>{$item.first_name}</td>
							<td>{$item.date}</td>
							<td>{$item.time}</td>
							<td>${$item.total}</td>
						</tr>
						{/foreach}
					</table>
				</div>
			</div>
			
		</div>
		
	</div>
	
</div>
</div>
