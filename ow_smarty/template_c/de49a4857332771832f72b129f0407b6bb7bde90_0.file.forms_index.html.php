<?php
/* Smarty version 3.1.31, created on 2017-07-29 00:36:45
  from "C:\xampp\htdocs\eceshub\ow_plugins\coverphoto\views\controllers\forms_index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597c3b0dce90c6_16496956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de49a4857332771832f72b129f0407b6bb7bde90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\coverphoto\\views\\controllers\\forms_index.html',
      1 => 1463982330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597c3b0dce90c6_16496956 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.submit.php';
?>
<div class="page_description">
    <?php echo smarty_function_text(array('key'=>"coverphoto+description_coverphoto_page"),$_smarty_tpl);?>

</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>"coverphoto_form"));
$_block_repeat=true;
echo smarty_block_form(array('name'=>"coverphoto_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

<table class="ow_table_1 ow_form ow_stdmargin">
    <tr class="ow_alt1 ow_tr_first">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'title'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'title'),$_smarty_tpl);
echo smarty_function_error(array('name'=>'title'),$_smarty_tpl);?>
</td>
    </tr>
    <tr class="ow_alt2 ow_tr_first">
        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'image'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'image'),$_smarty_tpl);
echo smarty_function_error(array('name'=>'image'),$_smarty_tpl);?>
</td>
    </tr>
</table>
<div class="clearfix ow_submit ow_stdmargin">
    <div class="ow_right"><?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_ic_add ow_positive'),$_smarty_tpl);?>
</div>
</div>
<?php $_block_repeat=false;
echo smarty_block_form(array('name'=>"coverphoto_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php if ($_smarty_tpl->tpl_vars['list']->value) {?><h3 class="ow_center" style="margin-bottom: 10px;"><?php echo smarty_function_text(array('key'=>"coverphoto+covers"),$_smarty_tpl);?>
</h3><?php }?>
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

</div>

<?php }
}
