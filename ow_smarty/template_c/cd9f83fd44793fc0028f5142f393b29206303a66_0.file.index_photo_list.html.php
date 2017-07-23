<?php
/* Smarty version 3.1.31, created on 2017-07-22 00:43:52
  from "C:\xampp\htdocs\eceshub\ow_plugins\photo\mobile\views\components\index_photo_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5973023802db16_92129357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd9f83fd44793fc0028f5142f393b29206303a66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\photo\\mobile\\views\\components\\index_photo_list.html',
      1 => 1493557652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5973023802db16_92129357 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_url_for_route')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.url_for_route.php';
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'nocontent', null);?>
    <div class="owm_nocontent"><?php echo smarty_function_text(array('key'=>'photo+no_photo'),$_smarty_tpl);?>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'cmp', null);?>
    <div id="photo_list_cmp<?php echo $_smarty_tpl->tpl_vars['uniqId']->value;?>
">
        <div class="owm_index_photo_list" id="<?php echo $_smarty_tpl->tpl_vars['items']->value['latest']['contId'];?>
">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latest']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>     
                <div class="owm_index_photo_item">
                    <a <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['title'])) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>  style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
)" href="<?php echo smarty_function_url_for_route(array('for'=>"view_photo:[id=>".((string)$_smarty_tpl->tpl_vars['p']->value['id'])."]"),$_smarty_tpl);?>
">
                        <img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                    </a>
                </div>
            <?php
}
} else {
?>

                <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </div>

        <?php if ($_smarty_tpl->tpl_vars['featured']->value) {?>
            <div class="owm_index_photo_list" id="<?php echo $_smarty_tpl->tpl_vars['items']->value['featured']['contId'];?>
" style="display:none;">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['featured']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                    <div class="owm_index_photo_item">
                        <a <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['title'])) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>  style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
)" href="<?php echo smarty_function_url_for_route(array('for'=>"view_photo:[id=>".((string)$_smarty_tpl->tpl_vars['p']->value['id'])."]"),$_smarty_tpl);?>
">
                            <img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                        </a>
                    </div>
                <?php
}
} else {
?>

                    <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['photo_friends']->value)) {?>
            <div class="owm_index_photo_list" id="<?php echo $_smarty_tpl->tpl_vars['items']->value['photo_friends']['contId'];?>
" style="display:none;">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photo_friends']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                <div class="owm_index_photo_item">
                    <a <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['title'])) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>  style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
)" href="<?php echo smarty_function_url_for_route(array('for'=>"view_photo:[id=>".((string)$_smarty_tpl->tpl_vars['p']->value['id'])."]"),$_smarty_tpl);?>
">
                        <img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                    </a>
                </div>
                <?php
}
} else {
?>

                    <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </div>
        <?php }?>

        <div class="owm_index_photo_list" id="<?php echo $_smarty_tpl->tpl_vars['items']->value['toprated']['contId'];?>
" style="display:none;">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['toprated']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                <div class="owm_index_photo_item">
                    <a <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['title'])) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>  style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
)" href="<?php echo smarty_function_url_for_route(array('for'=>"view_photo:[id=>".((string)$_smarty_tpl->tpl_vars['p']->value['id'])."]"),$_smarty_tpl);?>
">
                        <img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                    </a>
                </div>
            <?php
}
} else {
?>

                <?php echo $_smarty_tpl->tpl_vars['nocontent']->value;?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </div>
    </div>
    
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php echo $_smarty_tpl->tpl_vars['cmp']->value;
}
}
