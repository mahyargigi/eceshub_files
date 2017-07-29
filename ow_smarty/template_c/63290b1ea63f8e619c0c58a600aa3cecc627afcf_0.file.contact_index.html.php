<?php
/* Smarty version 3.1.31, created on 2017-07-26 05:32:02
  from "C:\xampp\htdocs\eceshub\ow_plugins\contactus\views\controllers\contact_index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59788bc295a2c1_82461414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63290b1ea63f8e619c0c58a600aa3cecc627afcf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\contactus\\views\\controllers\\contact_index.html',
      1 => 1501062402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59788bc295a2c1_82461414 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.submit.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>'contact_form'));
$_block_repeat=true;
echo smarty_block_form(array('name'=>'contact_form'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

<table class="ow_table_1 ow_form ow_automargin ow_superwide">
    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'to'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'to'),$_smarty_tpl);
echo smarty_function_error(array('name'=>'to'),$_smarty_tpl);?>
</td>
    </tr>
    <tr class="ow_alt2">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'from'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'from'),$_smarty_tpl);
echo smarty_function_error(array('name'=>'from'),$_smarty_tpl);?>
</td>
    </tr>
    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'subject'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'subject'),$_smarty_tpl);
echo smarty_function_error(array('name'=>'subject'),$_smarty_tpl);?>
</td>
    </tr>
    <tr class="ow_alt2">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'message'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'message'),$_smarty_tpl);
echo smarty_function_error(array('name'=>'message'),$_smarty_tpl);?>
</td>
    </tr>
    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'captcha'),$_smarty_tpl);?>
</td>
        <td class="ow_value ow_center"><?php echo smarty_function_input(array('name'=>'captcha'),$_smarty_tpl);
echo smarty_function_error(array('name'=>'captcha'),$_smarty_tpl);?>
</td>
    </tr>
    <tr>
        <td class="ow_center" colspan="2"><?php echo smarty_function_submit(array('name'=>'send','class'=>'ow_button ow_ic_mail'),$_smarty_tpl);?>
</td>
    </tr>
</table>
<?php $_block_repeat=false;
echo smarty_block_form(array('name'=>'contact_form'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
