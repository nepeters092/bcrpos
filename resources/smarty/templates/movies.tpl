{include file= './nav.tpl'}
{include file= './footer.tpl'}

	<div class="row">
		
		<div id="main-body" class="movie-body col-xs-12">
		
			<div id="movie-search-row" class="row">
				<div class="col-xs-12">
					<div id="movie-search-form">
						<h4>Latest Movies</h4>
						<form action="" method="post">
							<input type="text" name="search" value="" placeholder="Search Movies (enter film ID or title)"> 
							<input type="submit" name="submit" value="Search"> {$backButton} <a href="/advanced_movie.php" style="margin-left: 5px">Advanced Search</a>
						</form>
						{$msg}
						<a href="/add_film.php"><span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-1x" aria-hidden="true"></i>
							<i class="fa fa-plus-circle fa-stack-2x" aria-hidden="true"></i>
						</span></a>
					</div>
				</div>
			</div> 
			<div style="overflow-x:auto;">
				<table>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Director(s)</th>
							<th>Genre</th>
							<th>Release Year</th>
							<th>Actor(s)</th>
							<th></th>
						</tr>
						{foreach from=$data item=item key=key}
							<tr>
								<td>{$item.film_id}</td>
								<td><span data-toggle="tooltip" title='{$item.title}'>{$item.title}</span></td>
								<td><span data-toggle="tooltip" title='{$item.director_name}'>{$item.director_name}</span></td>
								<td>{$item.genre}</td>
								<td>{$item.release_year}</td>
								<td><span data-toggle="tooltip" title='{$item.actor_name}'>{$item.actor_name}</span></td>
								<td><a href="/edit_film.php?film_id={$item.film_id}">Edit</a></td>	
							</tr>
						{/foreach}
				</table>
				<div class="page-numbering">
					{if !empty($last)}
					<div>Page {$pagenum} of {$last}</div>
					{/if}
					<div>{if $pagenum == 1}
					{else} <span class="page-link">{$firstLink}</span> <span class="page-link">{$prevLink}</span> <i class="fa fa-ellipsis-h" aria-hidden="true"></i> 
					{/if}
					{if $pagenum == $last}
					{else} <span class="page-link">{$nextLink}</span> <span class="page-link">{$lastLink}</span>
					{/if}</div>
				</div>
			</div>
		</div>
		
	</div>
	
</div>
</div>
