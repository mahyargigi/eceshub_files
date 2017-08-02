<?php
/* Smarty version 3.1.31, created on 2017-08-02 01:34:20
  from "C:\xampp\htdocs\eceshub\ow_plugins\photo\views\controllers\photo_view_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59818e8ca3a9a5_21651340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8322c5147040f257eb4e489e4f1ccda21226c6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\photo\\views\\controllers\\photo_view_list.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59818e8ca3a9a5_21651340 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_add_content')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.add_content.php';
if (!is_callable('smarty_function_component')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.component.php';
?>


<div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'photo.add_content.list.top','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['pageHead']->value;?>


<?php echo smarty_function_component(array('class'=>"PHOTO_CMP_PhotoList",'type'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>

<?php }
}
