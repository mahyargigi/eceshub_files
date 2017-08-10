<?php
/* Smarty version 3.1.31, created on 2017-08-10 07:11:44
  from "C:\xampp\htdocs\eceshub\ow_plugins\jobads\views\controllers\base_index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598c69a0400a85_55820030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '485a35e97002f9d183638855fa298aba32528a66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\jobads\\views\\controllers\\base_index.html',
      1 => 1502023291,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598c69a0400a85_55820030 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

.ad-div{
    display: inline-block;
    width: 30%;
    border: solid;
    border-radius: 5px;
    border-color: #899191;
    border-width: 2px;
}
.right-ad-div{
    margin-left: 10%;
    margin-right: 5%;
}
.ad-image{
    width: 100%;
    height: 100px;
}
.skills-div{
    display:inline-block;
    padding-right:10px;
    padding-left: 10px;
    padding-bottom: 5px;
    padding-top: 5px;
    background-color: #54bfdd;
    color: white;
    margin-left: 3%;
    margin-right: 3%;
    margin-bottom: 3%;
    margin-top: 2%;
    border-radius: 5px;
}
.right-margin{
    margin-right: 3%;
    margin-top: 2%;
}
.more-info{
    float: left;
    margin-left: 5%;
    margin-bottom: 1%;
    border-radius: 5px;
    background-color:#77c59a;
    color: white;
    padding:2%;
}
.delete-ad{
    float: left;
    margin-bottom: 1%;
    margin-left:2%;
    border-radius: 5px;
    background-color: #ee256d;
    color: white;
    padding:2%;
    padding-right: 3%;
    padding=left: 3%;
}
<?php $_block_repeat=false;
echo smarty_block_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['count']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['count']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
    <?php if ($_smarty_tpl->tpl_vars['i']->value%2 == 0) {?>

        <div class="ad-div right-ad-div">
            <img src="http://localhost/eceshub/ow_userfiles/plugins/jobads/girls-1000.png" class="ad-image">
            <label class="right-margin"><?php echo $_smarty_tpl->tpl_vars['allAds']->value[$_smarty_tpl->tpl_vars['i']->value]->description;?>
</label>
            <br>
            <br>
            <label class="right-margin">توانایی ها:</label>
            <br>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allAds']->value[$_smarty_tpl->tpl_vars['i']->value]->skills, 'item');
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

            <br>
            <?php if ($_smarty_tpl->tpl_vars['allAds']->value[$_smarty_tpl->tpl_vars['i']->value]->isOwner == true) {?>
            <a href="/eceshub/jobads/deletead/<?php echo $_smarty_tpl->tpl_vars['allAds']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
">
                <div class="delete-ad">حذف</div>
            </a>
            <?php }?>
            <a href="http://localhost/eceshub/jobads/ad/<?php echo $_smarty_tpl->tpl_vars['allAds']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
">
                <div class="more-info">اطلاعات بیشتر</div>
            </a>
        </div>
    <?php } else { ?>
        <div class="ad-div">
            <img src="http://localhost/eceshub/ow_userfiles/plugins/jobads/girls-1000.png" class="ad-image">
            <label class="right-margin"><?php echo $_smarty_tpl->tpl_vars['allAds']->value[$_smarty_tpl->tpl_vars['i']->value]->description;?>
</label>
            <br>
            <br>
            <label class="right-margin">توانایی ها:</label>
            <br>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allAds']->value[$_smarty_tpl->tpl_vars['i']->value]->skills, 'item');
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

            <br>
            <?php if ($_smarty_tpl->tpl_vars['allAds']->value[$_smarty_tpl->tpl_vars['i']->value]->isOwner == true) {?>
            <a href="/eceshub/jobads/deletead/<?php echo $_smarty_tpl->tpl_vars['allAds']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
">
                <div class="delete-ad">حذف</div>
            </a>
            <?php }?>
            <a href="http://localhost/eceshub/jobads/ad/<?php echo $_smarty_tpl->tpl_vars['allAds']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
">
                <div class="more-info">اطلاعات بیشتر</div>
            </a>
        </div>
        </a>
        <br>
        <br>
        <br>
    <?php }
}
}
}
}
