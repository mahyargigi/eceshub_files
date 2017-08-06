<?php
/* Smarty version 3.1.31, created on 2017-08-06 05:48:10
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\components\comments_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5987100a999615_21041971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ec764af5ddf28942991d4939d3e5cd3a7b8e3f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\components\\comments_list.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5987100a999615_21041971 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_modifier_more')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\modifier.more.php';
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['cmpContext']->value;?>
">
    <div class="ow_comments_list">
        <?php if (!empty($_smarty_tpl->tpl_vars['countToLoad']->value) && $_smarty_tpl->tpl_vars['countToLoad']->value > 0) {?>
        <div class="ow_comment_list_loader ow_feed_comments_viewall ow_small">
            <a href="javascript://">+<span><?php echo $_smarty_tpl->tpl_vars['countToLoad']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['loadMoreLabel']->value;?>
</a>
        </div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['noComments']->value)) {?>
        <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>"base+comment_no_comments"),$_smarty_tpl);?>
</div>
        <?php } else { ?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
        <div class="ow_comments_item clearfix">
            <div class="cnx_action" style="display: none"><?php echo $_smarty_tpl->tpl_vars['comment']->value['cnxAction'];?>
</div>
            <div class="ow_comments_item_picture">
                <?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['comment']->value['avatar']),$_smarty_tpl);?>

            </div>
            <div class="ow_comments_item_info">
                <span class="<?php if (!empty($_smarty_tpl->tpl_vars['comment']->value['cnxAction'])) {?>ow_comments_date_hover <?php }?>ow_comments_date ow_nowrap ow_tiny ow_remark"><?php echo $_smarty_tpl->tpl_vars['comment']->value['date'];?>
</span>
                <div class="ow_comments_item_header"><a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['profileUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['displayName'];?>
</a></div>
                <div class="ow_comments_content ow_smallmargin">
                    <?php if (!empty($_smarty_tpl->tpl_vars['comment']->value['previewMaxChar'])) {?>
                    <?php echo smarty_modifier_more($_smarty_tpl->tpl_vars['comment']->value['content'],$_smarty_tpl->tpl_vars['comment']->value['previewMaxChar']);?>

                    <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>

                    <?php }?>
                </div><?php echo $_smarty_tpl->tpl_vars['comment']->value['content_add'];?>

            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        <?php }?>
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['pages']->value)) {?>
    <div class="ow_paging clearfix ow_stdmargin">
        <span><?php echo smarty_function_text(array('key'=>'base+pages_label'),$_smarty_tpl);?>
</span>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
        <?php if (!isset($_smarty_tpl->tpl_vars['page']->value['pageIndex'])) {?>
        <span><?php echo $_smarty_tpl->tpl_vars['page']->value['label'];?>
</span>
        <?php } else { ?>
        <a href="javascript://" class="page-<?php echo $_smarty_tpl->tpl_vars['page']->value['pageIndex'];
if (isset($_smarty_tpl->tpl_vars['page']->value['active']) && $_smarty_tpl->tpl_vars['page']->value['active']) {?> active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['page']->value['label'];?>
</a>
        <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </div>
    <?php }?>
</div>
<?php }
}
