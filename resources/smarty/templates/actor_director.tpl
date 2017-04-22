{include file= './nav.tpl'}
{include file= './footer.tpl'}
	
	<div class="row">
		
		<div id="main-body" class="actor-director-body col-xs-12">
		
			<div class="row">
			
				<div class="col-xs-12">
					To add actors and directors to the film entry, complete the form below: <br /> 
					{foreach from=$data item=item key=key}
						<strong>Film ID:</strong> {$item.film_id} <br />
						<strong>Title:</strong> {$item.title} <br />
						<strong>Release Year:</strong> {$item.release_year} <br />
						<strong>Genre:</strong> {$item.genre} <br />
						<strong>Rental Category:</strong> {$item.rental_category} <br />
						<strong>Director(s):</strong> {$item.director_name} <br />
						<strong>Actor(s):</strong> {$item.actor_name} <br />
					{/foreach}
					
					<form action="#" method="post">
						Actor:<br /> <input type="text" name="actor" placeholder="e.g., John Doe"> <br />
						<input type="submit" name="add" value="Submit"> <br />
					</form>
					<form action="#" method="post">
						Director:<br /> <input type="text" name="director" placeholder="e.g., John Doe"> <br />
						<input type="submit" name="addDir" value="Submit"> <br />
					</form>
					{$msg} <br />
					<a href="/movies.php">Done</a>
				</div>
				
			</div>
		
		</div>
		
	</div>

</div>