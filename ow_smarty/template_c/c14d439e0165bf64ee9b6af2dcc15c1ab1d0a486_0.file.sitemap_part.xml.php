<?php
/* Smarty version 3.1.31, created on 2017-07-22 23:46:33
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\sitemap_part.xml" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597446497d4b21_41033951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c14d439e0165bf64ee9b6af2dcc15c1ab1d0a486' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\sitemap_part.xml',
      1 => 1476112524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597446497d4b21_41033951 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?xml ';?>version="1.0" encoding="UTF-8"<?php echo '?>';?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['urls']->value, 'url');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['url']->value) {
?>
    <url>
        <changefreq><?php echo $_smarty_tpl->tpl_vars['url']->value['changefreq'];?>
</changefreq>
        <priority><?php echo $_smarty_tpl->tpl_vars['url']->value['priority'];?>
</priority>
        <loc><?php echo $_smarty_tpl->tpl_vars['url']->value['url'];?>
</loc>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['url']->value['alternateLanguages'], 'langData');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['langData']->value) {
?>
        <xhtml:link rel="alternate" hreflang="<?php echo $_smarty_tpl->tpl_vars['langData']->value['code'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['langData']->value['url'];?>
" />
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </url>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</urlset>
<?php }
}
