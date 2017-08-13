<?php
/* Smarty version 3.1.31, created on 2017-08-12 05:59:43
  from "C:\xampp\htdocs\eceshub\ow_plugins\jobads\views\controllers\base_newad.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598efbbf81a639_88893566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '205a9e38e47ec8b27f66c2b3548eab3ced2c791e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\jobads\\views\\controllers\\base_newad.html',
      1 => 1502308706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598efbbf81a639_88893566 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.submit.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>'ad_form'));
$_block_repeat=true;
echo smarty_block_form(array('name'=>'ad_form'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

<table class="ow_table_1 ow_form ow_automargin ow_superwide">
    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'image'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'image'),$_smarty_tpl);?>
</td>
    </tr>
    <tr class="ow_alt2">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'description'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'description'),$_smarty_tpl);?>
</td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['hasStartup']->value == true) {?>
        <tr class="ow_alt2">
            <td class="ow_label"><?php echo smarty_function_label(array('name'=>'startup'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo smarty_function_input(array('name'=>'startup'),$_smarty_tpl);?>
</td>
        </tr>
    <?php }?>
    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'skills'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'skills'),$_smarty_tpl);?>

        <br>
        <div class="needed_skills">
            <?php echo smarty_function_input(array('name'=>'chosen_skills'),$_smarty_tpl);?>

        </div>
        </td>
    </tr>
    <tr class="ow_alt1">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'email'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'email'),$_smarty_tpl);?>
 <?php echo smarty_function_error(array('name'=>'email'),$_smarty_tpl);?>
</td>
    </tr>
    <tr>
        <td class="ow_center" colspan="2"><?php echo smarty_function_submit(array('name'=>'send','class'=>'ow_button '),$_smarty_tpl);?>
</td>
    </tr>
</table>
<?php $_block_repeat=false;
echo smarty_block_form(array('name'=>'ad_form'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
