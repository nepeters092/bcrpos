{include file= './nav.tpl'}
{include file= './footer.tpl'}
	
	<div class="row">
		
		<div id="main-body" class="col-xs-12">
		
			<div class="row">
				<form id="addMovie" method="post" action="#">
					To begin, complete the following fields: <br /><br />
					Movie Title:<br />
					<input type="text" name="title" placeholder="Movie Title" /><br />
					Release Year:<br />
					<input type="text" name="year" placeholder="19xx" /><br />
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
					Rental Category: <br />
					<select id="rentalCat" name="rentalCat">
						<option value="crel">Current Release</option>
						<option value="pop">Popular</option>
						<option value="chit">Current Hit</option>
						<option value="reg">Regular</option>
					</select> <br />
					<br />
					<input type="submit" name="submitNewCustForm" value="Submit" /><br />
					{$errors} {$msg}
				</form><br />

					
				</div>
				
				
			</div>
		
		</div>
		
	</div>

</div>