{include file= './header.tpl'}
{include file= './nav.tpl'}
{include file= './footer.tpl'}

	<div class="row">
		
		<div id="main-body" class="col-xs-12">
			
			<form action="search_movie.php" method="post">
				<input type="text" name="search" value="" placeholder="Search Movies">
				<input type="submit" name="submit" value="Search">
			</form>
		
				<table>
						<tr>
							<th><a href="?orderBy=film_id">ID </a></th>
							<th><a href="?orderBy=title">Title</a></th>
							<th><a href="?orderBy=genre">Genre</a></th>
							<th><a href="?orderBy=release_year">Release Year</a></th>
							<th><a href="?orderBy=rental_category">Rental Category</a></th>
						</tr>
						{foreach from=$data item=item key=key}
							<tr>
								<td>{$item.film_id}</td>
								<td>{$item.title}</td>
								<td>{$item.genre}</td>
								<td>{$item.release_year}</td>
								<td>{$item.rental_category}</td>
							</tr>
						{/foreach}
				</table>
		
			<span class="fa-stack fa-lg">
				<i class="fa fa-circle fa-stack-1x" aria-hidden="true"></i>
				<i class="fa fa-plus-circle fa-stack-2x" aria-hidden="true"></i>
			</span>Add Employee
			
		</div>
		
	</div>
	
</div>
</div>
