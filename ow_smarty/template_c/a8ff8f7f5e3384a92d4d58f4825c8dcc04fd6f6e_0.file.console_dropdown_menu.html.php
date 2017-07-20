<?php
/* Smarty version 3.1.31, created on 2017-07-20 06:59:10
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\components\console_dropdown_menu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5970b72ed12f10_19186488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8ff8f7f5e3384a92d4d58f4825c8dcc04fd6f6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\components\\console_dropdown_menu.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5970b72ed12f10_19186488 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="ow_console_dropdown">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'sitems', false, 'section', 'cddm', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['sitems']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_cddm']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_cddm']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_cddm']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_cddm']->value['total'];
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sitems']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <li class="<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])) {
echo $_smarty_tpl->tpl_vars['item']->value['class'];
}?> ow_dropdown_menu_item ow_cursor_pointer" >
                <div class="ow_console_dropdown_cont">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a>
                </div>
            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_cddm']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cddm']->value['last'] : null)) {?>
            <li><div class="ow_console_divider"></div></li>
        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</ul><?php }
}
