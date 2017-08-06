<?php
/* Smarty version 3.1.31, created on 2017-08-06 05:48:10
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\components\comments.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5987100ad92a62_65052733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f60feaa24c4d0d68d42e5f0f8f5660bb76a7a2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\components\\comments.html',
      1 => 1466402692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5987100ad92a62_65052733 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_block_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.block_decorator.php';
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['cmpContext']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['mini']->value) {?>ow_comments_mipc<?php } else { ?>ow_comments_ipc<?php }
if ($_smarty_tpl->tpl_vars['bottomList']->value) {?> ow_comments_form_top<?php }
if (empty($_smarty_tpl->tpl_vars['formCmp']->value)) {?> ow_comments_no_form<?php }?>">
   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'comments', null, null);?>
   <?php if ($_smarty_tpl->tpl_vars['topList']->value) {?>
   <div class="comments_list_cont">
	   <?php echo $_smarty_tpl->tpl_vars['commentList']->value;?>

   </div>
   <?php }?>
   <?php if (isset($_smarty_tpl->tpl_vars['formCmp']->value)) {?>
      <div class="ow_comments_form_wrap_pre" style="display:none;"></div>
      <div class="ow_comments_form_wrap">
      <div class="ow_comments_input_wrap clearfix">
            <div class="ow_comments_item_picture"><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['currentUserInfo']->value),$_smarty_tpl);?>
</div>
            <div class="ow_comments_item_info clearfix"><span class="comment_add_arr"></span>
                <div class="ow_comments_input">
                    <span class="ow_attachment_icons">
                        <div class="ow_attachments clearfix">
                            <?php if (!empty($_smarty_tpl->tpl_vars['attch']->value)) {?><a href="javascript://" class="image" id="<?php echo $_smarty_tpl->tpl_vars['buttonContId']->value;?>
"><?php }?>
                                
                            </a>
                        </div>
                    </span>
                    <textarea id="<?php echo $_smarty_tpl->tpl_vars['taId']->value;?>
" class="comments_fake_autoclick" placeholder="<?php echo smarty_function_text(array('key'=>'base+comment_form_element_invitation_text','escape'=>true),$_smarty_tpl);?>
"></textarea>
                </div>
            </div>
        </div>
        <?php if (!empty($_smarty_tpl->tpl_vars['attch']->value)) {
echo $_smarty_tpl->tpl_vars['attch']->value;
}?>
        <div id="<?php echo $_smarty_tpl->tpl_vars['attchId']->value;?>
"></div>
        
        <div class="clearfix comments_hidden_btn" style="display:none;">
        <span class="ow_attachment_btn"><?php echo smarty_function_decorator(array('name'=>'button','langLabel'=>'base+btn_label_send'),$_smarty_tpl);?>
</span>
        </div>
        
        </div>
    <?php } else { ?>
      <div class="ow_smallmargin ow_center ow_comments_msg"><?php echo $_smarty_tpl->tpl_vars['authErrorMessage']->value;?>
</div>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['bottomList']->value) {?>
   <div class="comments_list_cont">
	   <?php echo $_smarty_tpl->tpl_vars['commentList']->value;?>

   </div>
   <?php }?>
   <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
   <?php if ($_smarty_tpl->tpl_vars['wrapInBox']->value) {?>
   <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_add_comments_form ow_stdmargin','langLabel'=>'base+comment_box_cap_label','iconClass'=>'ow_ic_comment'));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_add_comments_form ow_stdmargin','langLabel'=>'base+comment_box_cap_label','iconClass'=>'ow_ic_comment'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

   <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'comments');?>

   <?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_add_comments_form ow_stdmargin','langLabel'=>'base+comment_box_cap_label','iconClass'=>'ow_ic_comment'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

   <?php } else { ?>
   <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'comments');?>

   <?php }?>
</div><?php }
}
