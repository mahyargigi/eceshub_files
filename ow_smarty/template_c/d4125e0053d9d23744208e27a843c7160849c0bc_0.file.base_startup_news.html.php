<?php
/* Smarty version 3.1.31, created on 2017-08-12 00:53:17
  from "C:\xampp\htdocs\eceshub\ow_plugins\startups\views\controllers\base_startup_news.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598eb3edc3ad55_43656945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4125e0053d9d23744208e27a843c7160849c0bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\startups\\views\\controllers\\base_startup_news.html',
      1 => 1502524396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598eb3edc3ad55_43656945 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

.right-div{
    width: 15%;
    margin-left:2%;
    text-align:center;
    display: inline-block;
    vertical-align: top;
}
.startup-short-desc{
}
.like-text{
    color:red;
    display: inline-block;
    font-size: 20px;
}
.like-img{
    width: 60px;
    height: 60px;
}
.center-div{
    width:75%;
    display: inline-block;
    padding: 15px;
}
.startup-img{
    width: 100%;
    border:solid;
    border-width:1px;
    border-color:#cdcaca;
    border-radius: 5px;
}
.add-news-btn{
    color: #10e89a;
    border: solid;
    border-width: 1px;
    border-radius: 5px;
    background: white;
    padding: 3px;
    width: 80px;
}
.add-news-btn:hover{
    background-color: #10e89a;
    color: white;
}
.news-div{
    border:solid;
    border-width: 1px;
    border-radius: 5px;
    border-color: #cdcaca;
    padding: 2%;
}
.news-img{
    margin-left: auto;
    margin-right: auto;
    width: 250px;
}
.news-title{
    color: #67ace8;
    font-size: 19px;
}
.delete-news{
    padding:1%;
    border: solid;
    border-width: 1px;
    border-radius: 5px;
    border-color: #e8075f;
    color: #e8075f;
    margin-top: -3%;
    float: left;
    width: 60px;
    height: 20px;
}
.delete-news:hover{
    color:white;
    background-color: #e8075f;
}
<?php $_block_repeat=false;
echo smarty_block_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<div class="right-div">

    <img src="http://localhost/eceshub/ow_userfiles/plugins/jobads/girls-1000.png" class="startup-img">
    <br>
    <br>
    <label class="startup-short-desc"><?php echo $_smarty_tpl->tpl_vars['startup']->value->shortDescription;?>
</label>
    <br>
    <br>
    <?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value == true) {?>
    <?php if ($_smarty_tpl->tpl_vars['isLiked']->value == true) {?>
    <a href="" class="is-liked">
        <h3 class="like-text">پسندیدم</h3>
        <img class="like-img" src="http://localhost/eceshub/ow_userfiles/plugins/startups/1200px-Heart_corazón.png">
    </a>
    <?php } else { ?>
    <a href="" class="is-not-liked">
        <h3 class="like-text">می پسندم</h3>
        <img class="like-img" src="http://localhost/eceshub/ow_userfiles/plugins/startups/agone-Heart.png">
    </a>
    <?php }?>
    <?php }?>
</div>
<div class=" center-div">
    <?php if ($_smarty_tpl->tpl_vars['isOwner']->value == true) {?>
        <a href="http://localhost/eceshub/startups/startup/<?php echo $_smarty_tpl->tpl_vars['startup']->value->id;?>
/addnews" style="text-decoration: none;">
            <div class="add-news-btn">+ افزودن خبر</div>
        </a>
    <?php }?>
    <br>
    <br>
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['newsCount']->value-1;
if ($_smarty_tpl->tpl_vars['i']->value > -1) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value > -1; $_smarty_tpl->tpl_vars['i']->value--) {
?>
        <div class="news-div">
            <label class="news-title"><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->tpl_vars['i']->value]->title;?>
</label>
            <br>
            <br>
            <?php if ($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->tpl_vars['i']->value]->image != null) {?>
            <img src="http://localhost/eceshub/ow_userfiles/plugins/jobads/girls-1000.png" class="news-img">
            <?php }?>
            <br>
            <h3><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->tpl_vars['i']->value]->description;?>
</h3>
            <?php if ($_smarty_tpl->tpl_vars['isOwner']->value == true) {?>
                <a href="http://localhost/eceshub/startups/startup/<?php echo $_smarty_tpl->tpl_vars['startup']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
/deletenews" style="text-decoration: none;">
                    <div class="delete-news">حذف آگهی</div>
                </a>
            <?php }?>
        </div>
        <br>
        <br>
    <?php }
}
?>

</div><?php }
}
