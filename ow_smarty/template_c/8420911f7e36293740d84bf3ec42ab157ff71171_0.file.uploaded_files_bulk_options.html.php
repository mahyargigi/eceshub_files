<?php
/* Smarty version 3.1.31, created on 2017-08-05 03:37:21
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\admin\views\components\uploaded_files_bulk_options.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59859fe16079e2_50544186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8420911f7e36293740d84bf3ec42ab157ff71171' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\admin\\views\\components\\uploaded_files_bulk_options.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59859fe16079e2_50544186 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
?>
<ul class="ow_bl clearfix ow_small ow_left">
    <li>
        <a href="javascript://" id="<?php echo $_smarty_tpl->tpl_vars['showId']->value;?>
"><?php echo smarty_function_text(array('key'=>"admin+select_mode"),$_smarty_tpl);?>
</a>
    </li>
</ul>
<div id="<?php echo $_smarty_tpl->tpl_vars['containerId']->value;?>
" style="display: none; float: left;">
    <ul class="ow_bl clearfix ow_small ow_left">
        <li>
            <a href="javascript://" id="<?php echo $_smarty_tpl->tpl_vars['deleteId']->value;?>
" class="ow_mild_red delete"><?php echo smarty_function_text(array('key'=>"admin+delete_selected"),$_smarty_tpl);?>
</a>
        </li>
    </ul>
    <ul class="ow_bl clearfix ow_small ow_left">
        <li>
            <a href="javascript://" id="<?php echo $_smarty_tpl->tpl_vars['backId']->value;?>
"><?php echo smarty_function_text(array('key'=>"admin+exit_select_mode"),$_smarty_tpl);?>
</a>
        </li>
    </ul>
</div><?php }
}
