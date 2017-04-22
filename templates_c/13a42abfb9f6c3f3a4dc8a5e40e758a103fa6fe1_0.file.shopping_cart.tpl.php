<?php
/* Smarty version 3.1.30, created on 2017-03-19 17:26:22
  from "C:\wamp64\www\resources\smarty\templates\shopping_cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cf058eafaac2_12275139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13a42abfb9f6c3f3a4dc8a5e40e758a103fa6fe1' => 
    array (
      0 => 'C:\\wamp64\\www\\resources\\smarty\\templates\\shopping_cart.tpl',
      1 => 1489962365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cf058eafaac2_12275139 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="cart" class="col-xs-4 col-md-3">
		Shopping Cart
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
			<?php echo $_smarty_tpl->tpl_vars['item']->value['film_title'];?>

			<?php echo $_smarty_tpl->tpl_vars['item']->value['film_price'];?>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>
</div>
</div><?php }
}
