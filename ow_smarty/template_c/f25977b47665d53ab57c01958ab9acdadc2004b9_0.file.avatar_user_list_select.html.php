<?php
/* Smarty version 3.1.31, created on 2017-07-29 03:26:35
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\components\avatar_user_list_select.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597c62db9a92a9_19700969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f25977b47665d53ab57c01958ab9acdadc2004b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\components\\avatar_user_list_select.html',
      1 => 1493557652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597c62db9a92a9_19700969 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_cycle')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_libraries\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>



.avatar_select_list{
    height:320px;
    text-align:left;
    padding:0 8px;
}

.avatar_select_list .ow_user_list_picture{
    height:45px;
}

.avatar_select_list .ow_user_list_item{
    cursor:pointer;
}

.avatar_select_list .ow_item_set2{
    width:48%;
}

.avatar_select_list .asl_users{
    height:270px;
    overflow-y:scroll;
}


<?php $_block_repeat=false;
echo smarty_block_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="ow_lp_avatars avatar_select_list" id="<?php echo $_smarty_tpl->tpl_vars['contexId']->value;?>
">
    <?php if (empty($_smarty_tpl->tpl_vars['users']->value)) {?>
    <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>'base+empty_user_avatar_list_select'),$_smarty_tpl);?>
</div>
    <?php } else { ?>
    <div style="width: 100%;">
        <input id="instant_search_txt_input" type="text" placeholder="<?php echo smarty_function_text(array('key'=>'base+search_users'),$_smarty_tpl);?>
" style="width: 200px;margin: 3px 0px;">
    </div>
    <div class="asl_users">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user', false, NULL, 'user_list', array (
  'first' => true,
  'iteration' => true,
  'last' => true,
  'index' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['total'];
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['first'] : null)) {?>
            <div class="clearfix <?php echo smarty_function_cycle(array('name'=>"rows",'values'=>"ow_alt2, ow_alt1"),$_smarty_tpl);?>
">
        <?php }?>
        <?php echo smarty_function_decorator(array('name'=>"user_list_item",'avatar'=>$_smarty_tpl->tpl_vars['avatars']->value[$_smarty_tpl->tpl_vars['user']->value['id']],'username'=>$_smarty_tpl->tpl_vars['user']->value['username'],'displayName'=>$_smarty_tpl->tpl_vars['user']->value['title'],'noUserLink'=>1,'contId'=>$_smarty_tpl->tpl_vars['user']->value['linkId'],'set_class'=>'ow_item_set2'),$_smarty_tpl);?>

        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['iteration'] : null)%2 == 0 && !(isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['last'] : null)) {?>
            </div>
            <div class="clearfix <?php echo smarty_function_cycle(array('name'=>"rows",'values'=>"ow_alt1,ow_alt2"),$_smarty_tpl);?>
">
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user_list']->value['last'] : null)) {?>
          </div>
        <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </div>
    <div class="ow_center" style="padding: 8px;">
    <?php if (!empty($_smarty_tpl->tpl_vars['langs']->value['countLabel'])) {?><input type="hidden" class="count_label" value="<?php echo $_smarty_tpl->tpl_vars['langs']->value['countLabel'];?>
" /><?php }?>
    <input type="hidden" class="button_label" value="<?php echo $_smarty_tpl->tpl_vars['langs']->value['buttonLabel'];?>
" />
    <?php if (!empty($_smarty_tpl->tpl_vars['langs']->value['countLabel'])) {?><div class="count_label"><?php echo $_smarty_tpl->tpl_vars['langs']->value['startCountLabel'];?>
</div><?php }?>
    <div class="submit_cont"><div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','label'=>$_smarty_tpl->tpl_vars['langs']->value['startButtonLabel'],'class'=>'submit'),$_smarty_tpl);?>
</div></div>
    </div>
    <?php }?>
</div><?php }
}
