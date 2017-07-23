<?php
/* Smarty version 3.1.31, created on 2017-07-22 00:43:53
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\mobile\views\components\console.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59730239375063_30652675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f20a8f563500d5db269fa3a9eb81b8bc6917b3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\mobile\\views\\components\\console.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59730239375063_30652675 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
<div class="owm_sidebar_right_header_menu">
    <ul class="owm_sidebar_console clearfix">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page', false, NULL, 'p', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['index'];
?>
        <li class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['first'] : null)) {?>owm_sidebar_console_item_active <?php }?>owm_sidebar_console_item owm_sidebar_console_<?php echo $_smarty_tpl->tpl_vars['page']->value['key'];?>
">
            <a class="owm_sidebar_console_item_url" href="javascript://" id="console-tab-<?php echo $_smarty_tpl->tpl_vars['page']->value['key'];?>
" data-key="<?php echo $_smarty_tpl->tpl_vars['page']->value['key'];?>
">
                <span class="owm_sidebar_count"<?php if (!$_smarty_tpl->tpl_vars['page']->value['counter']) {?> style="display: none;"<?php }?>>
                    <span class="owm_sidebar_count_txt"><?php if ($_smarty_tpl->tpl_vars['page']->value['counter']) {
echo $_smarty_tpl->tpl_vars['page']->value['counter'];
}?></span>
                </span>
            </a>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </ul>
</div>
</header>

<section class="owm_sidebar_right_cont">
    <div id="console_body"></div>
    <div id="console_preloader"></div>
</section><?php }
}
