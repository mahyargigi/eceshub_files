<?php
/* Smarty version 3.1.31, created on 2017-07-31 09:40:44
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\admin\views\controllers\plugins_uninstall_request.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597f5d8c980a87_45874681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd01a4509ef35edd3d28eccabf28d0382c9a653af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\admin\\views\\controllers\\plugins_uninstall_request.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597f5d8c980a87_45874681 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
?>
<div class="ow_wide ow_automargin">
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_plugin','langLabel'=>'admin+manage_plugins_uninstall_request_box_cap_label'));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_plugin','langLabel'=>'admin+manage_plugins_uninstall_request_box_cap_label'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

<div style="text-align:center;">

<?php echo $_smarty_tpl->tpl_vars['text']->value;?>
<br /><br />
<div class="clearfix"><div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_positive','langLabel'=>'admin+plugin_update_yes_button_label','onclick'=>"window.location='".((string)$_smarty_tpl->tpl_vars['redirectUrl']->value)."'"),$_smarty_tpl);?>
</div></div>

</div>
<?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_plugin','langLabel'=>'admin+manage_plugins_uninstall_request_box_cap_label'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

</div><?php }
}