<?php
/* Smarty version 3.1.30, created on 2017-03-11 11:11:42
  from "C:\wamp64\www\resources\smarty\templates\movie_search.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c42fce2d95d4_87860582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea695224ccd4a9940461d06d467b4d828f7f912d' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\movie_search.tpl',
      1 => 1489252285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58c42fce2d95d4_87860582 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
								<td><?php echo $_smarty_tpl->tpl_vars['item']->value['genre'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['item']->value['release_year'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['item']->value['rental_category'];?>
</td>
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</table>
		
			<span class="fa-stack fa-lg">
				<i class="fa fa-circle fa-stack-1x" aria-hidden="true"></i>
				<i class="fa fa-plus-circle fa-stack-2x" aria-hidden="true"></i>
			</span>Add Employee
			
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
