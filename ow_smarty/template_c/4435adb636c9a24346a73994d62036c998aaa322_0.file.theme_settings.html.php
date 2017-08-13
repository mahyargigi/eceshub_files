<?php
/* Smarty version 3.1.31, created on 2017-08-12 07:25:38
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\admin\views\controllers\theme_settings.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598f0fe2670ed0_02534178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4435adb636c9a24346a73994d62036c998aaa322' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\admin\\views\\controllers\\theme_settings.html',
      1 => 1472993224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598f0fe2670ed0_02534178 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_block_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_cycle')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_libraries\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.submit.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>


.theme_icon{
	background-repeat:no-repeat;
	background-position:50% 50%;
	height:180px;
	width:180px;
}

.theme_title{
	font-weight:bold;
}

.theme_desc{
	padding:10px 0;
}

.theme_controls input[type="text"]{
	width:232px;
	padding:4px;
}

.theme_control_image{
	background-repeat:no-repeat;
	background-position:0% 0%;
	border:1px solid #ccc;
	height:40px;
	width:170px;
    float:left;
    cursor:pointer;
}

.theme_controls select{
	width:240px;
}

body table.theme_controls td.ow_label{
	width:35%;
}

body table.theme_controls td.ow_input{
	width:30%;
}

body table.theme_controls td.ow_desc{
	text-align:left;
	width:35%;
}

.color_input input[type="text"]{
	width:170px;
}

.theme_controls .color_button{
	width:30px;
	height:27px;
	padding:0;
	box-shadow: 0px 0px 2px rgba(0,0,0,0.5);
}

.preview_graphics{
    background-repeat:no-repeat;
	background-position:50% 50%;
	border:1px solid #ccc;
    width:500px;
    height:350px;
    margin:0 auto;
}


<?php $_block_repeat=false;
echo smarty_block_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo $_smarty_tpl->tpl_vars['contentMenu']->value;?>

<div class="clearfix">
	<div class="theme_icon_info" style="float:left;width:23%;"><div class="theme_icon" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['iconUrl'];?>
);"></div></div>
	<div class="theme_detail_info" style="float:right;width:74%;padding:5px;">
		<div class="theme_title"><?php if (isset($_smarty_tpl->tpl_vars['themeInfo']->value['title'])) {
echo $_smarty_tpl->tpl_vars['themeInfo']->value['title'];
} else { ?>-<?php }?></div>
		<div class="theme_desc"><?php if (isset($_smarty_tpl->tpl_vars['themeInfo']->value['description'])) {
echo $_smarty_tpl->tpl_vars['themeInfo']->value['description'];
} else { ?>-<?php }?></div>
		<div class="theme_info">
			<table class="ow_table_3" style="width:100px">
				<tr class="ow_tr_first">
					<td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+theme_info_version_label'),$_smarty_tpl);?>
:</td>
					<td class="ow_value"><?php if (isset($_smarty_tpl->tpl_vars['themeInfo']->value['version'])) {
echo $_smarty_tpl->tpl_vars['themeInfo']->value['version'];
} else { ?>-<?php }?></td>
				</tr>
				<tr>
					<td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+theme_info_compatibility_label'),$_smarty_tpl);?>
:</td>
					<td class="ow_value"><?php if (isset($_smarty_tpl->tpl_vars['themeInfo']->value['compatibility'])) {
echo $_smarty_tpl->tpl_vars['themeInfo']->value['compatibility'];
} else { ?>-<?php }?></td>
				</tr>
				<tr>
					<td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+theme_info_author_label'),$_smarty_tpl);?>
:</td>
					<td class="ow_value"><?php if (isset($_smarty_tpl->tpl_vars['themeInfo']->value['author'])) {
echo $_smarty_tpl->tpl_vars['themeInfo']->value['author'];
} else { ?>-<?php }?></td>
				</tr>
				<tr class="ow_tr_last">
					<td class="ow_label"><?php echo smarty_function_text(array('key'=>'admin+theme_info_author_url_label'),$_smarty_tpl);?>
:</td>
					<td class="ow_value"><?php if (isset($_smarty_tpl->tpl_vars['themeInfo']->value['authorUrl'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['authorUrl'];?>
"><?php echo $_smarty_tpl->tpl_vars['themeInfo']->value['authorUrl'];?>
</a><?php } else { ?>-<?php }?></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>'box','type'=>'empty','langLabel'=>'admin+theme_settings_cap_label','iconClass'=>'ow_ic_edit'));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','langLabel'=>'admin+theme_settings_cap_label','iconClass'=>'ow_ic_edit'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

<div class="ow_superwide ow_automargin">
<?php if (isset($_smarty_tpl->tpl_vars['noControls']->value) && $_smarty_tpl->tpl_vars['noControls']->value) {?>
<div class="no_content"><?php echo smarty_function_text(array('key'=>'admin+theme_settings_no_controls_label'),$_smarty_tpl);?>
</div>
<?php } else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>'theme-edit'));
$_block_repeat=true;
echo smarty_block_form(array('name'=>'theme-edit'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

<table class="ow_form ow_table_1 theme_controls">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inputArray']->value, 'inputs', false, 'section');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['inputs']->value) {
?>
   <tr class="ow_tr_first">
	   <th colspan="10" style="text-align: left;"><?php echo $_smarty_tpl->tpl_vars['section']->value;?>
</th>
   </tr>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inputs']->value, 'input', false, NULL, 'i', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['input']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'];
?>
	<tr class="<?php echo smarty_function_cycle(array('values'=>'ow_alt1,ow_alt2','name'=>$_smarty_tpl->tpl_vars['section']->value),$_smarty_tpl);?>
 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] : null)) {?>ow_tr_last<?php }?>">
      <td class="ow_label"><?php echo $_smarty_tpl->tpl_vars['input']->value['title'];?>
</td>
      <td class="ow_value"><?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['input']->value['name']),$_smarty_tpl);?>
</td>
      <td class="ow_desc"><?php if (isset($_smarty_tpl->tpl_vars['input']->value['desc'])) {
echo $_smarty_tpl->tpl_vars['input']->value['desc'];
}?></td>
      
   </tr>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

   <tr class="ow_tr_delimiter"><td></td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

       <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'resetLabel', null, null);
echo smarty_function_text(array('key'=>'admin+theme_settings_reset_confirm_message'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

</table>
    <div class="clearfix ow_stdmargin ow_btn_delimiter">
        <div class="ow_right">
            <?php echo smarty_function_decorator(array('name'=>"button",'class'=>'ow_red ow_ic_delete','langLabel'=>'admin+themes_settings_reset_label','onclick'=>"if(confirm('".((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'resetLabel'))."')) window.location = '".((string)$_smarty_tpl->tpl_vars['resetUrl']->value)."';"),$_smarty_tpl);?>
    
			<?php echo smarty_function_submit(array('name'=>'submit','class'=>'ow_positive ow_btn_delimiter'),$_smarty_tpl);?>
     
        </div>
    </div>
<?php $_block_repeat=false;
echo smarty_block_form(array('name'=>'theme-edit'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }?>
</div>
<?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','langLabel'=>'admin+theme_settings_cap_label','iconClass'=>'ow_ic_edit'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
