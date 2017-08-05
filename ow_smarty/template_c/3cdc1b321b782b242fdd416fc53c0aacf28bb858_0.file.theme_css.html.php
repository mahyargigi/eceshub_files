<?php
/* Smarty version 3.1.31, created on 2017-08-05 03:37:16
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\admin\views\controllers\theme_css.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59859fdc42e020_47373225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cdc1b321b782b242fdd416fc53c0aacf28bb858' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\admin\\views\\controllers\\theme_css.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59859fdc42e020_47373225 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_block_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.submit.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>


textarea.edit_css{
    height:400px;
}
.css_code pre{
	padding:10px;
	height:400px;
	overflow:scroll;
}

<?php $_block_repeat=false;
echo smarty_block_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'admin+theme_css_existing_css_box_cap_label'));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'admin+theme_css_existing_css_box_cap_label'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    <div class="css_code"><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</div>
<?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','langLabel'=>'admin+theme_css_existing_css_box_cap_label'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>'box','style'=>'text-align:center;','iconClass'=>"ow_ic_write",'langLabel'=>'admin+theme_css_edit_css_box_cap_label'));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>'box','style'=>'text-align:center;','iconClass'=>"ow_ic_write",'langLabel'=>'admin+theme_css_edit_css_box_cap_label'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>'add-css'));
$_block_repeat=true;
echo smarty_block_form(array('name'=>'add-css'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

<?php echo smarty_function_input(array('name'=>'css','class'=>'edit_css'),$_smarty_tpl);?>

<div class="clearfix ow_smallmargin">
<div class="ow_right" style="padding-top: 20px;padding-left: 10px; padding-right: 15px;">
<?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_positive'),$_smarty_tpl);?>

</div>
</div>
<?php $_block_repeat=false;
echo smarty_block_form(array('name'=>'add-css'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>'box','style'=>'text-align:center;','iconClass'=>"ow_ic_write",'langLabel'=>'admin+theme_css_edit_css_box_cap_label'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php }
}
