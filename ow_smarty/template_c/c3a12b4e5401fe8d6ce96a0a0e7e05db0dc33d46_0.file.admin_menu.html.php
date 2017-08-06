<?php
/* Smarty version 3.1.31, created on 2017-08-06 05:48:23
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\admin\views\components\admin_menu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59871017b54be4_15942984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3a12b4e5401fe8d6ce96a0a0e7e05db0dc33d46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\admin\\views\\components\\admin_menu.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59871017b54be4_15942984 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
?>
<ul class="<?php if ($_smarty_tpl->tpl_vars['subMenuClass']->value) {
echo $_smarty_tpl->tpl_vars['subMenuClass']->value;
} else { ?>ow_admin_submenu_hover<?php }?>">
    <li class="ow_admin_submenu_title"><?php echo smarty_function_text(array('key'=>"admin+sidebar_".((string)$_smarty_tpl->tpl_vars['category']->value)),$_smarty_tpl);?>
</li>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <li <?php if ($_smarty_tpl->tpl_vars['item']->value['active']) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['new_window'])) {?> target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a></li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</ul><?php }
}
