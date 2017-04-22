<?php
/* Smarty version 3.1.30, created on 2017-03-31 09:59:38
  from "C:\wamp64\www\resources\smarty\templates\customer_confirm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58de6eda2a81e7_87183692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '533e031b1945ff9a7feb84e49e2f4a23aa966e8a' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\customer_confirm.tpl',
      1 => 1490971989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58de6eda2a81e7_87183692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<div class="row">
		
		<div id="main-body" class="col-xs-12">
		
			The following information has been added: <br />
			<strong>First Name</strong>: <?php echo $_smarty_tpl->tpl_vars['firstName']->value;?>
 <br />
			<strong>Last Name</strong>: <?php echo $_smarty_tpl->tpl_vars['lastName']->value;?>
 <br />
			<strong>Email</strong>: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
 <br />
			<strong>Phone</strong>: <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
 <br />
			<strong>Street Address</strong>: <?php echo $_smarty_tpl->tpl_vars['streetAddr']->value;?>
 <br />
			<strong>City</strong>: <?php echo $_smarty_tpl->tpl_vars['city']->value;?>
 <br />
			<strong>State</strong>: <?php echo $_smarty_tpl->tpl_vars['state']->value;?>
 <br />
			<strong>Zip</strong>: <?php echo $_smarty_tpl->tpl_vars['zip']->value;?>
 <br />
			Edit <br /> Done
		
		</div>
		
	</div>

</div><?php }
}
