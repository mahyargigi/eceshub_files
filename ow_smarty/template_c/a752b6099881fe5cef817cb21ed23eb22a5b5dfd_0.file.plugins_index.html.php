<?php
/* Smarty version 3.1.31, created on 2017-07-31 09:40:40
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\admin\views\controllers\plugins_index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597f5d88cc7c42_40878937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a752b6099881fe5cef817cb21ed23eb22a5b5dfd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\admin\\views\\controllers\\plugins_index.html',
      1 => 1466402692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597f5d88cc7c42_40878937 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_block_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>


.ow_active_plugins tr, .ow_inactive_plugins tr{
    border-top:1px solid #ccc;
}
.ow_plugin_controls{
    display:none;
}
.ow_plugin_update{
    background:#ddddaa;
}

<?php $_block_repeat=false;
echo smarty_block_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_plugin','langLabel'=>'admin+manage_plugins_active_box_cap_label'));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_plugin','langLabel'=>'admin+manage_plugins_active_box_cap_label'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

   <table class="ow_superwide ow_active_plugins" style="margin:0 auto;">
   	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugins']->value['active'], 'plugin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
?>
        <tr class="ow_high1<?php if ($_smarty_tpl->tpl_vars['plugin']->value['update_url']) {?> ow_plugin_update<?php }
if (!empty($_smarty_tpl->tpl_vars['plugin']->value['license_url'])) {?> ow_plugin_invalid<?php }?>" onmouseover="$('span.ow_plugin_controls', $(this)).css({display:'block'});" onmouseout="$('span.ow_plugin_controls', $(this)).css({display:'none'});">
         <td style="padding: 10px 15px;">
         	<b><?php echo $_smarty_tpl->tpl_vars['plugin']->value['title'];?>
</b>
            <div class="ow_small"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['description'];?>
</div>
         </td>
         <td class="ow_small" style="text-align:right;width:235px;vertical-align:middle;">
             <span class="ow_plugin_controls">
                    <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['license_url'])) {?><a class="ow_lbutton ow_green" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['license_url'];?>
"><?php echo smarty_function_text(array('key'=>'admin+manage_plugins_add_license_label'),$_smarty_tpl);?>
</a><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['plugin']->value['update_url']) {?><a class="ow_lbutton ow_green" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['update_url'];?>
"><?php echo smarty_function_text(array('key'=>'admin+manage_plugins_update_button_label'),$_smarty_tpl);?>
</a><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['plugin']->value['set_url'] && empty($_smarty_tpl->tpl_vars['plugin']->value['license_url'])) {?><a class="ow_lbutton" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['set_url'];?>
"><?php echo smarty_function_text(array('key'=>'admin+manage_plugins_settings_button_label'),$_smarty_tpl);?>
</a><?php }?>
                    <a class="ow_lbutton ow_red" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['deact_url'];?>
"><?php echo smarty_function_text(array('key'=>'admin+manage_plugins_deactivate_button_label'),$_smarty_tpl);?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['plugin']->value['un_url']) {?><a class="ow_lbutton ow_red" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['un_url'];?>
"><?php echo smarty_function_text(array('key'=>'admin+manage_plugins_uninstall_button_label'),$_smarty_tpl);?>
</a><?php }?>
                </span>
         </td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

   </table>
<?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_plugin','langLabel'=>'admin+manage_plugins_active_box_cap_label'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_trash','langLabel'=>'admin+manage_plugins_inactive_box_cap_label'));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_trash','langLabel'=>'admin+manage_plugins_inactive_box_cap_label'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

   <table class="ow_superwide ow_inactive_plugins" style="margin:0 auto;">
   	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugins']->value['inactive'], 'plugin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
?>
      <tr class="ow_high2<?php if ($_smarty_tpl->tpl_vars['plugin']->value['update_url']) {?> ow_plugin_update<?php }
if (!empty($_smarty_tpl->tpl_vars['plugin']->value['license_url'])) {?> ow_plugin_invalid<?php }?>" onmouseover="$('span.ow_plugin_controls', $(this)).css({display:'block'});" onmouseout="$('span.ow_plugin_controls', $(this)).css({display:'none'});">
         <td style="padding: 10px 15px;">
            <b><?php echo $_smarty_tpl->tpl_vars['plugin']->value['title'];?>
</b>
            <div class="ow_small"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['description'];?>
</div>
         </td>
         <td class="ow_small" style="text-align:right;width:235px;vertical-align:middle;">
             <span class="ow_plugin_controls">
                 <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['license_url'])) {?><a class="ow_lbutton ow_red" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['license_url'];?>
"><?php echo smarty_function_text(array('key'=>'admin+manage_plugins_add_license_label'),$_smarty_tpl);?>
</a>
                 <?php } else { ?>    
                <a class="ow_lbutton ow_green" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['active_url'];?>
"><?php echo smarty_function_text(array('key'=>'admin+manage_plugins_activate_button_label'),$_smarty_tpl);?>
</a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['plugin']->value['un_url']) {?><a class="ow_lbutton ow_red" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['un_url'];?>
"><?php echo smarty_function_text(array('key'=>'admin+manage_plugins_uninstall_button_label'),$_smarty_tpl);?>
</a><?php }?>
             </span>
         </td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

   </table>
<?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','addClass'=>'ow_stdmargin','iconClass'=>'ow_ic_trash','langLabel'=>'admin+manage_plugins_inactive_box_cap_label'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
