<?php
/* Smarty version 3.1.31, created on 2017-07-20 06:58:00
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\decorators\box_cap.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5970b6e85a4668_59443724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68ab5b5db9423b2d3484e0baea278301a6ce8710' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\decorators\\box_cap.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5970b6e85a4668_59443724 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
?>

<div class="ow_box_cap<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['type'])) {?>_<?php echo $_smarty_tpl->tpl_vars['data']->value['type'];
}
if (!empty($_smarty_tpl->tpl_vars['data']->value['addClass'])) {?> <?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];
}?>">
	<div class="ow_box_cap_right">
		<div class="ow_box_cap_body">
			<h3 class="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['iconClass'])) {
echo $_smarty_tpl->tpl_vars['data']->value['iconClass'];
} else { ?>ow_ic_file<?php }?>">
			<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['href'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['href'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['extraString'])) {
echo $_smarty_tpl->tpl_vars['data']->value['extraString'];
}?>><?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['langLabel'])) {?>
			   <?php echo smarty_function_text(array('key'=>$_smarty_tpl->tpl_vars['data']->value['langLabel']),$_smarty_tpl);?>

			<?php } else { ?>
			   <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['label'])) {
echo $_smarty_tpl->tpl_vars['data']->value['label'];
} else { ?>&nbsp;<?php }?>
		    <?php }?>
		    <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['href'])) {?></a><?php }?>
			</h3>
		   <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['content'])) {
echo $_smarty_tpl->tpl_vars['data']->value['content'];
}?>
		</div>
	</div>
</div><?php }
}
