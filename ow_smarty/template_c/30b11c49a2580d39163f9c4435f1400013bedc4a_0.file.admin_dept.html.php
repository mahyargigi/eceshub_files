<?php
/* Smarty version 3.1.31, created on 2017-08-02 08:04:38
  from "C:\xampp\htdocs\eceshub\ow_plugins\contactus\views\controllers\admin_dept.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5981ea06487b42_13324672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30b11c49a2580d39163f9c4435f1400013bedc4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\contactus\\views\\controllers\\admin_dept.html',
      1 => 1501230948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5981ea06487b42_13324672 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_libraries\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.submit.php';
?>
<table class="ow_table_1 ow_automargin" style="width: 400px;">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
    <tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>
">
        <td width="1"><a href="<?php echo $_smarty_tpl->tpl_vars['deleteUrls']->value[$_smarty_tpl->tpl_vars['contact']->value['name']];?>
" onclick="return confirm('<?php echo smarty_function_text(array('key'=>"base+are_you_sure"),$_smarty_tpl);?>
');" style="width:16px; height:16px; display:block; margin:0 auto;background-repeat:no-repeat;background-position: 50% 50%;" class="ow_ic_delete"></a></td>
        <td><?php echo $_smarty_tpl->tpl_vars['contact']->value['email'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['contact']->value['label'];?>
</td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</table>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>'add_dept'));
$_block_repeat=true;
echo smarty_block_form(array('name'=>'add_dept'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

<table class="ow_table_1 ow_form ow_automargin" style="width: 400px;">
    <tr class="ow_alt1">
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'email'),$_smarty_tpl);?>
</td>
        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'label'),$_smarty_tpl);?>
</td>
    </tr>
    <tr>
        <td class="ow_center" colspan="2"><?php echo smarty_function_submit(array('name'=>'add','class'=>'ow_button ow_ic_save'),$_smarty_tpl);?>
</td>
    </tr>
</table>
<?php $_block_repeat=false;
echo smarty_block_form(array('name'=>'add_dept'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
