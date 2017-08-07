<?php
/* Smarty version 3.1.31, created on 2017-08-07 11:28:22
  from "C:\xampp\htdocs\eceshub\ow_themes\iissocialcity\decorators\button.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5988b1462ea986_93964472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d20d7ea4a7d0bdbaed98767ee693a0ec52643f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_themes\\iissocialcity\\decorators\\button.html',
      1 => 1472299808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5988b1462ea986_93964472 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
?>

<span class="ow_button"><span class="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['data']->value['class'];
}?>"><input type="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['type']) && $_smarty_tpl->tpl_vars['data']->value['type'] == 'submit') {?>submit<?php } else { ?>button<?php }?>"  value="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['langLabel'])) {
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
