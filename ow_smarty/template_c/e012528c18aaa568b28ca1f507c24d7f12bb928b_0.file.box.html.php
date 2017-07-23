<?php
/* Smarty version 3.1.31, created on 2017-07-22 00:43:51
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\mobile\decorators\box.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59730237ac2b35_73248765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e012528c18aaa568b28ca1f507c24d7f12bb928b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\mobile\\decorators\\box.html',
      1 => 1493557652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59730237ac2b35_73248765 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
?>
<div class="owm_box<?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];?>
">
    <?php if ($_smarty_tpl->tpl_vars['data']->value['capEnabled']) {?>
        <div class="owm_box_cap<?php echo $_smarty_tpl->tpl_vars['data']->value['capAddClass'];?>
 clearfix">
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['label'])) {?><h3 class="<?php echo $_smarty_tpl->tpl_vars['data']->value['iconClass'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
</h3><?php }
echo $_smarty_tpl->tpl_vars['data']->value['capContent'];?>

        </div>
        <?php if ($_smarty_tpl->tpl_vars['data']->value['capAddClass'] == '_empty' || isset($_smarty_tpl->tpl_vars['data']->value['noCollapsible'])) {?>
        <?php } else { ?>
        <span class="page_collapsible collapse-open" style="display: none;" ></span>
        <?php }?>
    <?php }?>
    <div class="owm_box_body container">
        <div class="owm_box_body_cont clearfix">
            <div class="owm_box_padding">
                <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

            </div>
        </div>
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['toolbar'])) {?>
        <div class="owm_box_bottom">
            <?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['data']->value['toolbar']),$_smarty_tpl);?>

        </div>
    <?php }?>
</div><?php }
}
