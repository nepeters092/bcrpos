{include file= './nav.tpl'}
{include file= './footer.tpl'}

	<div class="row">
		
		<div id="main-body" class="dash-body col-xs-12">
		
			<div id="dash-module-container" class="row">
			
				<div class="no-mobile col-md-1">
				</div>
				
				<div class="dash-module col-xs-3 col-md-2">
				
					<div style="background-color:#E91E63">
						<h4>Total Sales:</h4>
						<h3>${$total}</h3>
					</div>
				
				</div>
				
				<div class="dash-module col-xs-3 col-md-2">
				
					<div style="background-color:#3F51B5">
						<h4>Last Sale:</h4>
						<h3>${$last_sale}</h3>
					</div>
				
				</div>
				
				<div class="dash-module col-xs-3 col-md-2">
				
					<div style="background-color:#5C6BC0">
						<h4>Average Sale:</h4>
						<h3>${$avg}</h3>
					</div>
				
				</div>
				
				<div class="dash-module col-xs-3 col-md-2">
				
					<div style="background-color:#7986CB">
						<h4>Customers:</h4>
						<h3>{$customerCount}</h3>
					</div>
				
				</div>
				
				<div class="no-mobile dash-module col-xs-3 col-md-2">
				
					<div style="background-color:#9FA8DA">
						<h4>Titles:</h4>
						<h3>{$movieCount}</h3>
					</div>
				
				</div>
				
				<div class="col-xs-3 col-md-1">
				</div>
		
			
			</div>
			
			<div class="row">
			
			
				<div style="overflow-x:auto;" class="col-xs-12 col-md-6 latest-transactions">
				
					<h4>Latest Transactions</h4>
					<table>
						<tr>
							<th>ID</th>
							<th>Customer</th>
							<th>Employee</th>
							<th>Date</th>
							<th>Time</th>
							<th>Total</th>
						{foreach from=$data2 item=item key=key}
						</tr>
						<tr>
							<td>{$item.transaction_id}</td>
							<td>{$item.customer_name}</td>
							<td>{$item.first_name}</td>
							<td>{$item.date}</td>
							<td>{$item.time}</td>
							<td>${$item.total}</td>
						</tr>
						{/foreach}
					</table>
				
				</div>
				
				<div class="col-xs-12 col-md-6">
				
					<div id="chart_div"></div>
				
				</div>
			
			
			</div>
			
		
		</div>
		
	</div>
	
</div>
</div>
</div>



