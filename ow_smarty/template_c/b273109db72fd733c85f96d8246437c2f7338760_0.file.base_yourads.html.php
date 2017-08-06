<?php
/* Smarty version 3.1.31, created on 2017-08-06 05:43:23
  from "C:\xampp\htdocs\eceshub\ow_plugins\jobads\views\controllers\base_yourads.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59870eeb7883c6_66262910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b273109db72fd733c85f96d8246437c2f7338760' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\jobads\\views\\controllers\\base_yourads.html',
      1 => 1501918665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59870eeb7883c6_66262910 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php if ($_smarty_tpl->tpl_vars['count']->value == 0) {?>
<h2>شما تا الآن آگهی ثبت نکرده اید</h2>
<?php } else { ?>

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
        <a href="#">
            <div class="delete-ad">حذف</div>
        </a>
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
        <a href="#">
            <div class="delete-ad">حذف</div>
        </a>
        <a href="http://localhost/eceshub/jobads/ad/<?php echo $_smarty_tpl->tpl_vars['allAds']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
">
            <div class="more-info">اطلاعات بیشتر</div>
        </a>
    </div>
    </a>
    <br>
    <br>
    <br>
    <?php }?>
    <?php }
}
?>

<?php }
}
}
