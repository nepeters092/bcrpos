<?php
/* Smarty version 3.1.30, created on 2017-03-06 17:38:55
  from "C:\wamp64\www\resources\smarty\templates\insert.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bdf30f8e80d2_29085260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '037dcd27705c5dcb100d546c689d820d4eed148e' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\insert.tpl',
      1 => 1488843533,
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
function content_58bdf30f8e80d2_29085260 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="data" class="col-xs-9 col-md-10">
	<form action="insert.php" method="post">
		First Name: <input type="text" name="first" value="" /><br />
		Last Name: <input type="text" name="last" value="" /><br />
		Street Address: <input type="text" name="addr" value="" /><br />
		City: <input type="text" name="city" value="" /><br />
		State: <input type="text" name="state" value="" /><br />
		Zip: <input type="text" name="zip" value="" /><br />
		Email: <input type="email" name="email" value="" /><br />
		Phone: <input type="tel" name="phone" value="" /><br />
		<br />
		<input type="submit" name="submit" value="Add Record" />
	</form>
</div>
</div>
</div>



<?php }
}
