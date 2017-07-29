<?php
/* Smarty version 3.1.31, created on 2017-07-29 00:40:09
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\components\sign_in.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597c3bd9222d04_07745722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b117730a145ef268006279494027320be0e55b3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\components\\sign_in.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597c3bd9222d04_07745722 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_block_block_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.submit.php';
if (!is_callable('smarty_function_label')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_url_for_route')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_component')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.component.php';
?>
<div class="ow_sign_in_wrap">
<h2><?php echo $_smarty_tpl->tpl_vars['siteName']->value;?>
</h2>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>'sign-in'));
$_block_repeat=true;
echo smarty_block_form(array('name'=>'sign-in'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

     <div class="clearfix">
        <div class="ow_sign_in">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>'box','langLabel'=>'base+base_sign_in_cap_label'));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>'box','langLabel'=>'base+base_sign_in_cap_label'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>


                <div class="ow_user_name">
                    <?php echo smarty_function_input(array('name'=>'identity'),$_smarty_tpl);?>

                </div>
                <div class="ow_password">
                    <?php echo smarty_function_input(array('name'=>'password'),$_smarty_tpl);?>

                </div>

            <?php if (isset($_smarty_tpl->tpl_vars['display_login_captcha']->value) && $_smarty_tpl->tpl_vars['display_login_captcha']->value) {?>
                <div class="ow_form_options clearfix" style="text-align: center;">
                    <?php echo smarty_function_input(array('name'=>'captchaField'),$_smarty_tpl);?>

                    <?php echo smarty_function_error(array('name'=>'captchaField'),$_smarty_tpl);?>

                </div>
            <?php }?>

                <div class="ow_form_options clearfix">
                    <div class="ow_right">
                        <?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_positive'),$_smarty_tpl);?>

                    </div>
                    <p class="ow_remember_me"><?php echo smarty_function_input(array('name'=>'remember'),$_smarty_tpl);
echo smarty_function_label(array('name'=>'remember'),$_smarty_tpl);?>
</p>
                    <p class="ow_forgot_pass"><a href="<?php echo smarty_function_url_for_route(array('for'=>'base_forgot_password'),$_smarty_tpl);?>
"><?php echo smarty_function_text(array('key'=>'base+forgot_password_label'),$_smarty_tpl);?>
</a></p>
                </div>
            <?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>'box','langLabel'=>'base+base_sign_in_cap_label'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <div class="ow_connect_buttons">
                <?php echo smarty_function_component(array('class'=>'BASE_CMP_SignInButtonList'),$_smarty_tpl);?>

            </div>
        </div>
        <div class="ow_sign_up">
            <p><?php echo smarty_function_text(array('key'=>'base+base_sign_in_txt'),$_smarty_tpl);?>
</p>
            <hr>
            <p> <a href="<?php echo $_smarty_tpl->tpl_vars['joinUrl']->value;?>
"><?php echo smarty_function_text(array('key'=>'base+join_submit_button_join'),$_smarty_tpl);?>
</a></p>
        </div>
     </div>
<?php $_block_repeat=false;
echo smarty_block_form(array('name'=>'sign-in'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

</div><?php }
}
