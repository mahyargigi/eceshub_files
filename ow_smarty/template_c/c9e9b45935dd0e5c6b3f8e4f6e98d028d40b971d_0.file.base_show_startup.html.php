<?php
/* Smarty version 3.1.31, created on 2017-08-11 08:45:15
  from "C:\xampp\htdocs\eceshub\ow_plugins\startups\views\controllers\base_show_startup.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598dd10b0dfea8_65263216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9e9b45935dd0e5c6b3f8e4f6e98d028d40b971d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\startups\\views\\controllers\\base_show_startup.html',
      1 => 1502206421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598dd10b0dfea8_65263216 (Smarty_Internal_Template $_smarty_tpl) {
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
    border:solid;
    border-width: 1px;
    border-color:#cdcaca;
    border-radius: 5px;
    padding: 15px;
    background-color: #f3f4f8;
}
.startup-img{
    width: 100%;
    border:solid;
    border-width:1px;
    border-color:#cdcaca;
}
.startup-short-desc{
}
.title-labels{
    color:#5ec0db;
}
.desc-class{

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
    <label class="title-labels">توضیحات:</label>
    <br>
    <br>
    <h4 class="desc-class"><?php echo $_smarty_tpl->tpl_vars['startup']->value->description;?>
</h4>

    <br>
    <br>
    <label class="title-labels">وبسایت:</label>
    <br>
    <br>
    <h4 class="desc-class"><?php echo $_smarty_tpl->tpl_vars['startup']->value->website;?>
</h4>
    <br>

    <br>
    <label class="title-labels">آدرس:</label>
    <br>
    <br>
    <h4 class="desc-class"><?php echo $_smarty_tpl->tpl_vars['startup']->value->address;?>
</h4>
    <br>

    <br>
    <label class="title-labels">شماره تلفن:</label>
    <br>
    <br>
    <h4 class="desc-class"><?php echo $_smarty_tpl->tpl_vars['startup']->value->telephoneNumber;?>
</h4>
    <br>
    <br>
    <?php echo $_smarty_tpl->tpl_vars['comments']->value;?>

</div><?php }
}
