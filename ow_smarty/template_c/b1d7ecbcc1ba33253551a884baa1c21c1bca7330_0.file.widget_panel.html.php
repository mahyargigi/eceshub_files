<?php
/* Smarty version 3.1.31, created on 2017-07-22 00:43:51
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\mobile\views\components\widget_panel.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597302370c5f14_34077026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1d7ecbcc1ba33253551a884baa1c21c1bca7330' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\mobile\\views\\components\\widget_panel.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597302370c5f14_34077026 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    .view_component div{
       overflow: hidden;
    }
<?php $_block_repeat=false;
echo smarty_block_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<div class="owm_std_margin_top" id="place_sections">
    <div class="place_section">

        <?php if (isset($_smarty_tpl->tpl_vars['componentList']->value['section']["mobile.main"])) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['componentList']->value['section']["mobile.main"], 'component');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['component']->value) {
?>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dd_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName'],'render'=>true),$_smarty_tpl);?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        <?php }?>

    </div>
</div><?php }
}
