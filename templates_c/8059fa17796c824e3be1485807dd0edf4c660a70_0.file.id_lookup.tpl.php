<?php
/* Smarty version 3.1.30, created on 2017-03-19 18:19:43
  from "C:\wamp64\www\resources\smarty\templates\id_lookup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cf120f9a9018_29674288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8059fa17796c824e3be1485807dd0edf4c660a70' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\id_lookup.tpl',
      1 => 1489965580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58cf120f9a9018_29674288 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<div class="row">
		
		<div id="main-body" class="col-xs-12">
		
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
				
				<strong>ID</strong>: <?php echo $_smarty_tpl->tpl_vars['item']->value['film_id'];?>
 <br />
				<strong>Title</strong>: <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
 <br />
				<strong>Genre</strong>: <?php echo $_smarty_tpl->tpl_vars['item']->value['genre'];?>
 <br />
				<strong>Release Year</strong>: <?php echo $_smarty_tpl->tpl_vars['item']->value['release_year'];?>
 <br />
				<strong>Price</strong>: <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 <br />
					
				<a href="cart_update.php">Add</a>
				
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			
			<p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
		
		</div>
		
	</div>

</div><?php }
}
