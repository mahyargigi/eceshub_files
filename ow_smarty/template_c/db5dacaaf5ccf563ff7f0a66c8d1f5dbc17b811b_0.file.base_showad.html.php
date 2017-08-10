<?php
/* Smarty version 3.1.31, created on 2017-08-10 07:11:47
  from "C:\xampp\htdocs\eceshub\ow_plugins\jobads\views\controllers\base_showad.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598c69a36619d7_13261230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db5dacaaf5ccf563ff7f0a66c8d1f5dbc17b811b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\jobads\\views\\controllers\\base_showad.html',
      1 => 1502353895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598c69a36619d7_13261230 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

.skills-div{
display:inline-block;
padding-right:10px;
padding-left: 10px;
padding-bottom: 5px;
padding-top: 5px;
background-color: #54bfdd;
color: white;
margin-left: 10px;
border-radius: 5px;
}
<?php $_block_repeat=false;
echo smarty_block_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="ow_right">
    <img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['image'];?>
" >
    <br>
    <h2>توضیحات:</h2>
    <h4 style="color: #9d9d9d"><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</h4>
    <br>
    <?php if ($_smarty_tpl->tpl_vars['existStartup']->value == true) {?>
        <h2>استارتاپ</h2>
        <a href="/eceshub/startups/startup/<?php echo $_smarty_tpl->tpl_vars['startupId']->value;?>
">
            <h4 style="color: #9d9d9d"><?php echo $_smarty_tpl->tpl_vars['startup']->value->title;?>
</h4>
        </a>
        <br>
    <?php }?>
    <h2>ایمیل:</h2>
    <h4 style="color: #9d9d9d"><?php echo $_smarty_tpl->tpl_vars['info']->value['email'];?>
</h4>
    <h2>توانایی های مورد نیاز:</h2>
    <br>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value['skills'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <div class="skills-div">
            <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</div><?php }
}
