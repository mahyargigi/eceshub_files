<?php
/* Smarty version 3.1.31, created on 2017-07-22 00:43:52
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\mobile\decorators\box_toolbar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597302385008b2_94640467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cece452a103f50eaf3b2c4e05b6d6071e0c23ff4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\mobile\\decorators\\box_toolbar.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597302385008b2_94640467 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="owm_box_toolbar">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['itemList'], 'item', false, NULL, 'toolbar', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>    
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "toolbarCommonAttrs", null, null);?> <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['item']->value['click'])) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['item']->value['click'];?>
"<?php }?> style="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['display'])) {?>display: <?php echo $_smarty_tpl->tpl_vars['item']->value['display'];
}?>" <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];
}?>"<?php if (isset($_smarty_tpl->tpl_vars['item']->value['title'])) {?> title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['href'])) {?>
        <a <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'toolbarCommonAttrs');?>
 <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['rel'])) {?>rel="<?php echo $_smarty_tpl->tpl_vars['item']->value['rel'];?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
">
            <span>
    <?php } else { ?>
        <span <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'toolbarCommonAttrs');?>
>
    <?php }?>
    
    <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>

    
    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['href'])) {?>
            </span>
        </a>
    <?php } else { ?>
        </span>
    <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</div>

<?php }
}
