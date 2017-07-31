<?php
/* Smarty version 3.1.31, created on 2017-07-31 09:29:12
  from "C:\xampp\htdocs\eceshub\ow_plugins\addskills\views\controllers\add_upload.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597f5ad8276f42_03959578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9dcfa86c81d90abdccde9a172530d1e9bfad1f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\addskills\\views\\controllers\\add_upload.html',
      1 => 1501518519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597f5ad8276f42_03959578 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.submit.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>'add_skills'));
$_block_repeat=true;
echo smarty_block_form(array('name'=>'add_skills'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

<table class="ow_table_1 ow_form ow_automargin" style="width: 400px;">
    <!--<tr class="ow_alt1">-->
        <!--<td class="ow_value"><?php echo smarty_function_input(array('name'=>'file'),$_smarty_tpl);?>
</td>-->
    <!--</tr>-->
    <!--<tr>-->
        <!--<td class="ow_center" colspan="2"><?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_button ow_ic_save'),$_smarty_tpl);?>
</td>-->
    <!--</tr>-->
</table>
<?php $_block_repeat=false;
echo smarty_block_form(array('name'=>'add_skills'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
