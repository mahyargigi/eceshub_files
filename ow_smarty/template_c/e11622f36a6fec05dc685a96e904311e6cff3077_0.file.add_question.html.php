<?php
/* Smarty version 3.1.31, created on 2017-08-06 05:53:34
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\admin\views\components\add_question.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5987114ecede15_95167647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e11622f36a6fec05dc685a96e904311e6cff3077' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\admin\\views\\components\\add_question.html',
      1 => 1469940670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5987114ecede15_95167647 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_cycle')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_libraries\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_label')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_desc')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.desc.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.submit.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    span.tag {
        border: 1px solid #DCDCDC;
        border-radius: 2px 2px 2px 2px;
        float: left;
        line-height: 22px;
        margin-bottom: 3px;
        margin-right: 4px;
    }
<?php $_block_repeat=false;
echo smarty_block_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>



<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>'qst_add_form'));
$_block_repeat=true;
echo smarty_block_form(array('name'=>'qst_add_form'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

	<table class="ow_table_1 ow_form ow_admin_add_profile_question">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formData']->value, 'field', false, 'formEl', 'f', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['formEl']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['total'];
?>
                    <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt2,ow_alt1'),$_smarty_tpl);?>
 tr_<?php echo $_smarty_tpl->tpl_vars['formEl']->value;?>
 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['first'] : null)) {?>ow_tr_first<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f']->value['last'] : null)) {?>ow_tr_last<?php }?> <?php if (empty($_smarty_tpl->tpl_vars['displayedFormElements']->value[$_smarty_tpl->tpl_vars['formEl']->value])) {?>ow_hidden<?php }?>">
                        <td class="ow_label">
                            <?php echo smarty_function_label(array('name'=>$_smarty_tpl->tpl_vars['formEl']->value),$_smarty_tpl);?>

                        </td>
                        <td class="ow_value">
                            <?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['formEl']->value),$_smarty_tpl);?>

                            <br/>
                            <?php echo smarty_function_error(array('name'=>$_smarty_tpl->tpl_vars['formEl']->value),$_smarty_tpl);?>

                        </td>
                        <td class="ow_desc ow_small"><?php echo smarty_function_desc(array('name'=>$_smarty_tpl->tpl_vars['formEl']->value),$_smarty_tpl);?>
</td>
                    </tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	</table>
    <div class="clearfix ow_stdmargin">
        <div class="ow_right">
             <?php echo smarty_function_submit(array('name'=>'qst_submit'),$_smarty_tpl);?>

        </div>
    </div>
<?php $_block_repeat=false;
echo smarty_block_form(array('name'=>'qst_add_form'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
