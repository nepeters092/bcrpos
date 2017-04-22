{include file= './nav.tpl'}
{include file= './footer.tpl'}

	<div class="row">
		
		<div id="main-body" class="cust-body col-xs-12">
			
			<div id="cust-search-row" class="row">
				<div class="col-xs-12">
					<div id="cust-search-form">
						<form action="" method="post">
							<input type="text" name="search" value="" placeholder="Search Customers (enter ID or phone number)"> 
							<input type="submit" name="submit" value="Search"> <span style="margin-left: 10px">{$backButton}</span>
						</form>
						{$msg}
						<a href="/add_customer.php"><span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-1x" aria-hidden="true"></i>
							<i class="fa fa-plus-circle fa-stack-2x" aria-hidden="true"></i>
						</span></a>
					</div>
				</div>
			</div> 
			<div style="overflow-x:auto;">
				<table id="customer-results">
						<tr>
							<th><a href="?orderBy=customer">ID </a></th>
							<th><a href="?orderBy=last_name">Last Name</a></th>
							<th><a href="?orderBy=first_name">First Name</a></th>
							<th><a href="?orderBy=street_address">Street Address</a></th>
							<th><a href="?orderBy=city">City</a></th>
							<th><a href="?orderBy=state">State</a></th>
							<th><a href="?orderBy=zip">Zip</a></th>
							<th><a href="?orderBy=email">Email</a></th>
							<th><a href="?orderBy=phone">Phone</a></th>
							<th></th>
						</tr>
						{foreach from=$data item=item key=key}
							<tr>
								<td>{$item.customer_id}</a></td>
								<td>{$item.last_name}</td>
								<td>{$item.first_name}</td>
								<td>{$item.street_address}</td>
								<td>{$item.city}</td>
								<td>{$item.state}</td>
								<td>{$item.zip}</td>
								<td>{$item.email}</td>
								<td>{$item.phone}</td>
								<td><a href="/edit_customer.php?customer_id={$item.customer_id}">Edit</a></td>		
							</tr>
					{/foreach}
				</table>
				<div class="page-numbering">
					{if !empty($last)}
					<div>Page {$pagenum} of {$last}</div>
					{/if}
					<div>{if $pagenum == 1}
					{else} <span class="page-link">{$firstLink}</span> <span class="page-link">{$prevLink}</span> <i class="fa fa-ellipsis-h" aria-hidden="true"></i> 
					{/if}
					{if $pagenum == $last}
					{else} <span class="page-link">{$nextLink}</span> <span class="page-link">{$lastLink}</span>
					{/if}</div>
				</div>
			</div>
		</div>
		
	</div>
	
</div>
</div>
