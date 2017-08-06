<?php
/* Smarty version 3.1.31, created on 2017-08-06 05:52:36
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\admin\views\components\user_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598711141467e5_88327762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a21d1b6282d0c7c442782d70ca662c34471c2c4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\admin\\views\\components\\user_list.html',
      1 => 1493557652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598711141467e5_88327762 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_script')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_cycle')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_libraries\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_user_link')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.user_link.php';
if (!is_callable('smarty_function_age')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.age.php';
if (!is_callable('smarty_function_format_date')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.format_date.php';
if (!is_callable('smarty_block_block_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.block_decorator.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('script', array());
$_block_repeat=true;
echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buttons']->value, 'btn');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->value) {
?>
	   <?php if (!empty($_smarty_tpl->tpl_vars['btn']->value['js'])) {?>
	       <?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>

	   <?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php $_block_repeat=false;
echo smarty_block_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>


    .user_list_thumb {
        width: 55px;
        height: 45px;
    }

    #user-list-form .ow_lbutton {
        cursor: default;
    }

<?php $_block_repeat=false;
echo smarty_block_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php if ($_smarty_tpl->tpl_vars['users']->value) {?>

<?php if (isset($_smarty_tpl->tpl_vars['search']->value)) {?>
    <div class="ow_anno ow_std_margin ow_nocontent"><?php echo smarty_function_text(array('key'=>"admin+user_search_result",'for'=>$_smarty_tpl->tpl_vars['search']->value),$_smarty_tpl);?>
</div>
<?php }?>

<div class="clearfix ow_smallmargin">
    <div class="ow_left"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['total']->value) {?><div class="ow_right"><?php echo smarty_function_text(array('key'=>'admin+found_users','count'=>$_smarty_tpl->tpl_vars['total']->value),$_smarty_tpl);?>
</div><?php }?>
</div>

<form id="user-list-form" method="post" action="<?php if ($_smarty_tpl->tpl_vars['action']->value) {
echo $_smarty_tpl->tpl_vars['action']->value;
}?>">
<table class="ow_table_2">
<tr class="ow_tr_first">
    <th width="1"></td>
    <th><?php echo smarty_function_text(array('key'=>'admin+user'),$_smarty_tpl);?>
</th>
    <th><?php echo smarty_function_text(array('key'=>'admin+user_status'),$_smarty_tpl);?>
</th>
    <th><?php echo smarty_function_text(array('key'=>'admin+joined'),$_smarty_tpl);?>
</th>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'userId', null);
echo $_smarty_tpl->tpl_vars['user']->value->id;
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'username', null);
echo $_smarty_tpl->tpl_vars['userNameList']->value[$_smarty_tpl->tpl_vars['userId']->value];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>
">
        <td><?php if (!in_array($_smarty_tpl->tpl_vars['user']->value->id,$_smarty_tpl->tpl_vars['adminList']->value) || true) {?><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" name="users[<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
]" /><?php }?></td>
        <td>
            <div class="clearfix">
                <div class="ow_left ow_txtleft user_list_thumb"><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['userId']->value]),$_smarty_tpl);?>
</div>
                <div class="ow_left ow_txtleft">
                    <?php echo smarty_function_user_link(array('name'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['userId']->value]['title'],'username'=>$_smarty_tpl->tpl_vars['userNameList']->value[$_smarty_tpl->tpl_vars['userId']->value]),$_smarty_tpl);?>
<br />
                    <span class="ow_small">
                    <?php if (!empty($_smarty_tpl->tpl_vars['sexList']->value[$_smarty_tpl->tpl_vars['userId']->value])) {?>
                        <?php echo $_smarty_tpl->tpl_vars['sexList']->value[$_smarty_tpl->tpl_vars['userId']->value];?>

                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['userId']->value]['birthdate'])) {?>
                        <?php echo smarty_function_age(array('dateTime'=>$_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['userId']->value]['birthdate']),$_smarty_tpl);?>

                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['sexList']->value[$_smarty_tpl->tpl_vars['userId']->value]) || !empty($_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['userId']->value]['birthdate'])) {?><br /><?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['userId']->value]['email'])) {?>
                        <span class="ow_remark"><?php echo $_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['userId']->value]['email'];?>
</span>
                    <?php }?>
                    </span>
                    <?php if ($_smarty_tpl->tpl_vars['onlineStatus']->value) {?>
                    <div class="ow_small">
                        <?php if ((!empty($_smarty_tpl->tpl_vars['onlineStatus']->value[$_smarty_tpl->tpl_vars['userId']->value]) && $_smarty_tpl->tpl_vars['onlineStatus']->value[$_smarty_tpl->tpl_vars['userId']->value])) {?>
                            <span class="ow_lbutton ow_green"><?php echo smarty_function_text(array('key'=>'base+activity_online'),$_smarty_tpl);?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->activityStamp) {?>
                            <?php echo smarty_function_text(array('key'=>'base+activity_stamp'),$_smarty_tpl);?>
 <span class="ow_remark"><?php echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['user']->value->activityStamp),$_smarty_tpl);?>
</span>
                        <?php }?>
                    </div>
                    <?php }?>
                </div>
            </div>
        </td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['suspendedList']->value[$_smarty_tpl->tpl_vars['userId']->value]) {?><div><span class="ow_lbutton ow_red"><?php echo smarty_function_text(array('key'=>'admin+user_status_suspended'),$_smarty_tpl);?>
</span></div>
            <?php } elseif ($_smarty_tpl->tpl_vars['unverifiedList']->value[$_smarty_tpl->tpl_vars['userId']->value]) {?><div><span class="ow_lbutton"><?php echo smarty_function_text(array('key'=>'admin+user_status_unverified'),$_smarty_tpl);?>
</span></div>
            <?php } elseif ($_smarty_tpl->tpl_vars['unapprovedList']->value[$_smarty_tpl->tpl_vars['userId']->value]) {?><div><span class="ow_lbutton"><?php echo smarty_function_text(array('key'=>'admin+user_status_unapproved'),$_smarty_tpl);?>
</span></div>
            <?php } else { ?>
                <div><span class="ow_lbutton"><?php echo smarty_function_text(array('key'=>'admin+user_active_status'),$_smarty_tpl);?>
</span></div>
            <?php }?>
        </td>
        <td class="ow_small"><?php if ($_smarty_tpl->tpl_vars['user']->value->joinStamp) {
echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['user']->value->joinStamp),$_smarty_tpl);
}?></td>
    </tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<tr class="ow_alt1 ow_tr_last">
     <td><input type="checkbox" id="check-all" /></th>
     <td colspan="3" class="ow_txtleft">
         <?php echo smarty_function_text(array('key'=>'base+check_all'),$_smarty_tpl);?>
 | <?php echo smarty_function_text(array('key'=>'base+with_selected'),$_smarty_tpl);?>


         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buttons']->value, 'btn');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->value) {
?>
            <?php echo smarty_function_decorator(array('name'=>'button_list_item','type'=>'submit','buttonName'=>$_smarty_tpl->tpl_vars['btn']->value['name'],'label'=>$_smarty_tpl->tpl_vars['btn']->value['label'],'id'=>$_smarty_tpl->tpl_vars['btn']->value['id'],'class'=>$_smarty_tpl->tpl_vars['btn']->value['class']),$_smarty_tpl);?>

         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

     </td>
</tr>
</table>

<div class="ow_hidden" id="delete-user-confirm">
<div class="ow_stdmargin ow_center">
    <div class="ow_stdmargin">
        <?php echo smarty_function_text(array('key'=>"admin+confirm_delete_users"),$_smarty_tpl);?>

    </div>

	<?php echo smarty_function_decorator(array('name'=>"button",'type'=>"submit",'id'=>"button-confirm-user-delete",'class'=>"ow_ic_delete ow_red",'langLabel'=>"base+delete_user_delete_button"),$_smarty_tpl);?>

</div>
</div>

</form>

<?php echo $_smarty_tpl->tpl_vars['paging']->value;?>


<?php } else { ?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>'box','addClass'=>'ow_stdmargin clearfix ow_italic ow_center'));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin clearfix ow_italic ow_center'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

        <?php echo smarty_function_text(array('key'=>'admin+no_users'),$_smarty_tpl);?>

    <?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_stdmargin clearfix ow_italic ow_center'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }
}
}
