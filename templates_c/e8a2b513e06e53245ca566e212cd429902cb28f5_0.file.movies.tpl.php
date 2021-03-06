<?php
/* Smarty version 3.1.30, created on 2017-04-19 15:54:10
  from "C:\wamp64\www\resources\smarty\templates\movies.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7ce7234b987_59576493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8a2b513e06e53245ca566e212cd429902cb28f5' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\movies.tpl',
      1 => 1492635248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58f7ce7234b987_59576493 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="row">
		
		<div id="main-body" class="movie-body col-xs-12">
		
			Latest Movies
			<div id="movie-search-row" class="row">
				<div class="col-xs-12">
					<div id="movie-search-form">
						<form action="" method="post">
							<input type="text" name="search" value="" placeholder="Search Movies (enter film ID or title)"> 
							<input type="submit" name="submit" value="Search"> <?php echo $_smarty_tpl->tpl_vars['backButton']->value;?>

						</form>
						<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

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
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['item']->value['film_id'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['item']->value['director_name'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['item']->value['genre'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['item']->value['release_year'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['item']->value['actor_name'];?>
</td>
								<td><a href="/edit_film.php?film_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['film_id'];?>
">Edit</a></td>	
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</table>
				<div class="page-numbering">
					<?php if (!empty($_smarty_tpl->tpl_vars['last']->value)) {?>
					<div>Page <?php echo $_smarty_tpl->tpl_vars['pagenum']->value;?>
 of <?php echo $_smarty_tpl->tpl_vars['last']->value;?>
</div>
					<?php }?>
					<div><?php if ($_smarty_tpl->tpl_vars['pagenum']->value == 1) {?>
					<?php } else { ?> <span class="page-link"><?php echo $_smarty_tpl->tpl_vars['firstLink']->value;?>
</span> <span class="page-link"><?php echo $_smarty_tpl->tpl_vars['prevLink']->value;?>
</span> <i class="fa fa-ellipsis-h" aria-hidden="true"></i> 
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['pagenum']->value == $_smarty_tpl->tpl_vars['last']->value) {?>
					<?php } else { ?> <span class="page-link"><?php echo $_smarty_tpl->tpl_vars['nextLink']->value;?>
</span> <span class="page-link"><?php echo $_smarty_tpl->tpl_vars['lastLink']->value;?>
</span>
					<?php }?></div>
				</div>
			</div>
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
