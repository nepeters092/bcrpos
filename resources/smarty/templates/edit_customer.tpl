{include file= './nav.tpl'}
{include file= './footer.tpl'}

	<div class="row">
		
		<div id="main-body" class="edit-customer-body col-xs-12">
			
			<form id="editCustForm" action="#" method="post">
			{foreach from=$data item=item key=key}
				<strong>Customer ID:</strong> {$item.customer_id}</span><br />
				Last Name:<br /> <input type="text" name="lastName" value='{$item.last_name}'> <br />
				First name:<br /> <input type="text" name="firstName" value='{$item.first_name}'> <br />
				Address:<br /> <input type="text" name="streetAddr" value='{$item.street_address}'> <br />
				City:<br /> <input type="text" name="city" value='{$item.city}'> <br />
				State:<br /> <input type="text" name="state" value='{$item.state}'> <br />
				Zip:<br /> <input type="text" name="zip" value='{$item.zip}'> <br />
				Email:<br /> <input type="text" name="email" value='{$item.email}'> <br />
				Phone:<br /> <input type="text" name="phone" value='{$item.phone}'> <br />
				<input style="margin-top:10px; width: 10vw;" type="submit" name="editCustomer" value="Submit" />
			{/foreach}
			</form>
			<a href="/customers.php">Return</a>
			{$msg}
			
		</div>
		
	</div>
	
</div>
</div>
