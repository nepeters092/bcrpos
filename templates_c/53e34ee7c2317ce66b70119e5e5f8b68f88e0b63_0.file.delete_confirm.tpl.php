<?php
/* Smarty version 3.1.30, created on 2017-04-04 16:26:52
  from "C:\wamp64\www\resources\smarty\templates\delete_confirm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e40f9cd38085_65901371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53e34ee7c2317ce66b70119e5e5f8b68f88e0b63' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\delete_confirm.tpl',
      1 => 1491341204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58e40f9cd38085_65901371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="row">
		
		<div id="main-body" class="col-xs-12">
			
			Are you sure you wish to delete?
			
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
