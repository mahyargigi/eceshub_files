<?php
/* Smarty version 3.1.31, created on 2017-08-12 00:53:18
  from "C:\xampp\htdocs\eceshub\ow_themes\iissocialcity\master_pages\general.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598eb3ee1e2204_17929895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4405c4d5d9a0e92892b0ff33eac9e1477d99d620' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_themes\\iissocialcity\\master_pages\\general.html',
      1 => 1472925290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598eb3ee1e2204_17929895 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_component')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.component.php';
if (!is_callable('smarty_function_add_content')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.add_content.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
?>
<div class="ow_page_wrap">
	<div class="ow_header">
        <div class="ow_header_pic">
        	<img src="<?php echo $_smarty_tpl->tpl_vars['themeImagesUrl']->value;?>
header_temp.png" style="visibility: hidden; width: 100%;" />
        </div>
	</div>
	<div class="ow_menu_fullpage">
		<div class="ow_menu_fullpage_wrap"><?php echo $_smarty_tpl->tpl_vars['main_menu']->value;?>
</div>
	</div>
	<div class="ow_site_panel clearfix">
			<a class="ow_logo ow_left" href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
"></a>
			<div class="ow_nav_btn"></div>
			<div class="ow_console_right">
				<?php echo smarty_function_component(array('class'=>'BASE_CMP_Console'),$_smarty_tpl);?>

			</div>
			<div class="ow_menu_wrap"><?php echo smarty_function_component(array('class'=>'BASE_CMP_MainMenu','responsive'=>true),$_smarty_tpl);?>
</div>
	</div>
	<div class="ow_page_padding">
		<div class="ow_page_container">
			<div class="ow_canvas">
				<div class="ow_page ow_bg_color clearfix">
					<h1 class="ow_stdmargin <?php echo $_smarty_tpl->tpl_vars['heading_icon_class']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
</h1>
					<div class="ow_content clearfix">
						<?php echo smarty_function_add_content(array('key'=>'base.add_page_top_content'),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

						<?php echo smarty_function_add_content(array('key'=>'base.add_page_bottom_content'),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ow_footer">
	<div class="ow_canvas">
		<div class="ow_page clearfix">
			<?php echo $_smarty_tpl->tpl_vars['bottom_menu']->value;?>

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
	$(window).scroll(function() {
	var $menuwrappos = $('.ow_menu_wrap').offset().top;
    if ($(this).scrollTop() > $menuwrappos) { 
        $('.ow_page_wrap').addClass('ow_hidden_menu');
    }
    else {
    	$('.ow_page_wrap').removeClass('ow_hidden_menu');
    }
	});
	$('.ow_nav_btn').click(function() {
    	if ($('body').hasClass('ow_menu_active')) {
    		$('body').removeClass('ow_menu_active');
    	}
    	else {
    		$('body').addClass('ow_menu_active');
    	}
    })
    $('.ow_menu_fullpage_wrap a').click(function() {
    	$('body').removeClass('ow_menu_active');
    })
<?php echo '</script'; ?>
><?php }
}
