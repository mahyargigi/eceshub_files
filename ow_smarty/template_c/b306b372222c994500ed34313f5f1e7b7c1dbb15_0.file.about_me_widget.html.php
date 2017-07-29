<?php
/* Smarty version 3.1.31, created on 2017-07-26 06:47:59
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\components\about_me_widget.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59789d8fa19456_36917323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b306b372222c994500ed34313f5f1e7b7c1dbb15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\components\\about_me_widget.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59789d8fa19456_36917323 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.submit.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>



.ow_about_me_widget {
    padding: 5px 4px 10px;
    overflow: hidden;
}


<?php $_block_repeat=false;
echo smarty_block_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>



<div class="ow_highbox ow_about_me_widget">
    <?php if ($_smarty_tpl->tpl_vars['ownerMode']->value) {?>
        <div class="ow_center">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>"about_me_form"));
$_block_repeat=true;
echo smarty_block_form(array('name'=>"about_me_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                <div class="form_auto_click"> 
                    <div class="ow_smallmargin"><?php echo smarty_function_input(array('name'=>"about_me"),$_smarty_tpl);?>
</div>
                    <div class="<?php if ($_smarty_tpl->tpl_vars['noContent']->value) {?>ow_submit_auto_click<?php }?>">
                        <?php echo smarty_function_submit(array('name'=>"save"),$_smarty_tpl);?>

                    </div>
                </div>
            <?php $_block_repeat=false;
echo smarty_block_form(array('name'=>"about_me_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['contentText']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['contentText']->value;?>

    <?php }?>

</div><?php }
}
