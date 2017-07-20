<?php
/* Smarty version 3.1.31, created on 2017-07-20 06:58:07
  from "C:\xampp\htdocs\eceshub\ow_themes\iissocialcity\master_pages\blank.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5970b6ef6305d7_68708154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35d7c7583755ec4799ef31622c61900b6e273934' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_themes\\iissocialcity\\master_pages\\blank.html',
      1 => 1472389440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5970b6ef6305d7_68708154 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
?>
<div class="ow_page_wrap">
	<div class="ow_site_panel clearfix">
	</div>
	<div class="ow_header">
        <div class="ow_header_pic"></div>
	</div>
	<div class="ow_page_padding">
		<div class="ow_page_container">
			<div class="ow_canvas">
				<div class="ow_page ow_bg_color clearfix">
					<div class="ow_content">
						<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ow_footer">
	<div class="ow_canvas">
		<div class="ow_page clearfix">
			<div class="ow_copyright">
				<?php echo smarty_function_text(array('key'=>'base+copyright','site_name'=>$_smarty_tpl->tpl_vars['site_name']->value),$_smarty_tpl);?>

			</div>
			<div class="ow_logos">
				<?php echo $_smarty_tpl->tpl_vars['bottomPoweredByLink']->value;?>

			</div>
		</div>
	</div>
</div>
<?php echo smarty_function_decorator(array('name'=>'floatbox'),$_smarty_tpl);?>

<?php echo '<script'; ?>
 type="text/javascript">
	$('.ow_sign_up').after($('.ow_sign_in'));
	$('<div class="clearfix"></div>').appendTo($('.ow_sign_in'));
	$('.ow_sign_in > .clearfix').append($('.ow_form_options .ow_button'));
	$('.ow_sign_in > .clearfix').append($('.ow_sign_up p:last-child a'));
	$('.ow_sign_in > .clearfix').after($('.ow_connect_buttons .clearfix'));
<?php echo '</script'; ?>
>
<?php }
}
