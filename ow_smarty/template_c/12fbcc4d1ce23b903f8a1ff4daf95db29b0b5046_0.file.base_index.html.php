<?php
/* Smarty version 3.1.31, created on 2017-08-07 11:28:21
  from "C:\xampp\htdocs\eceshub\ow_plugins\startups\views\controllers\base_index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5988b145bad1b7_89329708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12fbcc4d1ce23b903f8a1ff4daf95db29b0b5046' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\startups\\views\\controllers\\base_index.html',
      1 => 1502130494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5988b145bad1b7_89329708 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

.startup-div{
display: inline-block;
width: 30%;
border: solid;
border-radius: 5px;
border-color: #899191;
border-width: 2px;
}
.right-startup-div{
margin-left: 10%;
margin-right: 5%;
}
.startup-image{
width: 100%;
height: 100px;
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
.delete-startup{
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
<h2>هنوز استارتاپی ثبت نشده است</h2>
<?php }
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['count']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['count']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
    <?php if ($_smarty_tpl->tpl_vars['i']->value%2 == 0) {?>
        <div class="startup-div right-startup-div">
            <img src="http://localhost/eceshub/ow_userfiles/plugins/jobads/girls-1000.png" class="startup-image">
            <label class="right-margin"><?php echo $_smarty_tpl->tpl_vars['allStartups']->value[$_smarty_tpl->tpl_vars['i']->value]->shortDescription;?>
</label>
            <br>
            <br>
            <?php if ($_smarty_tpl->tpl_vars['allStartups']->value[$_smarty_tpl->tpl_vars['i']->value]->isOwner == true) {?>
            <a href="#">
                <div class="delete-startup">حذف</div>
            </a>
            <?php }?>
            <a href="#">
                <div class="more-info">اطلاعات بیشتر</div>
            </a>
        </div>

    <?php }?>

<?php }
}
}
}
