<?php
/* Smarty version 3.1.31, created on 2017-08-05 03:51:41
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\components\context_action.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5985a33dee90e2_32879283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '579c7e18303217dda5c3c156f5ece523edcf4a71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\components\\context_action.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5985a33dee90e2_32879283 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.block_decorator.php';
?>
<div class="ow_context_action_block clearfix <?php if (!empty($_smarty_tpl->tpl_vars['class']->value)) {
echo $_smarty_tpl->tpl_vars['class']->value;
}?>">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'a');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
?>
        <div class="ow_context_action">
			<?php if ($_smarty_tpl->tpl_vars['a']->value['action']->getLabel()) {?>
			<a href="<?php if ($_smarty_tpl->tpl_vars['a']->value['action']->getUrl() != null) {
echo $_smarty_tpl->tpl_vars['a']->value['action']->getUrl();
} else { ?>javascript://<?php }?>"<?php if ($_smarty_tpl->tpl_vars['a']->value['action']->getId() != null) {?> id="<?php echo $_smarty_tpl->tpl_vars['a']->value['action']->getId();?>
"<?php }
if ($_smarty_tpl->tpl_vars['a']->value['action']->getAttributes()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['a']->value['action']->getAttributes(), 'attr', false, 'aname');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['aname']->value => $_smarty_tpl->tpl_vars['attr']->value) {
?> <?php echo $_smarty_tpl->tpl_vars['aname']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['attr']->value;?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>class="ow_context_action_value<?php if ($_smarty_tpl->tpl_vars['a']->value['action']->getClass() != null) {?> <?php echo $_smarty_tpl->tpl_vars['a']->value['action']->getClass();
}?>"><?php echo $_smarty_tpl->tpl_vars['a']->value['action']->getLabel();?>
</a><?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['a']->value['subactions'])) {?>
			<span class="ow_context_more"></span>

			<!-- div class="ow_context_action_wrap" -->
			    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'tooltipClass', null);
if ($_smarty_tpl->tpl_vars['a']->value['action']->getClass() != null) {
echo $_smarty_tpl->tpl_vars['a']->value['action']->getClass();?>
_tooltip<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			    
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>'tooltip','addClass'=>((string)$_smarty_tpl->tpl_vars['tooltipClass']->value)." ow_small ".((string)$_smarty_tpl->tpl_vars['position']->value)));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>'tooltip','addClass'=>((string)$_smarty_tpl->tpl_vars['tooltipClass']->value)." ow_small ".((string)$_smarty_tpl->tpl_vars['position']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

				<ul class="ow_context_action_list ow_border">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['a']->value['subactions'], 'subact');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subact']->value) {
?>
					<li><a href="<?php if ($_smarty_tpl->tpl_vars['subact']->value->getUrl() != null) {
echo $_smarty_tpl->tpl_vars['subact']->value->getUrl();
} else { ?>javascript://<?php }?>"<?php if ($_smarty_tpl->tpl_vars['subact']->value->getId() != null) {?> id="<?php echo $_smarty_tpl->tpl_vars['subact']->value->getId();?>
"<?php }
if ($_smarty_tpl->tpl_vars['subact']->value->getClass() != null) {?> class="<?php echo $_smarty_tpl->tpl_vars['subact']->value->getClass();?>
"<?php }
if ($_smarty_tpl->tpl_vars['subact']->value->getAttributes()) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subact']->value->getAttributes(), 'sattr', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['sattr']->value) {
?> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['sattr']->value;?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>><?php echo $_smarty_tpl->tpl_vars['subact']->value->getLabel();?>
</a></li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				</ul>
                <?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>'tooltip','addClass'=>((string)$_smarty_tpl->tpl_vars['tooltipClass']->value)." ow_small ".((string)$_smarty_tpl->tpl_vars['position']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

			<!-- /div -->
			<?php }?>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</div><?php }
}
