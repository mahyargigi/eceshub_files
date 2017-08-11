<?php
/* Smarty version 3.1.31, created on 2017-08-11 08:48:42
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\controllers\base_document_page404.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598dd1da8f2ca9_24110690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4d8d66b88a220d10e617c19059fd48f31b20203' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\controllers\\base_document_page404.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598dd1da8f2ca9_24110690 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!empty($_smarty_tpl->tpl_vars['base404RedirectMessage']->value)) {
echo $_smarty_tpl->tpl_vars['base404RedirectMessage']->value;
} else {
echo smarty_function_text(array('key'=>'base+base_document_404'),$_smarty_tpl);
}
}
}
