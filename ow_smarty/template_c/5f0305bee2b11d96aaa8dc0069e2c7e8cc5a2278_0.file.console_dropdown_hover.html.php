<?php
/* Smarty version 3.1.31, created on 2017-08-08 08:31:00
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\components\console_dropdown_hover.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5989d934844765_04615851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f0305bee2b11d96aaa8dc0069e2c7e8cc5a2278' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\components\\console_dropdown_hover.html',
      1 => 1473054010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5989d934844765_04615851 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="javascript://" <?php if (!empty($_smarty_tpl->tpl_vars['iconSrc']->value)) {?> style="border-radius: 5px;max-width: 28px; max-height: 28px;background-position: center center !important;background-size: contain;background-image: url('<?php echo $_smarty_tpl->tpl_vars['iconSrc']->value;?>
')" <?php }?> class="ow_console_item_link"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</a>
<span class="ow_console_more"></span><?php }
}
