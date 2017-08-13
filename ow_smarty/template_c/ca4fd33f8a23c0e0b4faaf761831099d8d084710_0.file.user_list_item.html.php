<?php
/* Smarty version 3.1.31, created on 2017-08-12 07:01:19
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\decorators\user_list_item.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598f0a2fa7c317_16641372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca4fd33f8a23c0e0b4faaf761831099d8d084710' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\decorators\\user_list_item.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598f0a2fa7c317_16641372 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_user_link')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.user_link.php';
?>
<div class="ow_user_list_item clearfix<?php if (isset($_smarty_tpl->tpl_vars['data']->value['set_class'])) {?> <?php echo $_smarty_tpl->tpl_vars['data']->value['set_class'];
}?>"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['contId'])) {?> id="<?php echo $_smarty_tpl->tpl_vars['data']->value['contId'];?>
"<?php }?>>

    <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['contextMenu'])) {?>
        <div class="ow_uli_context_menu">
            <?php echo $_smarty_tpl->tpl_vars['data']->value['contextMenu'];?>

	</div>
    <?php }?>
    <div class="ow_user_list_picture">
        <?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['data']->value['avatar']),$_smarty_tpl);?>

    </div>
    <div class="ow_user_list_data">
        <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['userUrl'])) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['userUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['displayName'];?>
</a>
        <?php } else { ?>
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['noUserLink'])) {
echo $_smarty_tpl->tpl_vars['data']->value['displayName'];
} else {
echo smarty_function_user_link(array('username'=>$_smarty_tpl->tpl_vars['data']->value['username'],'name'=>$_smarty_tpl->tpl_vars['data']->value['displayName']),$_smarty_tpl);
}?>
        <?php }?>
        <div class="ow_small">
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['content'])) {?><div class="ow_remark ow_user_list_content"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</div><?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['fields'])) {
echo $_smarty_tpl->tpl_vars['data']->value['fields'];
}?>
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['activity'])) {
echo $_smarty_tpl->tpl_vars['data']->value['activity'];
}?>
        </div>
    </div>
        <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['toolbar'])) {?>
			<?php echo $_smarty_tpl->tpl_vars['data']->value['toolbar'];?>

        <?php }?>
</div><?php }
}
