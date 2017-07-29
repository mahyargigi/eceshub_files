<?php
/* Smarty version 3.1.31, created on 2017-07-29 02:42:44
  from "C:\xampp\htdocs\eceshub\ow_plugins\event\views\components\event_users.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597c5894f13050_27639821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce180070f66af38adbcff3a15934c8b52abec42f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\event\\views\\components\\event_users.html',
      1 => 1463982330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597c5894f13050_27639821 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>'box','addClass'=>"ow_std_margin clearfix",'iconClass'=>'ow_ic_user','langLabel'=>'event+view_page_users_block_cap_label'));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>'box','addClass'=>"ow_std_margin clearfix",'iconClass'=>'ow_ic_user','langLabel'=>'event+view_page_users_block_cap_label'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

<?php echo $_smarty_tpl->tpl_vars['userListMenu']->value;?>

<div id="userLists">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userLists']->value, 'list', false, NULL, 'user_lists', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_user_lists']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_user_lists']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_user_lists']->value['index'];
?>
    <div id="<?php echo $_smarty_tpl->tpl_vars['list']->value['contId'];?>
"<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_lists']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_lists']->value['first'] : null)) {?>} style="display:none;"<?php }?>>
         <?php echo $_smarty_tpl->tpl_vars['list']->value['cmp'];?>

    </div>
    <div style="display:none" id="<?php echo $_smarty_tpl->tpl_vars['list']->value['contId'];?>
">
    	<?php if ($_smarty_tpl->tpl_vars['list']->value['bottomLinkEnable']) {
echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['list']->value['toolbarArray']),$_smarty_tpl);
}?>
    </div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    <?php if ($_smarty_tpl->tpl_vars['userLists']->value[0]['bottomLinkEnable']) {
echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['userLists']->value[0]['toolbarArray']),$_smarty_tpl);
}?>
</div>
<?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>'box','addClass'=>"ow_std_margin clearfix",'iconClass'=>'ow_ic_user','langLabel'=>'event+view_page_users_block_cap_label'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
