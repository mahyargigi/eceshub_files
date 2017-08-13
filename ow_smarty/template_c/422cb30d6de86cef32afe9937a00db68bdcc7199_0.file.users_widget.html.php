<?php
/* Smarty version 3.1.31, created on 2017-08-12 06:01:12
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\components\users_widget.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598efc1810ae19_78177412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '422cb30d6de86cef32afe9937a00db68bdcc7199' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\components\\users_widget.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598efc1810ae19_78177412 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
if (!empty($_smarty_tpl->tpl_vars['menu']->value)) {
echo $_smarty_tpl->tpl_vars['menu']->value;
}?>
<div id="<?php echo $_smarty_tpl->tpl_vars['widgetId']->value;?>
">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item', false, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
		<div id="<?php echo $_smarty_tpl->tpl_vars['item']->value['contId'];?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['item']->value['active']) {?>block<?php } else { ?>none<?php }?>;"><?php echo $_smarty_tpl->tpl_vars['item']->value['users'];?>
</div>
		<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['toolbarId'])) {?><div id="<?php echo $_smarty_tpl->tpl_vars['item']->value['toolbarId'];?>
"  style="display: none;"><?php echo smarty_function_decorator(array('name'=>'box_toolbar','class'=>"clearfix",'itemList'=>$_smarty_tpl->tpl_vars['item']->value['toolbar']),$_smarty_tpl);?>
</div><?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</div><?php }
}
