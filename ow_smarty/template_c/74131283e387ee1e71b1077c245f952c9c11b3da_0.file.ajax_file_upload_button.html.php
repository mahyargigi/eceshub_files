<?php
/* Smarty version 3.1.31, created on 2017-08-05 03:37:21
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\components\ajax_file_upload_button.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59859fe1713d09_61790329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74131283e387ee1e71b1077c245f952c9c11b3da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\components\\ajax_file_upload_button.html',
      1 => 1468060280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59859fe1713d09_61790329 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
?>
<span class="ow_button" style="float: right;">
    <span class=" ow_ic_add">
        <input type="button" value='<?php echo smarty_function_text(array('key'=>"base+upload"),$_smarty_tpl);?>
' id="add-new-photo-album" class="ow_ic_add" onclick="javascript: <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
();" />
    </span>
</span><?php }
}
