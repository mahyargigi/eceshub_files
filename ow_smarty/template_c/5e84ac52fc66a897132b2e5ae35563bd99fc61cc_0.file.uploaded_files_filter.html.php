<?php
/* Smarty version 3.1.31, created on 2017-08-05 03:37:21
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\admin\views\components\uploaded_files_filter.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59859fe1343914_76669476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e84ac52fc66a897132b2e5ae35563bd99fc61cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\admin\\views\\components\\uploaded_files_filter.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59859fe1343914_76669476 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="float: left;" class="ow_context_action_block ow_context_action_value_block clearfix">
    <div class="ow_context_action">
        <a class="ow_context_action_value"><?php echo smarty_function_text(array('key'=>"admin+period"),$_smarty_tpl);?>
: <span><?php echo smarty_function_text(array('key'=>"admin+all_time"),$_smarty_tpl);?>
</span></a><span class="ow_context_more"></span>
        <div style="opacity: 1; top: 18px;" class="ow_tooltip ow_small ow_tooltip_top_right">
            <div class="ow_tooltip_tail">
                <span></span>
            </div>
            <div class="ow_tooltip_body">
                <ul class="ow_context_action_list ow_border">
                    <li><a href="#" data-date=""><?php echo smarty_function_text(array('key'=>"admin+all_time"),$_smarty_tpl);?>
</a></li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dates']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <li><a href="#" data-date="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </ul>
            </div>
        </div>
    </div>
</div><?php }
}
