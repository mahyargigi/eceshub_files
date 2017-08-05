<?php
/* Smarty version 3.1.31, created on 2017-08-05 03:19:35
  from "C:\xampp\htdocs\eceshub\ow_plugins\photo\views\components\page_head.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59859bb754b263_31323437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fba4d7b493363c20b005aad85ea4447302877c5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\photo\\views\\components\\page_head.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59859bb754b263_31323437 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_block_script')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_online_now')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.online_now.php';
if (!is_callable('smarty_function_format_date')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.format_date.php';
?>


<div class="ow_btn_delimiter ow_right">
    <?php if ($_smarty_tpl->tpl_vars['isAuthorized']->value) {?>
        <?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add','langLabel'=>'photo+create_album','onclick'=>"OW.ajaxFloatBox('PHOTO_CMP_CreateFakeAlbum', [], "."{
                title".": OW.getLanguageText('photo', 'create_album'),
                width: 500
            });"),$_smarty_tpl);?>


        <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_ic_add",'id'=>"add-new-photo-album",'langLabel'=>"photo+upload_photos",'onclick'=>((string)$_smarty_tpl->tpl_vars['url']->value)."();"),$_smarty_tpl);?>

    <?php } elseif (!empty($_smarty_tpl->tpl_vars['isPromo']->value)) {?>
        <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_ic_add",'id'=>"add-new-photo-album",'langLabel'=>"photo+create_album"),$_smarty_tpl);?>

        <?php echo smarty_function_decorator(array('name'=>"button",'class'=>"ow_ic_add",'id'=>"btn-add-new-photo",'langLabel'=>"photo+upload_photos"),$_smarty_tpl);?>


        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('script', array());
$_block_repeat=true;
echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

            $("#add-new-photo-album,#btn-add-new-photo").on("click", function()
            {
                OW.authorizationLimitedFloatbox(<?php echo $_smarty_tpl->tpl_vars['promoMsg']->value;?>
);
            });
        <?php $_block_repeat=false;
echo smarty_block_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php }?>
    <div class="ow_hidden">
        <div id="add-new-photo-album-content">
            <div style="margin-bottom: 16px;">
                <div class="ow_smallmargin">
                    <input id="add-new-photo-album-name" type="text" value="<?php echo smarty_function_text(array('key'=>"photo+album_name"),$_smarty_tpl);?>
" class="invitation">
                    <span class="ow_error" style="color: #FF0000; display: none"><?php echo smarty_function_text(array('key'=>'base+form_validator_required_error_message'),$_smarty_tpl);?>
</span>
                </div>
                <textarea id="add-new-photo-album-desc" class="invitation"><?php echo smarty_function_text(array('key'=>'photo+album_desc'),$_smarty_tpl);?>
</textarea>
            </div>
            <div style="margin-bottom: 8px;" class="clearfix">
                <div class="ow_right">
                    <span class="ow_button">
                        <span class=" ow_ic_submit ow_positive">
                            <input type="button" class="ow_ic_submit ow_positive" value="<?php echo smarty_function_text(array('key'=>'photo+add_photos'),$_smarty_tpl);?>
">
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['photoMenu']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['photoMenu']->value;?>

<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['user']->value)) {?>
    <div class="clearfix" style="margin-bottom: 12px;">
        <div class="ow_user_list_picture">
            <?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['avatar']->value),$_smarty_tpl);?>

        </div>
        <div class="ow_user_list_data">
            <a href="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['avatar']->value['title'];?>
</a>
            <div class="ow_small">
                <?php if (!empty($_smarty_tpl->tpl_vars['onlineStatus']->value)) {?>
                    <?php echo smarty_function_online_now(array('userId'=>$_smarty_tpl->tpl_vars['user']->value->id),$_smarty_tpl);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->activityStamp) {?>
                    <?php echo smarty_function_text(array('key'=>"base+user_list_activity"),$_smarty_tpl);?>
:
                    <span class="ow_remark"><?php echo smarty_function_format_date(array('timestamp'=>$_smarty_tpl->tpl_vars['user']->value->activityStamp),$_smarty_tpl);?>
</span>
                <?php }?>
            </div>
        </div>
    </div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['subMenu']->value;?>

<?php }
}
