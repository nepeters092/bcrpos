{include file= './nav.tpl'}
{include file= './footer.tpl'}
	
	<div class="row">
		
		<div id="main-body" class="advanced-search-body col-xs-12">
		
			<div class="row">
			
				<div id="tr-form-container" class="col-xs-12 col-md-2">
					<p style="margin:10px 0"><strong>Complete at least one field:</strong></p>
					<form action="" method="post" id="transaction-search">
						<div class="form-label">Film ID</div><input class="tr-text-input" type="text" name="filmId"  /><br />
						<div class="form-label">Film Title</div><input class="tr-text-input" type="text" name="filmTitle" /><br />
						Genre:<br />
						<select name="genre" id="genre" name="genre">
							<option value="">Select One</option>
							<option value="action">Action</option>
							<option value="comedy">Comedy</option>
							<option value="documentary">Documentary</option>
							<option value="drama">Drama</option>
							<option value="family">Family</option>
							<option value="horror">Horror</option>
							<option value="fantasy">Fantasy</option>
							<option value="romance">Romance</option>
							<option value="scifi">SciFi</option
							<option value="thriller">Thriller</option>
							<option value="uncat">Uncategorized</option>
						</select> <br />
						Rental Category: <br />
						<select id="rentalCat" name="rentalCat">
							<option value="">Select One</option>
							<option value="crel">Current Release</option>
							<option value="pop">Popular</option>
							<option value="chit">Current Hit</option>
							<option value="reg">Regular</option>
						</select> <br />
						<input type="checkbox" name="isRented"> Rented <br />
						<input id="tr-submit" type="submit" name="submit" value="Search" />
					
					
					</form>
				</div>
				
				<div style="overflow-x:auto; padding: 10px;" id="tr-result-container" class="col-xs-12 col-md-10">
					{$msg}
					{if !empty($data)}
						<div id="tr-result-title">
							<strong>Results</strong>
						</div>
						<table>
						<tr>
							<th>#</th>
							<th>Title</th>
							<th>Director(s)</th>
							<th>Year</th>
							<th>Genre</th>
							<th>Rental Category</th>
							<th>Actor(s)</th>
						</tr>
						{foreach from=$data item=item key=key}
								<tr>
									<td id="film-id-td">{$item.film_id}</td>
									<td>{$item.title}</td>
									<td>{$item.director}</td>
									<td>{$item.release_year}</td>
									<td>{$item.genre}</td>
									<td>{$item.rental_category}</td>
									<td>{$item.actor}</td>
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
