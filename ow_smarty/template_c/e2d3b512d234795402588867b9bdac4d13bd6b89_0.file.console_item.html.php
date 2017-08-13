<?php
/* Smarty version 3.1.31, created on 2017-08-12 00:53:19
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\components\console_item.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598eb3ef5933a3_14401530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2d3b512d234795402588867b9bdac4d13bd6b89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\components\\console_item.html',
      1 => 1466402692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598eb3ef5933a3_14401530 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.block_decorator.php';
if (!empty($_smarty_tpl->tpl_vars['item']->value['content'])) {?>
<div id="<?php echo $_smarty_tpl->tpl_vars['item']->value['content']['uniqId'];?>
" class="OW_ConsoleItemContent" style="display: none;">

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>"tooltip",'addClass'=>"console_tooltip ow_tooltip_top_right"));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>"tooltip",'addClass'=>"console_tooltip ow_tooltip_top_right"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    <?php echo $_smarty_tpl->tpl_vars['item']->value['content']['html'];?>

    <?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>"tooltip",'addClass'=>"console_tooltip ow_tooltip_top_right"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


</div>
<?php }?>
<div id="<?php echo $_smarty_tpl->tpl_vars['item']->value['uniqId'];?>
" class="ow_console_item <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['hidden']) {?>style="display: none;"<?php }?>>
    <?php echo $_smarty_tpl->tpl_vars['item']->value['html'];?>

</div><?php }
}
