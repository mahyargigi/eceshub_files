<?php
/* Smarty version 3.1.31, created on 2017-08-12 00:58:13
  from "C:\xampp\htdocs\eceshub\ow_plugins\startups\views\controllers\base_startup_ads.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598eb515853221_54890258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f7dbb4b062ade75dc6bbbee93cbf8f752684d19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\startups\\views\\controllers\\base_startup_ads.html',
      1 => 1502523465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598eb515853221_54890258 (Smarty_Internal_Template $_smarty_tpl) {
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
.startup-short-desc{
}
.ad-div{
    width: 90%;
    border-radius:5px;
    border: solid;
    border-width: 1px;
    padding: 5px;
    background-color: #fbfdfd;
    margin-bottom: 10px;
}
.skills-div{
    display:inline-block;
    padding-right:10px;
    padding-left: 10px;
    padding-bottom: 5px;
    padding-top: 5px;
    background-color: #54bfdd;
    color: white;
    margin-left: 1%;
    margin-right: 1%;
    margin-bottom: 3%;
    margin-top: 2%;
    border-radius: 5px;
}
.email-div{
    display: inline-block;
    font: 18px;
    margin-right: 5px;
}
.more-info{
    float: left;
    margin-left: 3%;
    margin-top: -4%;
    border-radius: 5px;
    background-color:#77c59a;
    color: white;
    padding:1%;
}
.add-ad{
    color: #10e89a;
    border: solid;
    border-width: 1px;
    border-radius: 5px;
    background: white;
    padding: 3px;
    width: 80px;
}
.add-ad:hover{
    background-color: #10e89a;
    color: white;
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
<div class="center-div">
    <?php if ($_smarty_tpl->tpl_vars['adscount']->value == 0) {?>
        <h1>هنوز آگهی استخدامی برای این استارتاپ ثبت نشده است!</h1>
    <br>
        <?php if ($_smarty_tpl->tpl_vars['isOwner']->value == true) {?>
            <a href="http://localhost/eceshub/jobads/newad" style="text-decoration: none;">
                <div class="add-ad">
                    +افزودن آگهی
                </div>
            </a>
        <?php }?>
    <?php } else { ?>
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['adscount']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['adscount']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
            <div class="ad-div">
                <label><?php echo $_smarty_tpl->tpl_vars['ads']->value[$_smarty_tpl->tpl_vars['i']->value]->description;?>
</label>
                <br>
                <label>توانایی ها:</label>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ads']->value[$_smarty_tpl->tpl_vars['i']->value]->skills, 'skill');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['skill']->value) {
?>
                <div class="skills-div">
                    <?php echo $_smarty_tpl->tpl_vars['skill']->value;?>
</div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                <br>
                <label>ایمیل:</label>
                <div class="email-div"><?php echo $_smarty_tpl->tpl_vars['ads']->value[$_smarty_tpl->tpl_vars['i']->value]->email;?>
</div>
                <br>
                <a href="http://localhost/eceshub/jobads/ad/<?php echo $_smarty_tpl->tpl_vars['ads']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
">
                    <div class="more-info">اطلاعات بیشتر</div>
                </a>
            </div>
        <?php }
}
?>

    <?php }?>
</div><?php }
}
