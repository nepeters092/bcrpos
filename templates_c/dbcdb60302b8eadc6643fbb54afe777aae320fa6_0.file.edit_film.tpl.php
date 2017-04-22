<?php
/* Smarty version 3.1.30, created on 2017-04-19 18:55:54
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/edit_film.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7f90af1cc01_28782455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbcdb60302b8eadc6643fbb54afe777aae320fa6' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/edit_film.tpl',
      1 => 1492646150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58f7f90af1cc01_28782455 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="row">
		
		<div id="main-body" class="col-xs-12">
		
			<form id="editMovieForm" action="#" method="post">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
				Title:<br /> <input type="text" name="title" value='<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
' > <br />
				Director:
				<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dirData']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
					<li><?php echo $_smarty_tpl->tpl_vars['item']->value['director_name'];?>
 - <a href="/delete_dir.php?director_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['director_id'];?>
">Delete</a></li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</ul> 
				Release Year:<br /> <input type="text" name="releaseYear" value='<?php echo $_smarty_tpl->tpl_vars['item']->value['release_year'];?>
'> <br />
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
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actorData']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
						<li><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 - <a href="/delete_act.php?actor_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['actor_id'];?>
">Delete</a></li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</form>
			<p id="add-director"><a href="/actor_director.php" id="addDirector" name="addDirector">Add Actor(s) and Director(s)</a></p>
			<a href="/movies.php">Return</a>
			<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>


		</div>
		
	</div>
	
</div>
</div>
<?php }
}
