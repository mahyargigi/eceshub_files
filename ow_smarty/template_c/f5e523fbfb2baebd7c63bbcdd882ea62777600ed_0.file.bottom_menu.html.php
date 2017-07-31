<?php
/* Smarty version 3.1.31, created on 2017-07-31 09:29:12
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\components\bottom_menu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597f5ad88b5c44_52816501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5e523fbfb2baebd7c63bbcdd882ea62777600ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\components\\bottom_menu.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597f5ad88b5c44_52816501 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ow_footer_menu">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, NULL, 'bottom_menu', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_bottom_menu']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_bottom_menu']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_bottom_menu']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_bottom_menu']->value['total'];
?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['active']) {?> class="active"<?php }
if ($_smarty_tpl->tpl_vars['item']->value['new_window']) {?> target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_bottom_menu']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_bottom_menu']->value['last'] : null)) {?> | <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</div><?php }
}
