<?php
/* Smarty version 3.1.31, created on 2017-08-06 05:53:28
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\admin\views\controllers\questions_account_types.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598711481ea897_20418070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2532cb44ab31718ae15fa734c17c69c951127f3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\admin\\views\\controllers\\questions_account_types.html',
      1 => 1494660052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598711481ea897_20418070 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_script')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_url_for')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.url_for.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_cycle')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_libraries\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_math')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_libraries\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('script', array());
$_block_repeat=true;
echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>


window.editLangValue = function editLangValue(_prefix, _key, _callback){

    if ( !window.question_langs_floatbox_display )
    {
        window.question_langs_floatbox_display = true;
        $.post( '<?php echo smarty_function_url_for(array('for'=>"ADMIN_CTRL_Languages:ajaxEditLanguageValuesForm"),$_smarty_tpl);?>
?prefix='+_prefix+'&key='+_key, {}, function(json){
            if(document['ajaxLangValueEditForms'] == undefined)
                    {
                        document['ajaxLangValueEditForms'] = [];
                    }

            document['ajaxLangValueEditForms'][_prefix+'-'+_key] = new OW_FloatBox({$title: '<?php echo smarty_function_text(array('key'=>"admin+questions_edit_section_name_title"),$_smarty_tpl);?>
', $contents: json['markup'], width: 556});
                    document['ajaxLangValueEditForms'][_prefix+'-'+_key+'callback'] = _callback;

            document['ajaxLangValueEditForms'][_prefix+'-'+_key].bind("close", function() {
                window.question_langs_floatbox_display = false;
            });

            OW.addScriptFiles(json['include_js'], function(){ OW.addScript(json['js']); });

        }, 'json');
    }
}

<?php $_block_repeat=false;
echo smarty_block_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<div class="ow_admin_profile_questions_list_div">

    <table class="ow_table_2 ow_smallmargin ow_lables_table">
        <tr class="ow_tr_first">
            <th colspan="4" class="ow_tr_top_empty ow_txtleft">
                <?php echo smarty_function_text(array('key'=>"admin+questions_page_description"),$_smarty_tpl);?>

            </th>
            <th colspan="<?php echo $_smarty_tpl->tpl_vars['accountTypesCount']->value;?>
" class="ow_tr_top">
                <div class="ow_tr_top_buttons">
                    <div class="ow_tr_top_button ow_tr_top_button_selected" ><div><?php echo smarty_function_text(array('key'=>'admin+question_menu_account_types'),$_smarty_tpl);?>
</div></div>
                    <div class="ow_tr_top_button" onclick='window.location.href="<?php echo $_smarty_tpl->tpl_vars['propertiesUrl']->value;?>
"'><div><?php echo smarty_function_text(array('key'=>'admin+question_menu_properties'),$_smarty_tpl);?>
</div></div>
                </div>
            </th>
        </tr>
        <tr class="ow_tr_last ow_tr_titles">
            <th class="question_label_th"   ><div class="question_label_div"><?php echo smarty_function_text(array('key'=>'admin+question_column_question'),$_smarty_tpl);?>
</div></th>
            <th class="question_account_type_th"><div class="question_account_type_div"><?php echo smarty_function_text(array('key'=>'admin+question_column_type'),$_smarty_tpl);?>
</div></th>
            <th class="question_values_th"><div class="question_values_div"><?php echo smarty_function_text(array('key'=>'admin+question_column_values'),$_smarty_tpl);?>
</div></th>
            <th class="question_buttons_th" ><div class="question_buttons_div"></div></th>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accountTypeDtoList']->value, 'accountType');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['accountType']->value) {
?>
                <th class="ow_small account_type_th" style="width:<?php echo $_smarty_tpl->tpl_vars['td_width']->value;?>
px;" data-accounttype="<?php echo $_smarty_tpl->tpl_vars['accountType']->value->name;?>
">
                    <div style="width:<?php echo $_smarty_tpl->tpl_vars['div_width']->value;?>
px;position:relative;">
                        <input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['accountType']->value->name;?>
'>
                        <div class="account_type_menu" style="position:absolute;top: -8px; right: -8px;display:none;"><?php echo $_smarty_tpl->tpl_vars['accountTypeMenu']->value;?>
</div>
                        <div class="table_content_block"style="overflow:hidden; font-weight: normal;"><?php echo smarty_function_text(array('key'=>"base+questions_account_type_".((string)$_smarty_tpl->tpl_vars['accountType']->value->name)),$_smarty_tpl);?>
</div>

                    </div>
                </th>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <th class="ow_small account_type_th" style="width:<?php echo $_smarty_tpl->tpl_vars['td_width']->value;?>
px;">
                <div class="table_content_block" style="width:<?php echo $_smarty_tpl->tpl_vars['div_width']->value;?>
px;overflow:hidden; font-weight: normal;"><a class="add_account_type" href="javascript://"><?php echo smarty_function_text(array('key'=>"base+questions_add_account_type"),$_smarty_tpl);?>
</div>
            </th>
        </tr>
    </table>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questionsBySections']->value, 'questions', false, 'section');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['questions']->value) {
?>
    <table class="ow_table_2 ow_smallmargin ow_admin_profile_questions_list <?php if (!$_smarty_tpl->tpl_vars['section']->value) {?>no_section<?php } else {
echo $_smarty_tpl->tpl_vars['section']->value;
}?>" sectionName=<?php if ($_smarty_tpl->tpl_vars['section']->value) {?>"<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
"<?php } else { ?>"no_section"<?php }?>>
        <tr class="question_section_tr ow_tr_first">
            <th class="section_value <?php if ($_smarty_tpl->tpl_vars['section']->value) {?>ow_admin_profile_question_dnd_cursor<?php }?>" colspan="<?php echo $_smarty_tpl->tpl_vars['tableColumnCount']->value;?>
">
               <div class="ow_section_label" ><?php if ($_smarty_tpl->tpl_vars['section']->value) {
echo smarty_function_text(array('key'=>"base+questions_section_".((string)$_smarty_tpl->tpl_vars['section']->value)."_label"),$_smarty_tpl);
} else {
echo smarty_function_text(array('key'=>"base+questions_no_section_label"),$_smarty_tpl);
}?></div>
                   <div class="delete_edit_buttons quest_buttons ow_right">
                        <?php if ($_smarty_tpl->tpl_vars['section']->value) {?>
                            <a href="javascript://" class="ow_lbutton edit_sectionNameLang" style="visibility:hidden;" ><?php echo smarty_function_text(array('key'=>'admin+btn_label_edit'),$_smarty_tpl);?>
</a>
                            <?php if ($_smarty_tpl->tpl_vars['sectionList']->value[$_smarty_tpl->tpl_vars['section']->value]->isDeletable) {?>
                                <a  href="javascript://" class="ow_lbutton ow_red section_delete_button" style="visibility:hidden;" ><?php echo smarty_function_text(array('key'=>'admin+btn_label_delete'),$_smarty_tpl);?>
</a>
                            <?php }?>
                        <?php }?>
                    </div>

            </th>
        </tr>
       <?php if (isset($_smarty_tpl->tpl_vars['questions']->value)) {?>
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questions']->value, 'question', false, NULL, 'question', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['total'];
?>
                  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "evenstyle", null, null);
echo smarty_function_cycle(array('name'=>"acc_".((string)$_smarty_tpl->tpl_vars['section']->value),'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                  <tr class="question_tr ow_admin_profile_question_dnd_cursor <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] : null)) {?>ow_tr_last<?php }?>" question_name="<?php echo $_smarty_tpl->tpl_vars['question']->value['name'];?>
">
                    <td class="question_label_td <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'evenstyle');?>
 ow_txtleft" >
                        <div class="question_label_div ow_overflow_hidden"  ><?php echo smarty_function_text(array('key'=>"base+questions_question_".((string)$_smarty_tpl->tpl_vars['question']->value['name'])."_label"),$_smarty_tpl);?>
</div>
                    </td>
                    <td class="question_account_type_td <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'evenstyle');?>
 ow_small" >
                        <div class="question_account_type_div ow_overflow_hidden" ><?php echo smarty_function_text(array('key'=>"base+questions_question_presentation_".((string)$_smarty_tpl->tpl_vars['question']->value['presentation'])."_label"),$_smarty_tpl);?>
</div>
                    </td>
                    <td class="question_values_td question_values_type_td <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'evenstyle');?>
 ow_small">
                        <?php if (!empty($_smarty_tpl->tpl_vars['previewValues']->value[$_smarty_tpl->tpl_vars['question']->value['name']])) {?>
                            <div class="question_values_div"><?php echo $_smarty_tpl->tpl_vars['previewValues']->value[$_smarty_tpl->tpl_vars['question']->value['name']];?>
</div>
                            
                        <?php } else { ?>
                            <?php if (isset($_smarty_tpl->tpl_vars['questionValues']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['values'])) {?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['question']->value['parentUrl'])) {?>
                                    <div class="question_values_div ow_overflow_hidden"><?php echo smarty_function_text(array('key'=>'admin+questions_matched_question_values','label'=>$_smarty_tpl->tpl_vars['question']->value['parentLabel'],'parentId'=>$_smarty_tpl->tpl_vars['question']->value['parentId'],'url'=>$_smarty_tpl->tpl_vars['question']->value['parentUrl']),$_smarty_tpl);?>
</div>
                                <?php } else { ?>
                                <div class="question_values_div">
                                    <center><a class="question_values" href="javascript://"><?php echo smarty_function_text(array('key'=>"admin+questions_values_count",'count'=>$_smarty_tpl->tpl_vars['questionValues']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['count']),$_smarty_tpl);?>
</a></center>

                                    <div style="padding:0 0 0 15px;text-align:left;display:none;width:100px;overflow:hidden;" >
                                        <ul style="list-style-type:disc;">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questionValues']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['values'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                                    <li><?php echo $_smarty_tpl->tpl_vars['valueLabels']->value[$_smarty_tpl->tpl_vars['question']->value['name']][$_smarty_tpl->tpl_vars['value']->value->value];?>
</li>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                        </ul>
                                    </div>
                                </div>
                                <?php }?>
                            <?php } else { ?>
                                <div class="question_values_div"></div>
                            <?php }?>
                        <?php }?>
                    </td>

                    <td class="question_buttons_td <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'evenstyle');?>
 ow_nowrap quest_buttons <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'evenstyle');?>
">
                            
                                <?php if (!empty($_smarty_tpl->tpl_vars['deleteEditButtons']->value[$_smarty_tpl->tpl_vars['question']->value['name']])) {?>
                                    <div class="question_buttons_div ow_overflow_hidden">
                                        <?php echo $_smarty_tpl->tpl_vars['deleteEditButtons']->value[$_smarty_tpl->tpl_vars['question']->value['name']];?>

                                    </div>
                                <?php } else { ?>
                                    <div class="question_buttons_div delete_edit_buttons ow_overflow_hidden">
                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
">
                                        <a href="javascript://" class="ow_lbutton question_edit_button" style="visibility:hidden;"><?php echo smarty_function_text(array('key'=>'admin+btn_label_edit'),$_smarty_tpl);?>
</a>
                                        <?php if ($_smarty_tpl->tpl_vars['question']->value['base'] != 1 && $_smarty_tpl->tpl_vars['question']->value['removable'] == 1 && empty($_smarty_tpl->tpl_vars['question']->value['parentUrl'])) {?>
                                            <a href="javascript://" class="ow_lbutton ow_red question_delete_button" style="visibility:hidden;"><?php echo smarty_function_text(array('key'=>'admin+btn_label_delete'),$_smarty_tpl);?>
</a>
                                        <?php }?>
                                    </div>
                                <?php }?>
                            
                    </td>
                    <?php if (!empty($_smarty_tpl->tpl_vars['accountTypesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']])) {?>
                        <td class="ow_small ow_lightweigh <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'evenstyle');?>
" colspan="<?php echo $_smarty_tpl->tpl_vars['accountTypesCount']->value;?>
" style="width:<?php echo smarty_function_math(array('equation'=>"count*(width)",'count'=>$_smarty_tpl->tpl_vars['accountTypesCount']->value,'width'=>$_smarty_tpl->tpl_vars['td_width']->value),$_smarty_tpl);?>
px">
                            <div style="width:<?php echo smarty_function_math(array('equation'=>"count*(width) - 18",'count'=>$_smarty_tpl->tpl_vars['accountTypesCount']->value,'width'=>$_smarty_tpl->tpl_vars['td_width']->value),$_smarty_tpl);?>
px;overflow:hidden;"><?php echo $_smarty_tpl->tpl_vars['accountTypesCheckboxContent']->value[$_smarty_tpl->tpl_vars['question']->value['name']];?>
</div>
                        </td>
                    <?php } else { ?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accountTypeDtoList']->value, 'accountType');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['accountType']->value) {
?>
                            <td class="account_type_td ow_small ow_lightweigh <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'evenstyle');?>
" data-accounttype="<?php echo $_smarty_tpl->tpl_vars['accountType']->value->name;?>
"  style="width:<?php echo $_smarty_tpl->tpl_vars['td_width']->value;?>
px">
                                <div style="width:<?php echo $_smarty_tpl->tpl_vars['div_width']->value;?>
px;overflow:hidden;">
                                    <div class="<?php echo $_smarty_tpl->tpl_vars['accountType']->value->name;?>
 ow_checkbox
                                         <?php if ($_smarty_tpl->tpl_vars['questionList']->value[$_smarty_tpl->tpl_vars['question']->value['name']]['disable_account_type'] == 1) {?>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['accountTypesToQuestionsDtoList']->value[$_smarty_tpl->tpl_vars['question']->value['name']][$_smarty_tpl->tpl_vars['accountType']->value->name])) {?>
                                                ow_checkbox_cell_marked_lock
                                            <?php } else { ?>
                                                ow_checkbox_cell_lock
                                            <?php }?>
                                         <?php } else { ?>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['accountTypesToQuestionsDtoList']->value[$_smarty_tpl->tpl_vars['question']->value['name']][$_smarty_tpl->tpl_vars['accountType']->value->name])) {?>
                                                ow_checkbox_cell_marked
                                            <?php } else { ?>
                                                ow_checkbox_cell
                                            <?php }?>
                                         <?php }?>"></div>
                                </div>
                            </td>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        
                        <td class="ow_small ow_lightweigh <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'evenstyle');?>
" style="width:<?php echo $_smarty_tpl->tpl_vars['td_width']->value;?>
px">
                                <div class="account_type_empty" style="width:<?php echo $_smarty_tpl->tpl_vars['div_width']->value;?>
px;overflow:hidden"></div>
                        </td>
                    <?php }?>
                 </tr>
           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        <?php }?>

        <tr class="question_tr no_question" style="display:none;">
            <td colspan="9"></td>
        </tr>

        <tr class="ow_tr_delimiter"><td colspan="9"></td></tr>
    </table>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</div>
<div class="clearfix ow_std_margin">
    <div class="ow_right">
        <?php echo smarty_function_decorator(array('name'=>'button','class'=>"ow_ic_add add_new_question_button ow_positive",'langLabel'=>'admin+questions_add_question_button'),$_smarty_tpl);?>

        <?php echo smarty_function_decorator(array('name'=>'button','class'=>"ow_ic_add add_new_section_button ow_positive",'langLabel'=>'admin+questions_add_section_button'),$_smarty_tpl);?>

    </div>
</div>
<?php }
}
