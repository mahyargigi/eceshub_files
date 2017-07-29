<?php
/* Smarty version 3.1.31, created on 2017-07-26 06:48:01
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\controllers\component_panel.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59789d91c672c5_70753596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09e0aaa87e8a25c9331f18459d8da2c6a3a77e90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\controllers\\component_panel.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59789d91c672c5_70753596 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['permissionMessage']->value)) {?>
    <div class="ow_anno ow_center">
        <?php echo $_smarty_tpl->tpl_vars['permissionMessage']->value;?>

    </div>
<?php } else { ?>
	<?php if (isset($_smarty_tpl->tpl_vars['profileActionToolbar']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['profileActionToolbar']->value;?>

	<?php }?>

	<?php echo $_smarty_tpl->tpl_vars['componentPanel']->value;?>

<?php }
}
}
