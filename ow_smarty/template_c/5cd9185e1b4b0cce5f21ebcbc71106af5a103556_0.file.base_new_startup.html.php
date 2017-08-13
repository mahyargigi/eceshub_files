<?php
/* Smarty version 3.1.31, created on 2017-08-12 06:13:29
  from "C:\xampp\htdocs\eceshub\ow_plugins\startups\views\controllers\base_new_startup.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598efef9163678_73499821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cd9185e1b4b0cce5f21ebcbc71106af5a103556' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\startups\\views\\controllers\\base_new_startup.html',
      1 => 1502102336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598efef9163678_73499821 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.submit.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>'startup_form'));
$_block_repeat=true;
echo smarty_block_form(array('name'=>'startup_form'), null, $_smarty_tpl, $_block_repeat);
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
        <tr class="ow_alt2">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'shortDesc'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'shortDesc'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="ow_alt1">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'image'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'image'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="ow_alt2">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'LongDesc'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'LongDesc'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="ow_alt1">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'website'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'website'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="ow_alt2">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'address'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'address'),$_smarty_tpl);?>
</td>
        </tr>
        <tr class="ow_alt1">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'telephoneNumber'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'telephoneNumber'),$_smarty_tpl);?>
</td>
        </tr>
        <tr>
            <td class="ow_center" colspan="2"><?php echo smarty_function_submit(array('name'=>'send','class'=>'ow_button '),$_smarty_tpl);?>
</td>
        </tr>
    </table>
<?php $_block_repeat=false;
echo smarty_block_form(array('name'=>'startup_form'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
