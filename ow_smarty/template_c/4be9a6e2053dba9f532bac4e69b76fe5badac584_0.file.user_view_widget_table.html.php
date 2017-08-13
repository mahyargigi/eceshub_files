<?php
/* Smarty version 3.1.31, created on 2017-08-12 03:36:36
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\components\user_view_widget_table.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598eda343a7c80_00134084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4be9a6e2053dba9f532bac4e69b76fe5badac584' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\components\\user_view_widget_table.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598eda343a7c80_00134084 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_script')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_add_content')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.add_content.php';
if ($_smarty_tpl->tpl_vars['ownerMode']->value || ($_smarty_tpl->tpl_vars['adminMode']->value && !$_smarty_tpl->tpl_vars['superAdminProfile']->value)) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

        

            .ow_edit_profile_link
            {
                position: absolute;
                right: 0px;
                top: 0px;
            }
        
    <?php $_block_repeat=false;
echo smarty_block_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('script', array());
$_block_repeat=true;
echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

        
            (function(){
                $(".user_profile_data").hover(
                  function(){
                    $("#edit-profile").fadeIn();
                  },
                  function(){
                    $("#edit-profile").fadeOut();
                  }
              );
           }());
       
    <?php $_block_repeat=false;
echo smarty_block_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }?>

<div class="user_profile_data" style="position:relative">
     <?php if ($_smarty_tpl->tpl_vars['ownerMode']->value || ($_smarty_tpl->tpl_vars['adminMode']->value && !$_smarty_tpl->tpl_vars['superAdminProfile']->value)) {?>
         <div style="display: none;" id="edit-profile" class="ow_edit_profile_link">
                <a class="ow_lbutton" href="<?php echo $_smarty_tpl->tpl_vars['profileEditUrl']->value;?>
"><?php echo smarty_function_text(array('key'=>'base+edit_profile_link'),$_smarty_tpl);?>
</a>
         </div>
     <?php }?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sectionsHtml']->value, 'html', false, 'section');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['html']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['html']->value;?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

 </div>

<?php echo smarty_function_add_content(array('key'=>'socialsharing.get_sharing_buttons','title'=>$_smarty_tpl->tpl_vars['displayName']->value,'image'=>$_smarty_tpl->tpl_vars['avatarUrl']->value,'entityType'=>'user','entityId'=>$_smarty_tpl->tpl_vars['userId']->value),$_smarty_tpl);?>

<?php }
}
