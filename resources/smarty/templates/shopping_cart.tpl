<div id="cart" class="col-xs-4 col-md-3">
		Shopping Cart
		{foreach from=$data item=item key=key}
			{$item.film_title}
			{$item.film_price}
		{/foreach}
	</div>
</div>
</div>