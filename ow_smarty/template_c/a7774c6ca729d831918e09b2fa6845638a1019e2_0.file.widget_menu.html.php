<?php
/* Smarty version 3.1.31, created on 2017-07-22 00:43:51
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\mobile\views\components\widget_menu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597302375a18e2_35030802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7774c6ca729d831918e09b2fa6845638a1019e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\mobile\\views\\components\\widget_menu.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597302375a18e2_35030802 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="owm_box_menu owm_float_right">
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'tab');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
?><a href="javascript://" id="<?php echo $_smarty_tpl->tpl_vars['tab']->value['id'];?>
" class="owm_box_menu_item <?php if (isset($_smarty_tpl->tpl_vars['tab']->value['active']) && $_smarty_tpl->tpl_vars['tab']->value['active']) {?> owm_box_menu_item_active<?php }?>"><span><?php echo $_smarty_tpl->tpl_vars['tab']->value['label'];?>
</span></a><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</div>
<?php }
}
