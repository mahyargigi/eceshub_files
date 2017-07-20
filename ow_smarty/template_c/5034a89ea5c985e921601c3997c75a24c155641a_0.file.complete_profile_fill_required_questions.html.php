<?php
/* Smarty version 3.1.31, created on 2017-07-20 06:58:00
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\controllers\complete_profile_fill_required_questions.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5970b6e82e54d9_78712190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5034a89ea5c985e921601c3997c75a24c155641a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\controllers\\complete_profile_fill_required_questions.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5970b6e82e54d9_78712190 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_cycle')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_libraries\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_label')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_question_description_lang')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.question_description_lang.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.submit.php';
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>


    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>"box_cap",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;",'langLabel'=>"base+required_profile_questions"));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>"box_cap",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;",'langLabel'=>"base+required_profile_questions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    <?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>"box_cap",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;",'langLabel'=>"base+required_profile_questions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>'requiredQuestionsForm'));
$_block_repeat=true;
echo smarty_block_form(array('name'=>'requiredQuestionsForm'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

        <table class="ow_table_1 ow_form ow_stdmargin">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questionArray']->value, 'questions', false, 'section', 'question', array (
  'last' => true,
  'first' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['questions']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['total'];
?>

                <?php if (!empty($_smarty_tpl->tpl_vars['section']->value)) {?>
                    <tr class="ow_tr_first"><th colspan="3"><?php echo smarty_function_text(array('key'=>"base+questions_section_".((string)$_smarty_tpl->tpl_vars['section']->value)."_label"),$_smarty_tpl);?>
</th></tr>
                <?php }?>
                
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questions']->value, 'question', false, NULL, 'question', array (
  'last' => true,
  'first' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['total'];
?>
                    <?php echo smarty_function_cycle(array('assign'=>'alt','name'=>$_smarty_tpl->tpl_vars['section']->value,'values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>

                    <tr class=" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] : null)) {?>ow_tr_last<?php }?>">
                        <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_label">
                            <?php echo smarty_function_label(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>

                        </td>
                        <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_value">
                            <?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>

                            <div style="height:1px;"></div>
                            <?php echo smarty_function_error(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>

                        </td>
                        <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_desc ow_small">
                            <?php echo smarty_function_question_description_lang(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>

                        </td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


                <?php if (!empty($_smarty_tpl->tpl_vars['section']->value)) {?>
                    <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['first'] : null)) {?>
                        <tr class="ow_tr_delimiter"><td></td></tr>
                    <?php }?>
                <?php }?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </table>
        <div class="clearfix ow_stdmargin">
           <div class="ow_right">
               <?php echo smarty_function_submit(array('name'=>'submit'),$_smarty_tpl);?>

           </div>
        </div>
    <?php $_block_repeat=false;
echo smarty_block_form(array('name'=>'requiredQuestionsForm'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
