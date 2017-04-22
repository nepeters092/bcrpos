<?php
/* Smarty version 3.1.30, created on 2017-04-20 09:05:43
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/add_film.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f8c037605be9_03078769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76550092251860a914ceb21aa6bd2c8293c38e06' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/add_film.tpl',
      1 => 1492697140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58f8c037605be9_03078769 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
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
					<?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

				</form><br />

					
				</div>
				
				
			</div>
		
		</div>
		
	</div>

</div><?php }
}
