{include file= './header.tpl'}
{include file= './nav.tpl'}
{include file= './footer.tpl'}

	<div class="row">
		
		<div id="main-body" class="col-xs-12">
			
			<form action="search_db.php" method="post">
				<input type="text" name="search" value="" placeholder="Search Employees">
				<input type="submit" name="submit" value="Search">
			</form>
		
			<table>
				<tr>
					<th><a href="?orderBy=employee_id">ID </a></th>
					<th><a href="?orderBy=last_name">Last Name</a></th>
					<th><a href="?orderBy=first_name">First Name</a></th>
					<th><a href="?orderBy=street_address">Street Address</a></th>
					<th><a href="?orderBy=city">City</a></th>
					<th><a href="?orderBy=state">State</a></th>
					<th><a href="?orderBy=zip">Zip</a></th>
					<th><a href="?orderBy=email">Email</a></th>
					<th><a href="?orderBy=phone">Phone</a></th>
				{foreach from=$data item=item key=key}
				</tr>
				<tr>
					<td>{$item.employee_id}</td>
					<td>{$item.last_name}</td>
					<td>{$item.first_name}</td>
					<td>{$item.street_address}</td>
					<td>{$item.city}</td>
					<td>{$item.state}</td>
					<td>{$item.zip}</td>
					<td>{$item.email}</td>
					<td>{$item.phone}</td>
				</tr>
				{/foreach}
			</table>
		
			<span class="fa-stack fa-lg">
				<i class="fa fa-circle fa-stack-1x" aria-hidden="true"></i>
				<i class="fa fa-plus-circle fa-stack-2x" aria-hidden="true"></i>
			</span>Add Employee
			
		</div>
		
	</div>
	
</div>
</div>
