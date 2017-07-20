<?php
/* Smarty version 3.1.31, created on 2017-07-20 06:58:07
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\controllers\base_document_install_completed.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5970b6ef321623_33417779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2c8445563f4b90893bf6d0e73367066a7fff753' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\controllers\\base_document_install_completed.html',
      1 => 1471935544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5970b6ef321623_33417779 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_url_for_route')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.url_for_route.php';
?>
<div class="ow_txtcenter">
    <h1 class="ow_icon_control ow_ic_ok ow_smallmargin">
       فرایند نصب تمام شد.
    </h1>
    <p>
       رفتن به
       <a href="<?php echo smarty_function_url_for_route(array('for'=>'base_index'),$_smarty_tpl);?>
">صفحه اصلی</a> یا <a href="<?php echo smarty_function_url_for_route(array('for'=>'admin_default'),$_smarty_tpl);?>
">صفحه مدیریتی</a>
    </p>
</div>
<?php }
}
