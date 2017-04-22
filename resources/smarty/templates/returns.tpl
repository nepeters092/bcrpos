{include file= './nav.tpl'}
{include file= './footer.tpl'}
	
	<div class="row">
		
		<div style="padding-top: 10px" id="main-body" class="return-container col-xs-12">
		
			<form method="post" action="">
				Enter film ID below: <br />
				<input style="margin-bottom:5px" type="text" name="returnId" placeholder="Film ID" /> <br />
				<input style="margin-bottom:5px" type="submit" name="return" value="Submit" /> <br />
				{$errors} {$msg} {$confirm}
				<br />
				
				{if !empty($filmTitle)}
					Mark <strong>{$filmTitle}</strong> as returned? <br />
					<form action="" method="post">
						<input type="submit" name="yes" value="Yes" />
						<input type="submit" name="cancel" value="Cancel" />
					</form>
				{/if}
			
			</form>
		
		</div>
		
	</div>

</div>