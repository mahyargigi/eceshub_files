<?php
/* Smarty version 3.1.31, created on 2017-07-22 00:43:52
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\mobile\views\components\top_menu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59730238b25cb6_45724919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7838693c91030a7f9de9627901b4032af104607' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\mobile\\views\\components\\top_menu.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59730238b25cb6_45724919 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="owm_nav_left_top">
    <ul class="owm_nav_left">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <li class="owm_nav_left_item">
                <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['addUrl'])) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['addUrl'];?>
" class="owm_nav_left_item_add"></a>
                <?php } elseif (!empty($_smarty_tpl->tpl_vars['item']->value['addId'])) {?>
                    <a href="javascript://" class="owm_nav_left_item_add" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['addId'];?>
"></a>
                <?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" class="owm_nav_left_item_icon"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span></a>
            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </ul>
</nav><?php }
}
