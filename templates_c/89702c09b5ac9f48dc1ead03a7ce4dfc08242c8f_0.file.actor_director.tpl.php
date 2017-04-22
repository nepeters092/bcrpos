<?php
/* Smarty version 3.1.30, created on 2017-04-19 18:33:20
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/actor_director.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7f3c05cfd84_84881421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89702c09b5ac9f48dc1ead03a7ce4dfc08242c8f' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/actor_director.tpl',
      1 => 1492644795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58f7f3c05cfd84_84881421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<div class="row">
		
		<div id="main-body" class="actor-director-body col-xs-12">
		
			<div class="row">
			
				<div class="col-xs-12">
					To add actors and directors to the film entry, complete the form below: <br /> 
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
						<strong>Film ID:</strong> <?php echo $_smarty_tpl->tpl_vars['item']->value['film_id'];?>
 <br />
						<strong>Title:</strong> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
 <br />
						<strong>Release Year:</strong> <?php echo $_smarty_tpl->tpl_vars['item']->value['release_year'];?>
 <br />
						<strong>Genre:</strong> <?php echo $_smarty_tpl->tpl_vars['item']->value['genre'];?>
 <br />
						<strong>Rental Category:</strong> <?php echo $_smarty_tpl->tpl_vars['item']->value['rental_category'];?>
 <br />
						<strong>Director(s):</strong> <?php echo $_smarty_tpl->tpl_vars['item']->value['director_name'];?>
 <br />
						<strong>Actor(s):</strong> <?php echo $_smarty_tpl->tpl_vars['item']->value['actor_name'];?>
 <br />
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					
					<form action="#" method="post">
						Actor:<br /> <input type="text" name="actor" placeholder="e.g., John Doe"> <br />
						<input type="submit" name="add" value="Submit"> <br />
					</form>
					<form action="#" method="post">
						Director:<br /> <input type="text" name="director" placeholder="e.g., John Doe"> <br />
						<input type="submit" name="addDir" value="Submit"> <br />
					</form>
					<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
 <br />
					<a href="/movies.php">Done</a>
				</div>
				
			</div>
		
		</div>
		
	</div>

</div><?php }
}
