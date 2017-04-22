{include file= './nav.tpl'}
{include file= './footer.tpl'}

	<div class="row">
		
		<div id="main-body" class="col-xs-12">
			
			{foreach from=$data item=item key=key}
				{$item.customer_id}
				{$item.last_name}
				{$item.first_name}
				{$item.street_address}
				{$item.city}
				{$item.state}
				{$item.zip}
				{$item.email}
				{$item.phone}
			{/foreach}
			
		</div>
		
	</div>
	
</div>
</div>
