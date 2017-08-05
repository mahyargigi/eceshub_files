<?php
/* Smarty version 3.1.31, created on 2017-08-05 03:37:21
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\admin\views\controllers\theme_graphics.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59859fe181f446_20224084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1601c0331552836eb2527bd392fb085c1298e44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\admin\\views\\controllers\\theme_graphics.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59859fe181f446_20224084 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>


.css_image{
	background-repeat:no-repeat;
	background-position:50% 50%;
	border:1px solid #666;
	display:block;
	height:30px;
	margin:0 auto;
	width:300px;
}

<?php $_block_repeat=false;
echo smarty_block_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>


<?php echo $_smarty_tpl->tpl_vars['filelist']->value;
}
}
