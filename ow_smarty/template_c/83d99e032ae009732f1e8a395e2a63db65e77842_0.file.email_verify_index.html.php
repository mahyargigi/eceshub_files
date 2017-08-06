<?php
/* Smarty version 3.1.31, created on 2017-08-06 05:50:15
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\controllers\email_verify_index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59871087bd6ae1_06964263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83d99e032ae009732f1e8a395e2a63db65e77842' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\controllers\\email_verify_index.html',
      1 => 1482301538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59871087bd6ae1_06964263 (Smarty_Internal_Template $_smarty_tpl) {
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

    <?php echo smarty_function_text(array('key'=>"base+email_verify_promo"),$_smarty_tpl);?>

<?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding: 90px 15px 15px;"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center"));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>'emailVerifyForm'));
$_block_repeat=true;
echo smarty_block_form(array('name'=>'emailVerifyForm'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                        <div style="display: inline;"><?php echo smarty_function_label(array('name'=>'email'),$_smarty_tpl);?>
:</div><div style="display: inline;"> <?php echo smarty_function_input(array('name'=>'email','style'=>"width:330px;"),$_smarty_tpl);?>
</div>
                        <?php echo smarty_function_submit(array('name'=>'sendVerifyMail','class'=>'ow_ic_mail'),$_smarty_tpl);?>
<br/><div style="color: red;"><?php echo smarty_function_error(array('name'=>'email'),$_smarty_tpl);?>
</div>
    <?php $_block_repeat=false;
echo smarty_block_form(array('name'=>'emailVerifyForm'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if (isset($_smarty_tpl->tpl_vars['verifyLater']->value)) {
echo $_smarty_tpl->tpl_vars['verifyLater']->value;
}
$_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>"box",'type'=>"normal",'addClass'=>"ow_stdmargin ow_wide ow_automargin ow_center"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
