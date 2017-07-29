<?php
/* Smarty version 3.1.31, created on 2017-07-29 00:39:32
  from "C:\xampp\htdocs\eceshub\ow_plugins\coverphoto\views\components\forms_float_box.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597c3bb42acc39_95887180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39c0d29a5fda9c9eaece12c4cc04cc1702b6de54' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\coverphoto\\views\\components\\forms_float_box.html',
      1 => 1463982330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597c3bb42acc39_95887180 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
?>
<div class="page_description">
    <?php echo smarty_function_text(array('key'=>"coverphoto+description_coverphoto_float_page"),$_smarty_tpl);?>

</div>

<h3 class="ow_center" style="margin-bottom: 10px;"><?php echo smarty_function_text(array('key'=>"coverphoto+covers"),$_smarty_tpl);?>
<a class="new_cover" href="<?php echo $_smarty_tpl->tpl_vars['coverPhotosUrl']->value;?>
"><img class="new_cover_icon" title='<?php echo smarty_function_text(array('key'=>"coverphoto+add_more_cover_photo"),$_smarty_tpl);?>
' src="<?php echo $_smarty_tpl->tpl_vars['new_cover_icon']->value;?>
" /></a></h3>
<div class="ow_table_1 ow_form ow_stdmargin">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'listItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['listItem']->value) {
?>
    <div onmouseover="$('.cover_action', this).show();" onmouseout="$('.cover_action', this).hide();" class="coverphoto-list-item">
        <div class="ow_photo_cover_hover">
            <div class="ow_photo_cover_action">
                <a class="cover_select"  href="<?php echo $_smarty_tpl->tpl_vars['listItem']->value['deleteUrl'];?>
" onclick="if (confirm('<?php echo smarty_function_text(array('key'=>"coverphoto+are_you_sure_to_remove"),$_smarty_tpl);?>
')) return true; else return false;">
                <img title="<?php echo smarty_function_text(array('key'=>'coverphoto+delete_this_cover'),$_smarty_tpl);?>
" class="coverphoto-list-icon" src="<?php echo $_smarty_tpl->tpl_vars['listItem']->value['deleteThisCoverIcon'];?>
"/>
                </a>
                <a class="cover_select"  href="<?php echo $_smarty_tpl->tpl_vars['listItem']->value['useCoverUrl'];?>
" onclick="if (confirm('<?php echo smarty_function_text(array('key'=>"coverphoto+are_you_sure_to_use_this"),$_smarty_tpl);?>
')) return true; else return false;">
                <img title="<?php echo smarty_function_text(array('key'=>'coverphoto+use_this_cover'),$_smarty_tpl);?>
" class="coverphoto-list-icon" src="<?php echo $_smarty_tpl->tpl_vars['listItem']->value['useThisCoverIcon'];?>
"/>
                </a>
            </div>
        </div>
        <img class="coverphoto-list-image" src="<?php echo $_smarty_tpl->tpl_vars['listItem']->value['coverPhotoImageUrl'];?>
"/>

        <div class="coverphoto-title"><?php echo $_smarty_tpl->tpl_vars['listItem']->value['title'];?>
</div>
        <div class="coverphoto-date"><?php echo $_smarty_tpl->tpl_vars['listItem']->value['addDateTime'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['listItem']->value['AutherUrl'];?>
" class="coverphoto-author">(<?php echo $_smarty_tpl->tpl_vars['listItem']->value['AutherName'];?>
)</a> <?php if ($_smarty_tpl->tpl_vars['listItem']->value['isCurrent']) {?><a><img class="is_current" src="<?php echo $_smarty_tpl->tpl_vars['is_current_icon']->value;?>
" /></a><?php }?></div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    <?php if (empty($_smarty_tpl->tpl_vars['list']->value)) {?>
        <br>
        <span><?php echo smarty_function_text(array('key'=>"coverphoto+list_is_empty"),$_smarty_tpl);?>
</span>
    <?php }?>
</div>


<?php }
}
