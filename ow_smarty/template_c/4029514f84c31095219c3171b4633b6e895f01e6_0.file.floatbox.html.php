<?php
/* Smarty version 3.1.31, created on 2017-08-12 00:53:19
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\decorators\floatbox.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598eb3efddc107_49208750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4029514f84c31095219c3171b4633b6e895f01e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\decorators\\floatbox.html',
      1 => 1465407510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598eb3efddc107_49208750 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
?>

<div style="display: none" id="floatbox_prototype">

    
    <div class="default">
        <div class="floatbox_canvas floatbox_default">
            <div class="floatbox_preloader_container">
                <div class="floatbox_preloader ow_floatbox_preloader"></div>
            </div>

            <div class="floatbox_container">
				<div class="ow_bg_color">
					<div class="floatbox_header">
						<div class="clearfix floatbox_cap">
							<h3 class="floatbox_title"></h3>
							<div class="ow_box_cap_icons clearfix">
								<a title='<?php echo smarty_function_text(array('key'=>"base+close"),$_smarty_tpl);?>
' class="ow_ic_delete close" href="javascript://"></a>
							</div>
					   </div>
					</div>
					<div class="floatbox_body"></div>
					<div class="floatbox_bottom"></div>
				</div>
            </div>
        </div>
    </div>

    
    <div class="empty">
        <div class="floatbox_canvas floatbox_empty">
            <div class="floatbox_preloader_container">
                <div class="floatbox_preloader ow_floatbox_preloader"></div>
            </div>

            <div class="floatbox_container">
				<div class="ow_bg_color">
					<div class="floatbox_header">
						<div class="ow_box_cap_icons clearfix">
							<a title='<?php echo smarty_function_text(array('key'=>"base+close"),$_smarty_tpl);?>
' class="ow_ic_delete close" href="javascript://"></a>
						</div>
					</div>
					<div class="floatbox_body"></div>
					<div class="floatbox_bottom"></div>
				</div>
            </div>
        </div>
    </div>

</div><?php }
}
