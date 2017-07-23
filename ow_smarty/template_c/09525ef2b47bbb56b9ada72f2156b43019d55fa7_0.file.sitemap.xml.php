<?php
/* Smarty version 3.1.31, created on 2017-07-22 23:47:35
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\sitemap.xml" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59744687acb5b5_20639444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09525ef2b47bbb56b9ada72f2156b43019d55fa7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\sitemap.xml',
      1 => 1476112524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59744687acb5b5_20639444 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?xml ';?>version="1.0" encoding="UTF-8"<?php echo '?>';?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['urls']->value, 'url');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['url']->value) {
?>
    <sitemap>
        <loc><?php echo $_smarty_tpl->tpl_vars['url']->value['url'];?>
</loc>
        <lastmod><?php echo $_smarty_tpl->tpl_vars['url']->value['lastmod'];?>
</lastmod>
    </sitemap>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</sitemapindex>
<?php }
}
