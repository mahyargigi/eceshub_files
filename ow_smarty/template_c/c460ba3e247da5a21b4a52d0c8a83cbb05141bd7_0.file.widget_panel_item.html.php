<?php
/* Smarty version 3.1.31, created on 2017-07-22 00:43:51
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\mobile\views\components\widget_panel_item.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5973023788e547_68801580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c460ba3e247da5a21b4a52d0c8a83cbb05141bd7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\mobile\\views\\components\\widget_panel_item.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5973023788e547_68801580 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.block_decorator.php';
?>
<div class="owm_dnd_widget <?php echo $_smarty_tpl->tpl_vars['box']->value['uniqName'];?>
">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>'box','capEnabled'=>$_smarty_tpl->tpl_vars['box']->value['capEnabled'],'capAddClass'=>'','capContent'=>$_smarty_tpl->tpl_vars['box']->value['capContent'],'label'=>$_smarty_tpl->tpl_vars['box']->value['title'],'iconClass'=>$_smarty_tpl->tpl_vars['box']->value['icon'],'type'=>$_smarty_tpl->tpl_vars['box']->value['type'],'addClass'=>((string)$_smarty_tpl->tpl_vars['box']->value['uniqName']),'toolbar'=>$_smarty_tpl->tpl_vars['box']->value['toolbar']));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>'box','capEnabled'=>$_smarty_tpl->tpl_vars['box']->value['capEnabled'],'capAddClass'=>'','capContent'=>$_smarty_tpl->tpl_vars['box']->value['capContent'],'label'=>$_smarty_tpl->tpl_vars['box']->value['title'],'iconClass'=>$_smarty_tpl->tpl_vars['box']->value['icon'],'type'=>$_smarty_tpl->tpl_vars['box']->value['type'],'addClass'=>((string)$_smarty_tpl->tpl_vars['box']->value['uniqName']),'toolbar'=>$_smarty_tpl->tpl_vars['box']->value['toolbar']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>


        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>'box','capEnabled'=>$_smarty_tpl->tpl_vars['box']->value['capEnabled'],'capAddClass'=>'','capContent'=>$_smarty_tpl->tpl_vars['box']->value['capContent'],'label'=>$_smarty_tpl->tpl_vars['box']->value['title'],'iconClass'=>$_smarty_tpl->tpl_vars['box']->value['icon'],'type'=>$_smarty_tpl->tpl_vars['box']->value['type'],'addClass'=>((string)$_smarty_tpl->tpl_vars['box']->value['uniqName']),'toolbar'=>$_smarty_tpl->tpl_vars['box']->value['toolbar']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

</div><?php }
}
