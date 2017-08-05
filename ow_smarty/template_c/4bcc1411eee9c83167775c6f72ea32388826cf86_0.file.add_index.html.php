<?php
/* Smarty version 3.1.31, created on 2017-08-05 03:23:29
  from "C:\xampp\htdocs\eceshub\ow_plugins\video\views\controllers\add_index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59859ca1f0fc52_85059459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bcc1411eee9c83167775c6f72ea32388826cf86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\video\\views\\controllers\\add_index.html',
      1 => 1484488328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59859ca1f0fc52_85059459 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.submit.php';
?>
<p class="ow_smallmargin"><?php echo smarty_function_text(array('key'=>'video+video_add_tip'),$_smarty_tpl);?>
</p>

<div class="ow_superwide ow_automargin ow_stdmargin">
    
    <?php if (!$_smarty_tpl->tpl_vars['auth_msg']->value) {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>'videoAddForm'));
$_block_repeat=true;
echo smarty_block_form(array('name'=>'videoAddForm'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>


		<table class="ow_table_1 ow_form">
		    <tr class="ow_alt2 ow_tr_first">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'code'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'code'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'code'),$_smarty_tpl);?>
</td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'video+code_desc'),$_smarty_tpl);?>
</td>
		    </tr>
		    <tr class="ow_alt1">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'title'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'title'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'title'),$_smarty_tpl);?>
</td>
		        <td class="ow_desc"></td>
		    </tr>
            <?php if (isset($_smarty_tpl->tpl_vars['videoUploadField']->value)) {?>
            <tr class="ow_alt2">
                <td class="ow_label"><?php echo smarty_function_label(array('name'=>'videoUpload'),$_smarty_tpl);?>
</td>
                <td class="ow_value"><?php echo smarty_function_input(array('name'=>'videoUpload'),$_smarty_tpl);?>
<br /><?php echo smarty_function_error(array('name'=>'videoUpload'),$_smarty_tpl);?>
</td>
                <td class="ow_desc"><?php echo smarty_function_text(array('key'=>'iisvideoplus+video_add_upload_desc'),$_smarty_tpl);?>
</td>
            </tr>
            <?php }?>
		    <tr class="ow_alt2">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'description'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'description'),$_smarty_tpl);?>
 <br /> <?php echo smarty_function_error(array('name'=>'description'),$_smarty_tpl);?>
</td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'video+description_desc'),$_smarty_tpl);?>
</td>
		    </tr>
		    <tr class="ow_alt1 ow_tr_last">
		        <td class="ow_label"><?php echo smarty_function_label(array('name'=>'tags'),$_smarty_tpl);?>
</td>
		        <td class="ow_value"><?php echo smarty_function_input(array('name'=>'tags'),$_smarty_tpl);?>
</td>
		        <td class="ow_desc ow_small"><?php echo smarty_function_text(array('key'=>'video+tags_desc'),$_smarty_tpl);?>
</td>
		    </tr>
			<?php if (isset($_smarty_tpl->tpl_vars['statusPrivacyField']->value)) {?>
			<tr class="ow_alt1 ow_tr_last">
				<td class="ow_label"><?php echo smarty_function_label(array('name'=>'statusPrivacy'),$_smarty_tpl);?>
</td>
				<td class="ow_value"><?php echo smarty_function_input(array('name'=>'statusPrivacy'),$_smarty_tpl);?>
</td>
				<td class="ow_desc ow_small"></td>
			</tr>
			<?php }?>
		</table>
		<div class="clearfix ow_stdmargin"><div class="ow_right"><?php echo smarty_function_submit(array('name'=>'add','class'=>'ow_ic_add ow_positive'),$_smarty_tpl);?>
</div></div>
		<?php $_block_repeat=false;
echo smarty_block_form(array('name'=>'videoAddForm'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php } else { ?>
        <div class="ow_anno ow_std_margin ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['auth_msg']->value;?>
</div>
    <?php }?>

</div><?php }
}
