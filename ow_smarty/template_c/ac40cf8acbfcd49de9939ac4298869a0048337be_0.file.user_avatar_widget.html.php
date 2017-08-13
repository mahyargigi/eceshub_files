<?php
/* Smarty version 3.1.31, created on 2017-08-12 03:36:34
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\components\user_avatar_widget.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598eda32b690f7_84874265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac40cf8acbfcd49de9939ac4298869a0048337be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\components\\user_avatar_widget.html',
      1 => 1493557652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598eda32b690f7_84874265 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_script')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_online_now')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.online_now.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    .ow_avatar_console .ow_avatar_label {
        bottom: 5px;
        right: 5px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
    }
    #avatar_console_image {
        background-repeat: no-repeat;
        background-position: center center;
        position:relative;
        width: 100%;
    }
<?php $_block_repeat=false;
echo smarty_block_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php if ($_smarty_tpl->tpl_vars['owner']->value || $_smarty_tpl->tpl_vars['moderation']->value) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('script', array());
$_block_repeat=true;
echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

        
        (function(){
            $("#avatar-console").hover(
              function(){
                $("#avatar-change").fadeIn("fast");
                $("#avatar-approve").fadeIn("fast");
              },
              function(){
                $("#avatar-change").fadeOut("fast");
                $("#avatar-approve").fadeOut("fast");
              }
          );            
       }());
       
    <?php $_block_repeat=false;
echo smarty_block_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }?>


<div class="ow_avatar_console ow_center" id="avatar-console">
    <div id="avatar_console_image" style="height: <?php echo $_smarty_tpl->tpl_vars['avatarSize']->value;?>
px; background-image: url(<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
);">
        
        <div class="ow_avatar_pending_approval" style="<?php if (!$_smarty_tpl->tpl_vars['hasAvatar']->value || $_smarty_tpl->tpl_vars['isModerator']->value || !$_smarty_tpl->tpl_vars['owner']->value || !$_smarty_tpl->tpl_vars['isModerator']->value && !empty($_smarty_tpl->tpl_vars['avatarDto']->value) && $_smarty_tpl->tpl_vars['avatarDto']->value->status == 'active') {?>display:none;<?php } else {
}?>position: absolute; top: 0; right: 0; left: 0; bottom: 0; background-color: rgba(0,0,0,0.6); color: #fff; padding: 8px;"><?php echo smarty_function_text(array('key'=>'base+avatar_pending_approval'),$_smarty_tpl);?>
</div>

        <?php if ($_smarty_tpl->tpl_vars['owner']->value) {?>
            <div class="ow_avatar_button ow_avatar_change" id="avatar-change" style="display: none">
                <a class="ow_lbutton" href="javascript://"><?php echo smarty_function_text(array('key'=>'base+avatar_change'),$_smarty_tpl);?>
</a>
            </div>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['moderation']->value) {?>
            <div class="ow_avatar_button ow_avatar_change" id="avatar-approve" style="display: none">
                <a class="ow_lbutton" href="javascript://"><?php echo smarty_function_text(array('key'=>'base+approve'),$_smarty_tpl);?>
</a>
            </div>
        <?php }?>
        
        <?php if (isset($_smarty_tpl->tpl_vars['role']->value['label'])) {?><span class="ow_avatar_label <?php if ($_smarty_tpl->tpl_vars['isUserOnline']->value) {?>avatar_console_label<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['role']->value['custom'])) {?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['role']->value['custom'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['role']->value['label'];?>
</span><?php }?>
    </div>
    <div class="user_online_wrap"><?php echo smarty_function_online_now(array('userId'=>$_smarty_tpl->tpl_vars['userId']->value),$_smarty_tpl);?>
</div>
</div><?php }
}
