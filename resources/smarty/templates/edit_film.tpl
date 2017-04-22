{include file= './nav.tpl'}
{include file= './footer.tpl'}

	<div class="row">
		
		<div id="main-body" class="col-xs-12">
		
			<form id="editMovieForm" action="#" method="post">
			{foreach from=$data item=item key=key}
				Title:<br /> <input type="text" name="title" value='{$item.title}' > <br />
				Director:
				<ul>
				{foreach from=$dirData item=item key=key}
					<li>{$item.director_name} - <a href="/delete_dir.php?director_id={$item.director_id}">Delete</a></li>
				{/foreach}
				</ul> 
				Release Year:<br /> <input type="text" name="releaseYear" value='{$item.release_year}'> <br />
				Genre:<br />
				<select name="genre" id="genre" name="genre">
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
				Actor(s): <br />
					<ul>
					{foreach from=$actorData item=item key=key}
						<li>{$item.name} - <a href="/delete_act.php?actor_id={$item.actor_id}">Delete</a></li>
					{/foreach}
					</ul>
				Rental Category: <br />
				<select id="rentalCat" name="rentalCat">
					<option value="crel">Current Release</option>
					<option value="pop">Popular</option>
					<option value="chit">Current Hit</option>
					<option value="reg">Regular</option>
				</select>
				<br /><br />
				<input type="submit" name="editCustomer" value="Submit" /> <br /><br />
			{/foreach}
			</form>
			<p id="add-director"><a href="/actor_director.php" id="addDirector" name="addDirector">Add Actor(s) and Director(s)</a></p>
			<a href="/movies.php">Return</a>
			{$msg}

		</div>
		
	</div>
	
</div>
</div>
