{include file= './nav.tpl'}
{include file= './footer.tpl'}

	<div class="row">
		
		<div id="main-body" class="col-xs-12">
			
			<form id="editEmpForm" action="#" method="post">
			{foreach from=$data item=item key=key}
				<strong>Employee ID:</strong> {$item.employee_id} <br />
				Last Name:<br /> <input type="text" name="lastName" value='{$item.last_name}'> <br />
				First name:<br /> <input type="text" name="firstName" value='{$item.first_name}'> <br />
				Address:<br /> <input type="text" name="streetAddr" value='{$item.street_address}'> <br />
				City:<br /> <input type="text" name="city" value='{$item.city}'> <br />
				State:<br /> <input type="text" name="state" value='{$item.state}'> <br />
				Zip:<br /> <input type="text" name="zip" value='{$item.zip}'> <br />
				Email:<br /> <input type="text" name="email" value='{$item.email}'> <br />
				Phone:<br /> <input type="text" name="phone" value='{$item.phone}'> <br />
				<input type="submit" name="editEmployee" value="Submit" />
			{/foreach}
			</form>
			<a href="/employees.php">Return</a>
			{$msg}
			
		</div>
		
	</div>
	
</div>
</div>
