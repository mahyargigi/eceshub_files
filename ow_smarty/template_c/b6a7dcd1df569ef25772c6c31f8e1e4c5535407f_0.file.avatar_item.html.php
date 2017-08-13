<?php
/* Smarty version 3.1.31, created on 2017-08-12 03:36:39
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\decorators\avatar_item.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598eda371c34d2_83677307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6a7dcd1df569ef25772c6c31f8e1e4c5535407f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\decorators\\avatar_item.html',
      1 => 1466402692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598eda371c34d2_83677307 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="ow_avatar<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['data']->value['class'];
}?>">
<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['isMarked'])) {?><div class="ow_ic_bookmark ow_bookmark_icon"></div><?php }
if (!empty($_smarty_tpl->tpl_vars['data']->value['url'])) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
"><img <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])) {?> alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['attrs'])) {
echo $_smarty_tpl->tpl_vars['data']->value['attrs'];
}?> src="<?php echo $_smarty_tpl->tpl_vars['data']->value['src'];?>
" /></a>
<?php } else { ?>
<img <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])) {?> alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['attrs'])) {
echo $_smarty_tpl->tpl_vars['data']->value['attrs'];
}?> src="<?php echo $_smarty_tpl->tpl_vars['data']->value['src'];?>
" />
<?php }
if (!empty($_smarty_tpl->tpl_vars['data']->value['label'])) {?><span class="ow_avatar_label"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['labelColor'])) {?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['data']->value['labelColor'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
</span><?php }?>
</div><?php }
}
