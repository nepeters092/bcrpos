{include file= './nav.tpl'}
{include file= './footer.tpl'}
	
	<div class="row">
		
		<div id="main-body" class="search-transactions-body col-xs-12">
		
			<div class="row">
			
				<div id="tr-form-container" class="col-xs-12 col-md-5">
					<strong>Complete at least one field:</strong> <br />
					<form action="" method="post" id="transaction-search">
						<div class="form-label">Customer ID</div><input class="tr-text-input" type="text" name="custId"  /><br />
						<div class="form-label">Customer Surname</div><input class="tr-text-input" type="text" name="custName" /><br />
						<div class="form-label">Film ID</div><input class="tr-text-input" type="text" name="filmId" /><br />
						<div class="form-label">Film Title</div><input class="tr-text-input" type="text" name="filmTitle" /><br />
						<div class="form-label">Date</div><input class="tr-text-input" type="date" name="transDate" /><br />
						<div class="form-label">Employee Name</div><input class="tr-text-input" type="text" name="empName" /><br />
						<br />
						<div class="form-label"><strong>Limit</strong></div>
						
						<div id="tr-radio-group">
							<div id="tr-group-b">
								<input type="radio" name="entryLimit" value="lastFive" /> Last 5 <br />
								<input type="radio" name="entryLimit" value="lastFifty" /> Last 50 <br />
								<input type="radio" name="entryLimit" value="lastHundred" /> Last 100 <br />
							</div>
						</div>
						
						<br /><input id="tr-submit" type="submit" name="submit" value="Search" />
					
					
					</form>
				</div>
				
				<div id="tr-result-container" class="col-xs-12 col-md-7">
					{$msg}
					{if !empty($data)}
						<div id="tr-result-title">
							<strong>Results</strong>
						</div>
						<table>
						<tr>
							<th>#</th>
							<th>Date</th>
							<th>Time</th>
							<th>Cust. Name</th>
							<th>Total</th>
							<th>Clerk</th>
						</tr>
						{foreach from=$data item=item key=key}
								<tr>
									<td>{$item.transaction_id}</td>
									<td>{$item.date}</td>
									<td>{$item.time}</td>
									<td>{$item.customer_name}</td>
									<td>${$item.total}</td>
									<td>{$item.first_name}</td>
								</tr>
						{/foreach}
					{/if}
					
					</table>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>
</div>
