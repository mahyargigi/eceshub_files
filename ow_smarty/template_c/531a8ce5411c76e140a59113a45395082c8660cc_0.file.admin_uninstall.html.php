<?php
/* Smarty version 3.1.31, created on 2017-08-05 03:22:26
  from "C:\xampp\htdocs\eceshub\ow_plugins\photo\views\controllers\admin_uninstall.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59859c62df8fa3_12860609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '531a8ce5411c76e140a59113a45395082c8660cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\photo\\views\\controllers\\admin_uninstall.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59859c62df8fa3_12860609 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
?>

<div class="ow_automargin ow_wide">
<?php if ($_smarty_tpl->tpl_vars['inprogress']->value) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>'box','iconClass'=>'ow_ic_clock','langLabel'=>'photo+uninstall_inprogress'));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_clock','langLabel'=>'photo+uninstall_inprogress'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

        <?php echo smarty_function_text(array('key'=>'photo+uninstall_inprogress_desc'),$_smarty_tpl);?>

    <?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_clock','langLabel'=>'photo+uninstall_inprogress'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php } else { ?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>'box','iconClass'=>'ow_ic_warning','langLabel'=>'photo+delete_content_warning'));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_warning','langLabel'=>'photo+delete_content_warning'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

	<form id="form_delete" method="post">
	    <input type="hidden" name="action" value="delete_content" />
	    <div class="ow_smallmargin"><?php echo smarty_function_text(array('key'=>'photo+delete_content_desc'),$_smarty_tpl);?>
</div>
	    <div class="ow_txtright">
	    <?php echo smarty_function_decorator(array('name'=>'button','type'=>'submit','id'=>'btn-delete-content','langLabel'=>'photo+delete_content','class'=>'ow_ic_delete'),$_smarty_tpl);?>

	    </div>
	</form>
	<?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>'box','iconClass'=>'ow_ic_warning','langLabel'=>'photo+delete_content_warning'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }?>
</div><?php }
}
