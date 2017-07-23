<?php
/* Smarty version 3.1.31, created on 2017-07-22 00:43:51
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\mobile\decorators\avatar_item.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597302373f2410_59724147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffb79a40b585b95a9c2872969cc41e614e0c0f8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\mobile\\decorators\\avatar_item.html',
      1 => 1493557652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597302373f2410_59724147 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="owm_avatar<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['data']->value['class'];
}?>">
<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['isMarked'])) {?>
    <div class="owm_ico_bookmark owm_bookmark_icon"></div>
<?php }
if (!empty($_smarty_tpl->tpl_vars['data']->value['url'])) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
">
        <div class="owm_align_center">
            <img alt=""<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])) {?> title="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
"<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['data']->value['src'];?>
" />
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['label'])) {?><span class="owm_avatar_label"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['labelColor'])) {?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['data']->value['labelColor'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
</span><?php }?>
        </div>
        <div class="owm_align_center">
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])) {?><span class="owm_avatar_title"><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</span><?php }?>
        </div>
    </a>
<?php } else { ?>
    <div></div><img alt="" <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['title'])) {?> title="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
"<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['data']->value['src'];?>
" />
<?php }?>
</div><?php }
}
