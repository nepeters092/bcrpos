{include file= './nav.tpl'}
{include file= './footer.tpl'}
	
	<div class="row">
		
		<div id="main-body" class="emp-body col-xs-12">
			<div id="employee-search-form">
				<form action="" method="post">
					<input type="text" name="search" value="" placeholder="Search Employees (enter Employee ID or phone number)">
					<input type="submit" name="submit" value="Search">
					{$backButton}
				</form>
				{$msg}
			</div>
		
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
					<th></th>
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
					<td><a href="/edit_employee.php?employee_id={$item.employee_id}">Edit</a></td>
				</tr>
				{/foreach}
			</table>
			
		</div>
		
	</div>
	
</div>
</div>
