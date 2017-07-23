<?php
/* Smarty version 3.1.31, created on 2017-07-22 00:43:40
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\controllers\user_list_index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5973022c5fe161_22839221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '038ad74c5316b31d8e85d169e42f77cc5bd3c397' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\controllers\\user_list_index.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5973022c5fe161_22839221 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_add_content')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.add_content.php';
if (isset($_smarty_tpl->tpl_vars['menu']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>
	
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['listType']->value)) {
echo smarty_function_add_content(array('key'=>"base.content.user_list_top",'listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);
}?>

<?php echo $_smarty_tpl->tpl_vars['cmp']->value;
}
}
