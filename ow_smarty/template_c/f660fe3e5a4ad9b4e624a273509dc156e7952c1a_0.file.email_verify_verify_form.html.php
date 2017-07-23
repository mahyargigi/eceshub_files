<?php
/* Smarty version 3.1.31, created on 2017-07-22 00:43:11
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\controllers\email_verify_verify_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5973020f33ffb2_78999432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f660fe3e5a4ad9b4e624a273509dc156e7952c1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\controllers\\email_verify_verify_form.html',
      1 => 1467104932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5973020f33ffb2_78999432 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.submit.php';
if (!is_callable('smarty_function_error')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.error.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding: 90px 15px 15px;"));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding: 90px 15px 15px;"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    <?php echo smarty_function_text(array('key'=>"base+email_verify_form_promo"),$_smarty_tpl);?>

<?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding: 90px 15px 15px;"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center",'style'=>"width:63%;"));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center",'style'=>"width:63%;"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>'verificationForm'));
$_block_repeat=true;
echo smarty_block_form(array('name'=>'verificationForm'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

        <div style="display: inline;"><?php echo smarty_function_label(array('name'=>'verificationCode'),$_smarty_tpl);?>
:</div><div style="display: inline;"> <?php echo smarty_function_input(array('name'=>'verificationCode','style'=>"width:330px;"),$_smarty_tpl);?>
</div>
        <?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_ic_mail'),$_smarty_tpl);?>
<br/><div style="color: red;"><?php echo smarty_function_error(array('name'=>'verificationCode'),$_smarty_tpl);?>
</div>
    <?php $_block_repeat=false;
echo smarty_block_form(array('name'=>'verificationForm'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['verifyLater']->value) {
echo $_smarty_tpl->tpl_vars['verifyLater']->value;
}
$_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center",'style'=>"width:63%;"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
