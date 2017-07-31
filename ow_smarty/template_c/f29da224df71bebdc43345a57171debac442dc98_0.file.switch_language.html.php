<?php
/* Smarty version 3.1.31, created on 2017-07-31 09:29:12
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\components\switch_language.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597f5ad8a9cfc6_18610489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f29da224df71bebdc43345a57171debac442dc98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\components\\switch_language.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597f5ad8a9cfc6_18610489 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="ow_console_lang">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
        <li class="ow_console_lang_item" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['language']->value['url'];?>
';"><span class="<?php echo $_smarty_tpl->tpl_vars['language']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['label'];?>
</span></li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</ul><?php }
}
