<?php
/* Smarty version 3.1.30, created on 2017-04-19 17:26:50
  from "/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7e42aba7bf0_60806950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14700fa16c6e6cfb68d5bbccc9511a7554b4816c' => 
    array (
      0 => '/home4/nepeters092/bcr.nataliepeters.site/resources/smarty/templates/settings.tpl',
      1 => 1492640577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./nav.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_58f7e42aba7bf0_60806950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<div class="row">
		
		<div id="main-body" class="settings-body col-xs-12">
			
			<div class="row">
			
				<div class="col-xs-6">
					<h4>Account Settings:</h4>
					<form id="account-settings" action="#" method="post">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
						Last Name:<br /> <input type="text" name="lastName" value='<?php echo $_smarty_tpl->tpl_vars['item']->value['last_name'];?>
'> <br />
						First name:<br /> <input type="text" name="firstName" value='<?php echo $_smarty_tpl->tpl_vars['item']->value['first_name'];?>
'> <br />
						Email:<br /> <input type="text" name="email" value='<?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
'> <br />
						<input class="submit-button" type="submit" name="editAccount" value="Submit" />
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</form>
					<?php echo $_smarty_tpl->tpl_vars['note']->value;?>

				</div>
				
				<div class="col-xs-6">
					<h4>Security Settings:</h4>
					Change Password: <br />
					<form method="post" action="">
						<input type="password" name="oldpass1" placeholder="Current Password" /><br />
						<input type="password" name="oldpass2" placeholder="Confirm Password" /><br />
						<input type="password" name="newpass1" placeholder="New Password" /><br />
						<input type="password" name="newpass2" placeholder="Confirm New Password" /><br />
						<input class="submit-button" type="submit" name="changePass" value="Submit" />
					</form><br />
					<?php echo $_smarty_tpl->tpl_vars['errors']->value;
echo $_smarty_tpl->tpl_vars['msg']->value;?>
 <br /><br />
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>
</div>
<?php }
}
