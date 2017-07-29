<?php
/* Smarty version 3.1.31, created on 2017-07-26 06:48:00
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\components\user_view_section_table.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59789d90509e97_23643943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f71db32394295507ff24e7e686ccd5a9a59eaa71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\components\\user_view_section_table.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59789d90509e97_23643943 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
?>
<table class="ow_table_3 ow_nomargin section_<?php echo $_smarty_tpl->tpl_vars['sectionName']->value;?>
 data_table" <?php if (empty($_smarty_tpl->tpl_vars['display']->value)) {?>style="display:none;"<?php }?>>
    <tr class="ow_tr_first">
        <tr class="ow_tr_first">
            <th colspan="2" class="ow_section"><span><?php echo smarty_function_text(array('key'=>"base+questions_section_".((string)$_smarty_tpl->tpl_vars['sectionName']->value)."_label"),$_smarty_tpl);?>
</span></th>
        </tr>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questions']->value, 'question', false, 'sort', 'question', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sort']->value => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['total'];
?>
        <?php if (isset($_smarty_tpl->tpl_vars['questionsData']->value[$_smarty_tpl->tpl_vars['question']->value['name']]) && !isset($_smarty_tpl->tpl_vars['questionsPrivacyIgnoreList']->value[$_smarty_tpl->tpl_vars['question']->value['id']])) {?>
            <tr class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] : null)) {?>ow_tr_last<?php }?>">
                <td class="ow_label" style="width: 20%"><?php if (empty($_smarty_tpl->tpl_vars['labels']->value[$_smarty_tpl->tpl_vars['question']->value['name']])) {
echo smarty_function_text(array('key'=>"base+questions_question_".((string)$_smarty_tpl->tpl_vars['question']->value['name'])."_label"),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['labels']->value[$_smarty_tpl->tpl_vars['question']->value['name']];
}?></td>
                <td class="ow_value"><span class="<?php if (!empty($_smarty_tpl->tpl_vars['question']->value['hidden'])) {?>ow_field_eye ow_remark profile_hidden_field<?php }?>"><?php echo $_smarty_tpl->tpl_vars['questionsData']->value[$_smarty_tpl->tpl_vars['question']->value['name']];?>
</span></td>
                <?php if (isset($_smarty_tpl->tpl_vars['isOwner']->value) && $_smarty_tpl->tpl_vars['isOwner']->value) {?>
                <td class="ow_privacy">
                    <span>
                        <?php if (empty($_smarty_tpl->tpl_vars['question']->value['hidden'])) {?>
                        <?php if (isset($_smarty_tpl->tpl_vars['questionsPrivacyButton']->value[$_smarty_tpl->tpl_vars['question']->value['id']])) {
if (isset($_smarty_tpl->tpl_vars['questionsPrivacyButton']->value[$_smarty_tpl->tpl_vars['question']->value['id']]['onClick'])) {?><a id="<?php echo $_smarty_tpl->tpl_vars['questionsPrivacyButton']->value[$_smarty_tpl->tpl_vars['question']->value['id']]['id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['questionsPrivacyButton']->value[$_smarty_tpl->tpl_vars['question']->value['id']]['onClick'];?>
"><?php }?><img class="ow_nowrap create_time ow_newsfeed_date ow_small feed_image_privacy" src="<?php echo $_smarty_tpl->tpl_vars['questionsPrivacyButton']->value[$_smarty_tpl->tpl_vars['question']->value['id']]['imgSrc'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['questionsPrivacyButton']->value[$_smarty_tpl->tpl_vars['question']->value['id']]['label'];?>
" /><?php if (isset($_smarty_tpl->tpl_vars['questionsPrivacyButton']->value[$_smarty_tpl->tpl_vars['question']->value['id']]['onClick'])) {?></a><?php }
}?>
                        <?php }?>
                    </span>
                </td>
                <?php }?>
            </tr>
        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</table>


<?php }
}
