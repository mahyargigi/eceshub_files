<?php
/* Smarty version 3.1.31, created on 2017-08-05 03:51:40
  from "C:\xampp\htdocs\eceshub\ow_plugins\event\views\components\upcoming_events.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5985a33c2bc6d9_98519034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f40853b208ec78ab57a1587868f835db9f034875' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\event\\views\\components\\upcoming_events.html',
      1 => 1463982330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5985a33c2bc6d9_98519034 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
if (empty($_smarty_tpl->tpl_vars['events']->value)) {?>
<div class="ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['no_content_message']->value;?>
</div>
<?php } else {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['events']->value, 'event');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['event']->value) {
?>
    <?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_smallmargin','data'=>$_smarty_tpl->tpl_vars['event']->value,'infoString'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['event']->value['eventUrl'])."\">".((string)$_smarty_tpl->tpl_vars['event']->value['title'])."</a>"),$_smarty_tpl);?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php if (!empty($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['toolbar']->value),$_smarty_tpl);
}
}
}
}
