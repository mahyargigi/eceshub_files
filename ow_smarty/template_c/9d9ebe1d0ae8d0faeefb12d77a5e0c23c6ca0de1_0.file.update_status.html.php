<?php
/* Smarty version 3.1.31, created on 2017-08-12 03:36:40
  from "C:\xampp\htdocs\eceshub\ow_plugins\newsfeed\views\components\update_status.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598eda38ba0a57_58225928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d9ebe1d0ae8d0faeefb12d77a5e0c23c6ca0de1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\newsfeed\\views\\components\\update_status.html',
      1 => 1499503962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598eda38ba0a57_58225928 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_script')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.submit.php';
if (!is_callable('smarty_function_label')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_error')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.error.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>


textarea.ow_newsfeed_status_input {
    height: 50px;
}

textarea.ow_newsfeed_status_input.invitation {
    height: 20px;
}

.newsfeed-attachment-preview {
    width: 95%;
}
.ow_side_preloader {
	float: right;
	padding: 0px 4px 0px 0px;
	margin-top: 6px;
}
.ow_side_preloader {
	display: inline-block;
	width: 16px;
	height: 16px;
	background-repeat: no-repeat;
}
<?php $_block_repeat=false;
echo smarty_block_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('script', array());
$_block_repeat=true;
echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

	
		function checkRtl( character ) {
			var RTL = ['ا','ب','پ','ت','س','ج','چ','ح','خ','د','ذ','ر','ز','ژ','س','ش','ص','ض','ط','ظ','ع','غ','ف','ق','ک','گ','ل','م','ن','و','ه','ی'];
			return RTL.indexOf( character ) > -1;
		}

		function checkLtr( character ) {
			var LTR = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
			return LTR.indexOf( character ) > -1;
		}

		function checkInput(){
			var isRtl=true;
			var inputValue = $(this).val();
			inputValue = $.trim(inputValue);
			if(inputValue.length==0){
				jQuery( this ).css( 'direction','rtl');
				isRtl =true;
				return;
			}
			for ( var indexText = 0; indexText < inputValue.length; indexText++ )
			{
				if( checkRtl(inputValue[indexText]) )
				{
					jQuery( this ).css( 'direction','rtl');
					isRtl =true;
					break;
				}else if( checkLtr(inputValue[indexText]) ){
					isRtl =false;
					break;
				}
			}
			if(!isRtl){
				jQuery( this ).css( 'direction','ltr');
			}
		}
		$('textarea').change( checkInput );
		$('textarea').keydown( checkInput );
		$('textarea').keyup( checkInput );
		$('input').change( checkInput );
		$('input').keydown( checkInput );
		$('input').keyup( checkInput );
	
<?php $_block_repeat=false;
echo smarty_block_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>"newsfeed_update_status"));
$_block_repeat=true;
echo smarty_block_form(array('name'=>"newsfeed_update_status"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

	<div class="form_auto_click">
		<div class="clearfix">
			<div class="newsfeed_update_status_picture">
			</div>
			<div class="newsfeed_update_status_info">
				<div class="ow_smallmargin"><?php echo smarty_function_input(array('name'=>"status",'class'=>"ow_newsfeed_status_input"),$_smarty_tpl);?>
</div>
			</div>
		</div>
		
                <div id="attachment_preview_<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
-oembed" class="newsfeed-attachment-preview ow_smallmargin" style="display: none;"></div>
                
                    <?php echo $_smarty_tpl->tpl_vars['attachment']->value;?>

                

		<div class="ow_submit_auto_click" style="text-align: left;">
			<div class="clearfix ow_status_update_btn_block">
				<span class="ow_attachment_btn"><?php echo smarty_function_submit(array('name'=>"save"),$_smarty_tpl);?>
</span>
				<?php if (isset($_smarty_tpl->tpl_vars['text']->value)) {?>
					<span class="ow_attachment_icons">
						<span class="ow_attachments" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
-btn-cont" >
							<span class="buttons clearfix">
								<?php echo $_smarty_tpl->tpl_vars['text']->value;?>

							</span>
						</span>
					</span>
					<span class="ow_attachment_icons" style="display: none">
				<?php } else { ?>
					<span class="ow_attachment_icons">
				<?php }?>
						<span class="ow_attachments" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
-btn-cont" >
							<span class="buttons clearfix">
								<a class="image" id="<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
-btn" href="javascript://"></a>
							</span>
						</span>
					</span>
				<?php if (isset($_smarty_tpl->tpl_vars['statusPrivacyField']->value)) {?>
				<?php echo smarty_function_label(array('name'=>'statusPrivacy'),$_smarty_tpl);?>

				<?php echo smarty_function_input(array('name'=>'statusPrivacy'),$_smarty_tpl);?>

				<?php echo smarty_function_error(array('name'=>'statusPrivacy'),$_smarty_tpl);?>

				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['statusPrivacyLabel']->value)) {?>
					<?php echo $_smarty_tpl->tpl_vars['statusPrivacyLabel']->value;?>

				<?php }?>

				<?php if (isset($_smarty_tpl->tpl_vars['attachments']->value)) {?>
					<?php echo $_smarty_tpl->tpl_vars['attachments']->value;?>

				<?php }?>
				<span class="ow_side_preloader_wrap"><span class="ow_side_preloader ow_inprogress newsfeed-status-preloader" style="display: none;"></span></span>
			</div>
		</div>
	</div>
<?php $_block_repeat=false;
echo smarty_block_form(array('name'=>"newsfeed_update_status"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
