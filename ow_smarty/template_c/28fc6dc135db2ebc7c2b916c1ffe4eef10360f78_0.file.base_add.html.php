<?php
/* Smarty version 3.1.31, created on 2017-07-29 02:41:23
  from "C:\xampp\htdocs\eceshub\ow_plugins\event\views\controllers\base_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597c58434c4af2_96461350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28fc6dc135db2ebc7c2b916c1ffe4eef10360f78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\event\\views\\controllers\\base_add.html',
      1 => 1493557652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597c58434c4af2_96461350 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.submit.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>



.ow_event_time {
    padding-left: 3px;
}


<?php $_block_repeat=false;
echo smarty_block_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>



<div class="ow_superwide ow_automargin">

    <?php if (empty($_smarty_tpl->tpl_vars['err_msg']->value)) {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>'event_add'));
$_block_repeat=true;
echo smarty_block_form(array('name'=>'event_add'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

		<table class="ow_table_1 ow_form ow_stdmargin">
            <tr class="ow_alt2 ow_tr_first">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'title'),$_smarty_tpl);?>
</td>
                <td class="ow_value"><?php echo smarty_function_input(array('name'=>'title'),$_smarty_tpl);
echo smarty_function_error(array('name'=>'title'),$_smarty_tpl);?>
</td>
		    </tr>
		    <tr class="ow_alt1">
		        <td class="ow_label"><?php echo smarty_function_text(array('key'=>'event+add_form_date_label'),$_smarty_tpl);?>
</td>
                <td class="ow_value">
                    <div class="clearfix">
						<div class="ow_left ow_event_time"><?php echo smarty_function_input(array('name'=>'start_time'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'start_time'),$_smarty_tpl);?>
</div>
						<div class="ow_left ow_event_date"><?php echo smarty_function_input(array('name'=>'start_date'),$_smarty_tpl);
echo smarty_function_error(array('name'=>'start_date'),$_smarty_tpl);?>
</div>
                    </div>
                </td>
		    </tr>
            <tr class="ow_alt2" id="<?php echo $_smarty_tpl->tpl_vars['tdId']->value;?>
">
                <td class="ow_label"><?php echo smarty_function_text(array('key'=>'event+add_form_end_date_label'),$_smarty_tpl);?>
 <input type="checkbox" name="endDateFlag" id="<?php echo $_smarty_tpl->tpl_vars['chId']->value;?>
"<?php if (!empty($_smarty_tpl->tpl_vars['endDateFlag']->value)) {?> checked="checked"<?php }?> /></td>
		        <td class="ow_value">
                    <div class="clearfix">
						<div class="ow_left ow_event_time"><?php if (!empty($_smarty_tpl->tpl_vars['endDateFlag']->value)) {
echo smarty_function_input(array('name'=>'end_time'),$_smarty_tpl);
} else {
echo smarty_function_input(array('name'=>'end_time','disabled'=>'disabled'),$_smarty_tpl);
}?><br /><?php echo smarty_function_error(array('name'=>'end_time'),$_smarty_tpl);?>
</div>
						<div id='end_date_div' class="ow_left ow_event_date" style='display:none'>
							<?php if (!empty($_smarty_tpl->tpl_vars['endDateFlag']->value)) {
echo smarty_function_input(array('name'=>'end_date'),$_smarty_tpl);
} else {
echo smarty_function_input(array('name'=>'end_date','disabled'=>'disabled'),$_smarty_tpl);
}
echo smarty_function_error(array('name'=>'end_date'),$_smarty_tpl);?>
</div>
                    </div>
                </td>
		    </tr>
            <tr class="ow_alt1">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'desc'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'desc'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'desc'),$_smarty_tpl);?>
</td>
		    </tr>
            <tr class="ow_alt2">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'location'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'location'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'location'),$_smarty_tpl);?>
</td>
		    </tr>
            <tr class="ow_alt1">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'image'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'image'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'image'),$_smarty_tpl);?>
</td>
		    </tr>
            <tr class="ow_alt2">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'who_can_view'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'who_can_view'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'who_can_view'),$_smarty_tpl);?>
</td>
		    </tr>
            <tr class="ow_alt1 ow_tr_last">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'who_can_invite'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'who_can_invite'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'who_can_invite'),$_smarty_tpl);?>
</td>
		    </tr>
            <?php if (isset($_smarty_tpl->tpl_vars['hasCategoryFilter']->value)) {?>
                <tr class="ow_alt2">
                    <td class="ow_label"><?php echo smarty_function_text(array('key'=>'iiseventplus+choose_category'),$_smarty_tpl);?>
</td>
                    <td class="ow_value"><?php echo smarty_function_input(array('name'=>'categoryStatus'),$_smarty_tpl);?>
 <br /> </td>
                </tr>
            <?php }?>
		</table>
		<div class="clearfix ow_submit ow_stdmargin">
			<div class="ow_right"><?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_ic_add ow_positive'),$_smarty_tpl);?>
</div>
		</div>
		<?php $_block_repeat=false;
echo smarty_block_form(array('name'=>'event_add'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php } else { ?>
        <div class="ow_anno ow_std_margin ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['err_msg']->value;?>
</div>
    <?php }?>
</div><?php }
}
