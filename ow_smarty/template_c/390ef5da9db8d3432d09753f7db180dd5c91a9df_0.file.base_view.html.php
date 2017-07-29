<?php
/* Smarty version 3.1.31, created on 2017-07-29 02:42:45
  from "C:\xampp\htdocs\eceshub\ow_plugins\event\views\controllers\base_view.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597c589578f921_22415264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '390ef5da9db8d3432d09753f7db180dd5c91a9df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\event\\views\\controllers\\base_view.html',
      1 => 1499503962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597c589578f921_22415264 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_add_content')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.add_content.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_block_block_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.block_decorator.php';
if (!empty($_smarty_tpl->tpl_vars['authErrorText']->value)) {?>
    <div class="ow_anno ow_center">
        <?php echo $_smarty_tpl->tpl_vars['authErrorText']->value;?>

    </div>
<?php } else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>


.attend_buttons{
text-align:right;
margin-bottom:7px;
}
.attend_buttons input{

}
.current_status{
	padding-bottom:4px;
}

.inviteLink{
    text-align:center;    
}
.ow_event_files .ow_left.place_section.left_section.ow_supernarrow {
width: 100%;
}

<?php $_block_repeat=false;
echo smarty_block_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php echo smarty_function_add_content(array('key'=>'events.content.view.top','eventId'=>$_smarty_tpl->tpl_vars['info']->value['id']),$_smarty_tpl);?>


<?php if (!empty($_smarty_tpl->tpl_vars['editArray']->value) || !empty($_smarty_tpl->tpl_vars['toolbar']->value)) {?>
    <div class="ow_stdmargin ow_txtright">
        <ul class="ow_bl clearfix ow_small ow_stdmargin">
            <?php if (!empty($_smarty_tpl->tpl_vars['editArray']->value)) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['editArray']->value['delete']['url'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['editArray']->value['delete']['confirmMessage'];?>
');"><?php echo $_smarty_tpl->tpl_vars['editArray']->value['delete']['label'];?>
</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['editArray']->value['edit']['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['editArray']->value['edit']['label'];?>
</a></li>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['leaveArray']->value)) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['leaveArray']->value['leave']['url'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['leaveArray']->value['leave']['confirmMessage'];?>
');"><?php echo $_smarty_tpl->tpl_vars['leaveArray']->value['leave']['label'];?>
</a></li>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['toolbar']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['toolbar']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <li><a <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
"  class="<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])) {
echo $_smarty_tpl->tpl_vars['item']->value['class'];
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php }?>
        </ul>
    </div>
<?php }?>

<div class="clearfix" id="<?php echo $_smarty_tpl->tpl_vars['contId']->value;?>
">
	<?php if (empty($_smarty_tpl->tpl_vars['no_attend_form']->value) && $_smarty_tpl->tpl_vars['info']->value['moderationStatus'] == 1) {?>
    <div class="attend_buttons">
	    <div class="current_status"><span class="status"><?php if (!empty($_smarty_tpl->tpl_vars['currentStatus']->value)) {
echo $_smarty_tpl->tpl_vars['currentStatus']->value;
}?></span> <span class="link"<?php if (empty($_smarty_tpl->tpl_vars['currentStatus']->value)) {?> style="display:none;"<?php }?>>(<a href="javascript://"><?php echo smarty_function_text(array('key'=>'event+current_status_change_label'),$_smarty_tpl);?>
</a>)</span></div>
        <div class="buttons"<?php if (!empty($_smarty_tpl->tpl_vars['currentStatus']->value)) {?> style="display:none;"<?php }?>>
             <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>'event_attend'));
$_block_repeat=true;
echo smarty_block_form(array('name'=>'event_attend'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                 <?php echo smarty_function_decorator(array('name'=>'button_list_item','type'=>'submit','langLabel'=>'event+attend_yes_btn_label','id'=>'event_attend_yes_btn'),$_smarty_tpl);?>

                 <?php echo smarty_function_decorator(array('name'=>'button_list_item','type'=>'submit','langLabel'=>'event+attend_maybe_btn_label','id'=>'event_attend_maybe_btn'),$_smarty_tpl);?>

                 <?php echo smarty_function_decorator(array('name'=>'button_list_item','type'=>'submit','langLabel'=>'event+attend_no_btn_label','id'=>'event_attend_no_btn'),$_smarty_tpl);?>

             <?php $_block_repeat=false;
echo smarty_block_form(array('name'=>'event_attend'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    </div>
</div>
<?php }?>
<div class="ow_left ow_supernarrow">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>'box','addClass'=>'ow_std_margin','iconClass'=>'ow_ic_info','langLabel'=>'event+view_page_details_block_cap_label'));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_std_margin','iconClass'=>'ow_ic_info','langLabel'=>'event+view_page_details_block_cap_label'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    <table class="ow_table_3 detail_table">
        <tr class="ow_tr_first">
            <td class="ow_label" style="width: 25%"><?php echo smarty_function_text(array('key'=>'event+view_page_date_label'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo $_smarty_tpl->tpl_vars['info']->value['date'];?>
</td>
        </tr>
        <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['endDate'])) {?>
        <tr>
            <td class="ow_label" style="width: 25%"><?php echo smarty_function_text(array('key'=>'event+view_page_end_date_label'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><?php echo $_smarty_tpl->tpl_vars['info']->value['endDate'];?>
</td>
        </tr>
        <?php }?>
        <tr>
            <td class="ow_label" style="width: 25%"><?php echo smarty_function_text(array('key'=>'event+view_page_location_label'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><div style="width:90px;"><?php echo $_smarty_tpl->tpl_vars['info']->value['location'];?>
</div></td>
        </tr>
        <tr class="ow_tr_last">
            <td class="ow_label" style="width: 25%"><?php echo smarty_function_text(array('key'=>'event+view_page_created_label'),$_smarty_tpl);?>
</td>
            <td class="ow_value"><a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['creatorLink'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['creatorName'];?>
</td>
        </tr>
        <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['categoryLabel'])) {?>
            <tr>
                <td class="ow_label" style="width: 25%"><?php echo smarty_function_text(array('key'=>'iiseventplus+view_category_label'),$_smarty_tpl);?>
</td>
                <td class="ow_value"><?php echo $_smarty_tpl->tpl_vars['info']->value['categoryLabel'];?>
</td>
            </tr>
        <?php }?>
    </table>
    <?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>'box','addClass'=>'ow_std_margin','iconClass'=>'ow_ic_info','langLabel'=>'event+view_page_details_block_cap_label'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    
    <?php echo smarty_function_add_content(array('key'=>'events.view.content.after_event_description','eventId'=>$_smarty_tpl->tpl_vars['info']->value['id']),$_smarty_tpl);?>

    
    <?php if (!empty($_smarty_tpl->tpl_vars['inviteLink']->value)) {?><div class="inviteLink ow_std_margin"><?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add','type'=>'button','langLabel'=>'event+invite_btn_label','id'=>'inviteLink'),$_smarty_tpl);?>
</div><?php }?>
    <div class="userList"><?php echo $_smarty_tpl->tpl_vars['userListCmp']->value;?>
</div>
    <div class="ow_event_files">
        <?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;?>

    </div>
</div>
<div class="ow_right ow_superwide">

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>'box','type'=>'empty','iconClass'=>'ow_ic_picture','langLabel'=>'event+view_page_image_block_cap_label','addClass'=>"ow_std_margin clearfix"));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','iconClass'=>'ow_ic_picture','langLabel'=>'event+view_page_image_block_cap_label','addClass'=>"ow_std_margin clearfix"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['image'])) {?><img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" style="float: right;margin: 5px;width: 100%;" /><?php }?>
    <?php echo $_smarty_tpl->tpl_vars['info']->value['desc'];?>

    <?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','iconClass'=>'ow_ic_picture','langLabel'=>'event+view_page_image_block_cap_label','addClass'=>"ow_std_margin clearfix"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


    <?php echo smarty_function_add_content(array('key'=>'socialsharing.get_sharing_buttons','title'=>$_smarty_tpl->tpl_vars['info']->value['title'],'description'=>$_smarty_tpl->tpl_vars['info']->value['desc'],'image'=>$_smarty_tpl->tpl_vars['info']->value['image'],'entityType'=>'event','entityId'=>$_smarty_tpl->tpl_vars['info']->value['id']),$_smarty_tpl);?>


    <?php echo smarty_function_add_content(array('key'=>'events.view.content.between_description_and_wall','eventId'=>$_smarty_tpl->tpl_vars['info']->value['id']),$_smarty_tpl);?>

    <?php if (!empty($_smarty_tpl->tpl_vars['comments']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['comments']->value;?>

    <?php }?>
</div>
</div>
<?php }
echo smarty_function_add_content(array('key'=>'events.content.view.bottom','eventId'=>$_smarty_tpl->tpl_vars['info']->value['id']),$_smarty_tpl);?>

<?php }
}
