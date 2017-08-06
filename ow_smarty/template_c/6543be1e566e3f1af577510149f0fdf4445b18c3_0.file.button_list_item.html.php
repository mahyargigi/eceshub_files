<?php
/* Smarty version 3.1.31, created on 2017-08-06 05:48:23
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\decorators\button_list_item.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598710175d6ac1_56201282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6543be1e566e3f1af577510149f0fdf4445b18c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\decorators\\button_list_item.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598710175d6ac1_56201282 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
?>

<span class="ow_blitem<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['data']->value['class'];
}?>"><span><input type="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['type']) && $_smarty_tpl->tpl_vars['data']->value['type'] == 'submit') {?>submit<?php } else { ?>button<?php }?>"  value="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['langLabel'])) {
echo smarty_function_text(array('key'=>$_smarty_tpl->tpl_vars['data']->value['langLabel']),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['data']->value['label'];
}?>"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['buttonName'])) {?> name="<?php echo $_smarty_tpl->tpl_vars['data']->value['buttonName'];?>
"<?php }
if (!empty($_smarty_tpl->tpl_vars['data']->value['id'])) {?> id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"<?php }
if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['data']->value['class'];?>
"<?php }
if (!empty($_smarty_tpl->tpl_vars['data']->value['extraString'])) {
echo $_smarty_tpl->tpl_vars['data']->value['extraString'];
}?> <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['onclick'])) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['data']->value['onclick'];?>
"<?php }?> /></span></span><?php }
}
