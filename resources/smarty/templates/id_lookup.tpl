{include file= './nav.tpl'}
{include file= './footer.tpl'}
	
	<div class="row">
		
		<div id="main-body" class="col-xs-12">
		
			{foreach from=$data item=item key=key}
				
				<strong>ID</strong>: {$item.film_id} <br />
				<strong>Title</strong>: {$item.title} <br />
				<strong>Genre</strong>: {$item.genre} <br />
				<strong>Release Year</strong>: {$item.release_year} <br />
				<strong>Price</strong>: {$item.price} <br />
					
				<a href="cart_update.php">Add</a>
				
			{/foreach}
			
			<p>{$msg}</p>
		
		</div>
		
	</div>

</div>