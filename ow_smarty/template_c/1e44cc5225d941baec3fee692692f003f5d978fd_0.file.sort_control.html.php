<?php
/* Smarty version 3.1.31, created on 2017-08-05 03:19:34
  from "C:\xampp\htdocs\eceshub\ow_plugins\photo\views\components\sort_control.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59859bb68e01a7_70231626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e44cc5225d941baec3fee692692f003f5d978fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\photo\\views\\components\\sort_control.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59859bb68e01a7_70231626 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
?>


<div class="ow_box_menu ow_fw_menu">
    <span class="ow_explore_photos_show"><?php echo smarty_function_text(array('key'=>"photo+show_by"),$_smarty_tpl);?>
:</span>
    <div class="ow_fw_btns">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['itemList']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" list-type="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['isActive']) {?> class="active"<?php }?>>
                <span><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span>
            </a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['initSearchEngine']->value)) {?>
        <div id="photo-list-search" class="ow_right">
            <div class="ow_searchbar clearfix">
                <div class="ow_searchbar_input ow_left">
                    <input id="search-photo" type="text" class="invitation" placeholder="<?php echo smarty_function_text(array('key'=>'photo+search_invitation'),$_smarty_tpl);?>
" value="<?php if (!empty($_smarty_tpl->tpl_vars['tag']->value)) {
echo $_smarty_tpl->tpl_vars['tag']->value;
}?>">
                    <div class="ow_searchbar_ac_wrap">
                        <ul class="ow_searchbar_ac" style="display: none"></ul>
                        <div class="ow_hidden">
                            <li class="hash-prototype browse-photo-search clearfix" style="display: none">
                                <div class="ow_search_result_tag"></div>
                                <span class="ow_searchbar_ac_count ow_right"></span>
                            </li>
                            <li class="user-prototype browse-photo-search clearfix" style="display: none">
                                <div class="ow_search_result_user ow_mini_avatar ow_left">
                                    <div class="ow_avatar">
                                        <img style="max-width: 100%;" alt="" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D">
                                    </div>
                                    <span class="ow_searchbar_username ow_small"></span>
                                </div>
                                <span class="ow_searchbar_ac_count ow_right"></span>
                            </li>
                        </div>
                    </div>
                    <div class="ow_btn_close_search"></div>
                </div>
                <span class="ow_searchbar_btn ow_ic_lens ow_cursor_pointer ow_left"></span>
            </div>
        </div>
    <?php }?>
</div>
<?php }
}
