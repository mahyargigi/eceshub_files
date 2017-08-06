<?php
/* Smarty version 3.1.31, created on 2017-08-06 05:52:36
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\admin\views\controllers\users_index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598711147528a5_07316590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fd952f408e030a29b7394d8abeeea3e1620e74e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\admin\\views\\controllers\\users_index.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598711147528a5_07316590 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_script')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.submit.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('script', array());
$_block_repeat=true;
echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>



    $("#invite_btn").click(function(){
	    var $form_content = $("#invite_members");
	
	    window.invite_members_floatbox = new OW_FloatBox({
	        $title: OW.getLanguageText('admin', 'invite_members_cap_label'),
	        $contents: $form_content,
	        icon_class: 'ow_ic_add',
	        width: 550
	    });
    });
    
    $("#username-search-input").focus();


<?php $_block_repeat=false;
echo smarty_block_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<div class="ow_hidden">
    <div id="invite_members" class="ow_center">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>'invite-members'));
$_block_repeat=true;
echo smarty_block_form(array('name'=>'invite-members'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

        <?php echo smarty_function_input(array('name'=>'emails'),$_smarty_tpl);?>

        <div style="text-align: center;padding: 5px;"><?php echo smarty_function_submit(array('name'=>'submit'),$_smarty_tpl);?>
</div>
        <?php $_block_repeat=false;
echo smarty_block_form(array('name'=>'invite-members'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    </div>
</div>

<?php echo smarty_function_text(array('key'=>'admin+total_users','count'=>$_smarty_tpl->tpl_vars['totalUsers']->value),$_smarty_tpl);?>


<div class="ow_stdmargin clearfix">
	<div class="ow_right ow_superwide ow_txtright">
        <form method="get">
		<div class="ow_box ow_admin_search_box ow_smallmargin">
	       <?php echo smarty_function_text(array('key'=>'admin+search_by'),$_smarty_tpl);?>

	       <select name="search_by">
	           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['searchQ']->value, 'label', false, 'question');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value => $_smarty_tpl->tpl_vars['label']->value) {
?>
	           <option value="<?php echo $_smarty_tpl->tpl_vars['question']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['currentSearch']->value['question'] == $_smarty_tpl->tpl_vars['question']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</option>
	           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	       </select> :
	       <input type="text" name="search" id="username-search-input" style="width: 280px" value="<?php echo $_smarty_tpl->tpl_vars['currentSearch']->value['value'];?>
" />
	       <?php echo smarty_function_decorator(array('name'=>'button','type'=>"submit",'langLabel'=>'admin+go'),$_smarty_tpl);?>

	    </div>
	    
	    <?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add','langLabel'=>'admin+invite_members_button_label','id'=>'invite_btn'),$_smarty_tpl);?>

	    </form>	
	</div>
</div>

<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


<?php echo $_smarty_tpl->tpl_vars['userList']->value;?>

<?php }
}
