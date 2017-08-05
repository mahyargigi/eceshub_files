<?php
/* Smarty version 3.1.31, created on 2017-08-05 03:53:48
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\decorators\ipc.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5985a3bcc7c625_65320122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f31af36ea7ad808c8b62369b5c35374696d0d6f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\decorators\\ipc.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5985a3bcc7c625_65320122 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>


.ow_ipc_toolbar span{
    display:inline-block;
}

<?php $_block_repeat=false;
echo smarty_block_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="ow_ipc <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['addClass'])) {
echo $_smarty_tpl->tpl_vars['data']->value['addClass'];
}?> clearfix">
	<div class="ow_ipc_picture">
        <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['avatar'])) {?>
            <?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['data']->value['avatar']),$_smarty_tpl);?>

        <?php } else { ?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['imageSrc'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['imageTitle'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['data']->value['imageTitle'];?>
" />
    	<?php }?>
    </div>
	<div class="ow_ipc_info">
		<?php if (isset($_smarty_tpl->tpl_vars['data']->value['infoString'])) {?><div class="ow_ipc_header"><?php echo $_smarty_tpl->tpl_vars['data']->value['infoString'];?>
</div><?php }?>
		<div class="ow_ipc_content"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</div>
		<?php if (isset($_smarty_tpl->tpl_vars['data']->value['toolbar']) && $_smarty_tpl->tpl_vars['data']->value['toolbar']) {?>
      		<div class="clearfix">
      		<div class="ow_ipc_toolbar ow_remark">
      		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['toolbar'], 'item', false, NULL, 'toolbar', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_toolbar']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_toolbar']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_toolbar']->value['index'];
?>
                <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_toolbar']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_toolbar']->value['first'] : null) && (empty($_smarty_tpl->tpl_vars['item']->value['class']) || (!strstr($_smarty_tpl->tpl_vars['item']->value['class'],'ow_ipc_date')))) {?> <span class="ow_delimiter">&middot;</span> <?php }?>
      		    <span class="ow_nowrap<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];
}?>">
      		    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['href'])) {?><a <?php if (isset($_smarty_tpl->tpl_vars['item']->value['id'])) {?> id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
"><?php }?>
      		    <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>

      		    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['href'])) {?></a><?php }?>
      		    </span>
      		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

      		</div>
      		</div>
        <?php }?>
   </div>
</div><?php }
}
