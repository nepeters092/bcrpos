{include file= './nav.tpl'}
{include file= './footer.tpl'}
	
	<div class="row">
		
		<div id="main-body" class="col-xs-12">
			
			<div id="revenue-report-container">
				<h4>Daily Revenue</h4>
				<table id="customer-results">
					<tr>
						<th>Date</th>
						<th>Total</th>
					</tr>
					{foreach from=$data item=item key=key}
					<tr>
						<td>{$item.date}</a></td>
						<td>{$item.total}</td>	
					</tr>
						{/foreach}
					</table>
				<div>
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
