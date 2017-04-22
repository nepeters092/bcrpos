<?php
/* Smarty version 3.1.30, created on 2017-04-20 10:27:50
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/advanced_movie.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f8d376ee9c57_76408410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ad4938be7d5b7fde8b097b95382434cb8ef568e' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/advanced_movie.tpl',
      1 => 1492702068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58f8d376ee9c57_76408410 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
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
					<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

					<?php if (!empty($_smarty_tpl->tpl_vars['data']->value)) {?>
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
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
								<tr>
									<td id="film-id-td"><?php echo $_smarty_tpl->tpl_vars['item']->value['film_id'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['director'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['release_year'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['genre'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['rental_category'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['actor'];?>
</td>
								</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					<?php }?>
					
					</table>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
