<?php
/* Smarty version 3.1.31, created on 2017-08-12 00:54:11
  from "C:\xampp\htdocs\eceshub\ow_plugins\startups\views\controllers\base_add_startup_news.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598eb423cf10f7_81099330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f5fd4c27b11560d29cec219d630f2967972eedb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\startups\\views\\controllers\\base_add_startup_news.html',
      1 => 1502446694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598eb423cf10f7_81099330 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.submit.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>'startup_news'));
$_block_repeat=true;
echo smarty_block_form(array('name'=>'startup_news'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    <table class="ow_table_1 ow_form ow_automargin ow_superwide">
        <tr class="ow_alt1">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'title'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'title'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="ow_alt1">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'description'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'description'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="ow_alt1">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'image'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'image'),$_smarty_tpl);?>
</td>
        </tr>
        <tr>
            <td class="ow_center" colspan="2"><?php echo smarty_function_submit(array('name'=>'send','class'=>'ow_button '),$_smarty_tpl);?>
</td>
        </tr>
    </table>
<?php $_block_repeat=false;
echo smarty_block_form(array('name'=>'startup_news'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
