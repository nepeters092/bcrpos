{include file= './nav.tpl'}
{include file= './footer.tpl'}
	
	<div class="row">
		
		<div id="main-body" class="col-xs-12">
		
			
			Scan Barcode or Enter Film ID to Begin.<br />
			<i class="fa fa-barcode fa-5x" aria-hidden="true"></i>
			
			<form action="id_lookup.php" method="post">
				<input type="text" name="search" value="" placeholder="Film ID">
				<input type="submit" name="submit" value="Submit">
			</form>
		
		</div>
		
	</div>

</div>