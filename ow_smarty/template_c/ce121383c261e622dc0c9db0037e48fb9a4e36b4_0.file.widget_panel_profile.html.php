<?php
/* Smarty version 3.1.31, created on 2017-08-06 05:52:51
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\controllers\widget_panel_profile.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5987112313d4f9_19777697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce121383c261e622dc0c9db0037e48fb9a4e36b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\controllers\\widget_panel_profile.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5987112313d4f9_19777697 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if ($_smarty_tpl->tpl_vars['isSuspended']->value && !$_smarty_tpl->tpl_vars['isAdminViewer']->value) {?>
	<?php echo smarty_function_text(array('key'=>"base+user_page_suspended"),$_smarty_tpl);?>

<?php } else { ?>
	<?php echo $_smarty_tpl->tpl_vars['profileActionToolbar']->value;?>

	<?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;?>

<?php }
}
}
