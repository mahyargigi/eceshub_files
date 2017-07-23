<?php
/* Smarty version 3.1.31, created on 2017-07-22 00:43:53
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\mobile\decorators\floatbox.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5973023953fbf0_83252312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7848009d4018e4bdd9509e5ccb0ff0cb7b25a24b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\mobile\\decorators\\floatbox.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5973023953fbf0_83252312 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    body .owm_floatbox_wrap {
        top: 0px;
    }
    
    .owm_floatbox_preloader {
        height: 50px;
    }
<?php $_block_repeat=false;
echo smarty_block_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<div style="display: none" id="floatbox_prototype">

    <div class="owm_floatbox_wrap" data-tpl="wrap">
        <div class="owm_floatbox clearfix">
            <header data-tpl="header">
		 <nav id="head-navigation">
                    <a href="javascript://" class="owm_nav_menu" data-tpl="left-btn" style="display: none;"></a>
                    <a href="javascript://" class="owm_nav_profile" data-tpl="right-btn" style="display: none;"></a>
                    <div class="owm_top_title" data-tpl="heading"><?php echo $_smarty_tpl->tpl_vars['data']->value['heading'];?>
</div>
		 </nav>
            </header>
            <div class="owm_floatbox_cont clearfix" data-tpl="body">
                <div class="owm_preloader owm_floatbox_preloader"></div>
            </div>
        </div>
    </div>

</div><?php }
}
