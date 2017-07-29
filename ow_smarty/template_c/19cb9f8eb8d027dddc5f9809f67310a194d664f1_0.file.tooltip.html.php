<?php
/* Smarty version 3.1.31, created on 2017-07-26 05:32:04
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\decorators\tooltip.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59788bc403a8a4_12552640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19cb9f8eb8d027dddc5f9809f67310a194d664f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\decorators\\tooltip.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59788bc403a8a4_12552640 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="ow_tooltip <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['addClass'])) {?> <?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];
}?>">
    <div class="ow_tooltip_tail">
        <span></span>
    </div>
    <div class="ow_tooltip_body">
        <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

    </div>
</div><?php }
}
