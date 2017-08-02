<?php
/* Smarty version 3.1.31, created on 2017-08-02 01:34:17
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\components\users.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59818e8948b841_70313420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de43b3414c3d4f3a9527ce236463453a8d65bf61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\components\\users.html',
      1 => 1499503962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59818e8948b841_70313420 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_libraries\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_online_now')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.online_now.php';
if (!is_callable('smarty_function_format_date')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.format_date.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
if (!empty($_smarty_tpl->tpl_vars['list']->value)) {?>

<div class="ow_user_list ow_full ow_stdmargin">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item', false, NULL, 'user_list', array (
  'first' => true,
  'iteration' => true,
  'last' => true,
  'index' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['total'];
?>
		<?php $_smarty_tpl->_assignInScope('dto', $_smarty_tpl->tpl_vars['item']->value['dto']);
?>
		<?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['dto']->value->id);
?>

		<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['first'] : null)) {?>
			<div class="clearfix <?php echo smarty_function_cycle(array('name'=>"rows",'values'=>"ow_alt2, ow_alt1"),$_smarty_tpl);?>
">
		<?php }?>

		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "_fields", null);?>
			<?php if (isset($_smarty_tpl->tpl_vars['friendList']->value) && !empty($_smarty_tpl->tpl_vars['friendList']->value) && !empty($_smarty_tpl->tpl_vars['friendList']->value[$_smarty_tpl->tpl_vars['id']->value])) {?>
			<span class="user_friend"><?php echo smarty_function_text(array('key'=>"base+is_friend"),$_smarty_tpl);?>
</span>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value)) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['id']->value], 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
					<?php echo $_smarty_tpl->tpl_vars['field']->value['label'];
echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
<br />
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['answerValues']->value[$_smarty_tpl->tpl_vars['id']->value])) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questionNameList']->value, 'questionName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['questionName']->value) {
?>
					<?php if (isset($_smarty_tpl->tpl_vars['answerValues']->value[$_smarty_tpl->tpl_vars['id']->value][$_smarty_tpl->tpl_vars['questionName']->value])) {?>
						<div><span class="question_title"><?php echo $_smarty_tpl->tpl_vars['questionNameValues']->value[$_smarty_tpl->tpl_vars['questionName']->value];?>
: </span> <span class="question_value"><?php echo $_smarty_tpl->tpl_vars['answerValues']->value[$_smarty_tpl->tpl_vars['id']->value][$_smarty_tpl->tpl_vars['questionName']->value];?>
</span></div>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			<?php }?>
		<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "activity", null);?>
            <?php if (!empty($_smarty_tpl->tpl_vars['showPresenceList']->value) && !empty($_smarty_tpl->tpl_vars['showPresenceList']->value[$_smarty_tpl->tpl_vars['id']->value]) && $_smarty_tpl->tpl_vars['showPresenceList']->value[$_smarty_tpl->tpl_vars['id']->value]) {?>
                <?php if ($_smarty_tpl->tpl_vars['onlineInfo']->value) {?>
                    <?php if ((!empty($_smarty_tpl->tpl_vars['onlineInfo']->value) && $_smarty_tpl->tpl_vars['onlineInfo']->value[$_smarty_tpl->tpl_vars['id']->value]) || empty($_smarty_tpl->tpl_vars['onlineInfo']->value)) {
echo smarty_function_online_now(array('userId'=>$_smarty_tpl->tpl_vars['dto']->value->id),$_smarty_tpl);
} else {
echo smarty_function_text(array('key'=>"base+user_list_activity"),$_smarty_tpl);?>
: <span class="ow_remark"><?php echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['dto']->value->activityStamp),$_smarty_tpl);?>
</span><?php }?>
                <?php }?>
            <?php }?>
		<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

		<?php $_smarty_tpl->_assignInScope('username', $_smarty_tpl->tpl_vars['usernameList']->value[$_smarty_tpl->tpl_vars['id']->value]);
?>

		<?php $_smarty_tpl->_assignInScope('name', $_smarty_tpl->tpl_vars['displayNameList']->value[$_smarty_tpl->tpl_vars['id']->value]);
?>

		<?php echo smarty_function_decorator(array('name'=>"user_list_item",'avatar'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['id']->value],'username'=>$_smarty_tpl->tpl_vars['username']->value,'displayName'=>$_smarty_tpl->tpl_vars['name']->value,'contextMenu'=>$_smarty_tpl->tpl_vars['contextMenuList']->value[$_smarty_tpl->tpl_vars['id']->value],'fields'=>$_smarty_tpl->tpl_vars['_fields']->value,'activity'=>$_smarty_tpl->tpl_vars['activity']->value,'set_class'=>'ow_item_set3'),$_smarty_tpl);?>


		<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['iteration'] : null)%3 == 0 && !(isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['last'] : null)) {?>
			</div>
			<div class="clearfix <?php echo smarty_function_cycle(array('name'=>"rows",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
		<?php }?>

		<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['last'] : null)) {?>
		  </div>
		<?php }?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


</div>

<center><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</center>
<?php } else { ?>
	<center><?php echo smarty_function_text(array('key'=>"base+user_no_users"),$_smarty_tpl);?>
</center>
<?php }
}
}
