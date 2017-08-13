<?php
/* Smarty version 3.1.31, created on 2017-08-12 03:36:41
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\components\profile_action_toolbar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598eda393aef41_02893415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e85c9d42a97dc208722577fe08c65b4e0e351a13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\components\\profile_action_toolbar.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598eda393aef41_02893415 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ow_profile_gallery_action_toolbar ow_profile_action_toolbar_wrap clearfix ow_stdmargin">
    <ul class="ow_bl ow_profile_action_toolbar clearfix ow_small ow_left">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['toolbar']->value, 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
            <?php if (isset($_smarty_tpl->tpl_vars['action']->value['html'])) {?>
                <?php echo $_smarty_tpl->tpl_vars['action']->value['html'];?>

            <?php } elseif (isset($_smarty_tpl->tpl_vars['action']->value['extraLabel'])) {?>
                <li>
                    <?php echo $_smarty_tpl->tpl_vars['action']->value['extraLabel'];?>

                </li>
            <?php } else { ?>
                <li>
                    <a <?php echo $_smarty_tpl->tpl_vars['action']->value['attrs'];?>
 >
                        <?php echo $_smarty_tpl->tpl_vars['action']->value['label'];?>

                    </a>
                </li>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </ul>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['group']->value;?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


    <?php echo $_smarty_tpl->tpl_vars['cmpsMarkup']->value;?>

</div>
<?php }
}
