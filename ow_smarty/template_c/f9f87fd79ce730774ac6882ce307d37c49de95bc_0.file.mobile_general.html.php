<?php
/* Smarty version 3.1.31, created on 2017-07-22 00:43:52
  from "C:\xampp\htdocs\eceshub\ow_themes\iissocialcity\mobile\master_pages\mobile_general.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59730238f15804_48248247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9f87fd79ce730774ac6882ce307d37c49de95bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_themes\\iissocialcity\\mobile\\master_pages\\mobile_general.html',
      1 => 1482301538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59730238f15804_48248247 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_component')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.component.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
?>
<div id="left" class="owm_sidebar_left">
	<div class="owm_sidebar_left_padding">
		<header>
			<div class="owm_sidebar_left_header_txt"><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['siteName']->value;?>
</a></div>
		</header>
		<div class="owm_logo"><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
"></a></div>
		<?php echo $_smarty_tpl->tpl_vars['topMenu']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['bottomMenu']->value;?>

	</div>
</div>
<div id="right" class="owm_sidebar_right">
	<div class="owm_sidebar_right_padding">

		<?php if ($_smarty_tpl->tpl_vars['isAuthenticated']->value) {?>
			<?php echo smarty_function_component(array('class'=>'BASE_MCMP_Console'),$_smarty_tpl);?>

		<?php } else { ?>
			<header><div class="owm_sidebar_right_header_txt"><?php echo smarty_function_text(array('key'=>'mobile+right_sidebar_guest_heading'),$_smarty_tpl);?>
</div></header>
			<section class="owm_sidebar_right_cont"><?php echo $_smarty_tpl->tpl_vars['signIn']->value;?>
</section>
		<?php }?>

	</div>
</div>
<div id="main" class="clearfix">
	<header id="header">
		 <nav id="head-navigation">
			<a href="<?php echo $_smarty_tpl->tpl_vars['buttonData']->value['left']['href'];?>
" class="owm_nav_menu<?php if (!empty($_smarty_tpl->tpl_vars['buttonData']->value['left']['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['buttonData']->value['left']['class'];
}?>" id="<?php echo $_smarty_tpl->tpl_vars['buttonData']->value['left']['id'];?>
"<?php echo $_smarty_tpl->tpl_vars['buttonData']->value['left']['extraString'];?>
></a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['buttonData']->value['right']['href'];?>
" class="owm_nav_profile<?php if (!empty($_smarty_tpl->tpl_vars['buttonData']->value['left']['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['buttonData']->value['right']['class'];
}?>" id="<?php echo $_smarty_tpl->tpl_vars['buttonData']->value['right']['id'];?>
"<?php echo $_smarty_tpl->tpl_vars['buttonData']->value['right']['extraString'];?>
></a>
			<a href="javascript://" class="owm_content_header_count" style="display: none;">
				 <span class="owm_content_header_count_cont"><span class="owm_content_header_count_txt" id="console-counter"></span></span>
			</a>
			<div class="owm_top_title" id="owm_heading"><?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
</div>
		 </nav>
	</header>
	<section id="content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</section>
	<div class="owm_overlay" id="owm_overlay" style="display:none;"></div>
</div>
<?php echo smarty_function_decorator(array('name'=>'floatbox','heading'=>$_smarty_tpl->tpl_vars['heading']->value),$_smarty_tpl);?>

<div class="owm_footer">
			<div class="owm_copyright">
				<?php echo smarty_function_text(array('key'=>'base+copyright','site_name'=>$_smarty_tpl->tpl_vars['site_name']->value),$_smarty_tpl);?>

			</div>
</div><?php }
}
