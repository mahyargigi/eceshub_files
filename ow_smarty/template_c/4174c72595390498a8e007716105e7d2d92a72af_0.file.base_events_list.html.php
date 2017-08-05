<?php
/* Smarty version 3.1.31, created on 2017-08-05 03:53:48
  from "C:\xampp\htdocs\eceshub\ow_plugins\event\views\controllers\base_events_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5985a3bcb2a796_18089989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4174c72595390498a8e007716105e7d2d92a72af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\event\\views\\controllers\\base_events_list.html',
      1 => 1482301538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5985a3bcb2a796_18089989 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_add_content')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.add_content.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_label')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.submit.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
?>

<div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'event.add_content.list.top','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
</div>

<?php if (empty($_smarty_tpl->tpl_vars['noButton']->value)) {?><div class="ow_right"><?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_add add_event_button','langLabel'=>'event+add_new_button_label'),$_smarty_tpl);?>
</div><?php }
if (!empty($_smarty_tpl->tpl_vars['contentMenu']->value)) {
echo $_smarty_tpl->tpl_vars['contentMenu']->value;
}?>

<?php echo smarty_function_add_content(array('key'=>'event.content.list.after_menu','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>


<div class="ow_event_list clearfix">
    <div class="ow_automargin ow_superwide">
        <?php if (isset($_smarty_tpl->tpl_vars['filterForm']->value)) {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>"EventFilterForm"));
$_block_repeat=true;
echo smarty_block_form(array('name'=>"EventFilterForm"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filterFormElementsKey']->value, 'elementKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elementKey']->value) {
?>
                    <tr>
                        <td><b><?php echo smarty_function_label(array('name'=>((string)$_smarty_tpl->tpl_vars['elementKey']->value)),$_smarty_tpl);?>
</b></td>
                        <td>
                            <?php echo smarty_function_input(array('name'=>((string)$_smarty_tpl->tpl_vars['elementKey']->value)),$_smarty_tpl);?>

                        </td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                <td><?php echo smarty_function_submit(array('name'=>"save",'iconClass'=>"ow_ic_lens",'langLabel'=>'iiseventplus+search_btn_label'),$_smarty_tpl);?>
</td>
            <?php $_block_repeat=false;
echo smarty_block_form(array('name'=>"EventFilterForm"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php }?>
      <?php if (!empty($_smarty_tpl->tpl_vars['no_events']->value)) {?>
        <div class="ow_nocontent"><?php echo smarty_function_text(array('key'=>"event+no_events_label"),$_smarty_tpl);?>
</div>
      <?php } else { ?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['events']->value, 'event', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['event']->value) {
?>
                <?php echo smarty_function_decorator(array('name'=>'ipc','addClass'=>'ow_smallmargin','data'=>$_smarty_tpl->tpl_vars['event']->value,'infoString'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['event']->value['eventUrl'])."\">".((string)$_smarty_tpl->tpl_vars['event']->value['title'])."</a>"),$_smarty_tpl);?>

          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

          <br />
          <?php echo $_smarty_tpl->tpl_vars['paging']->value;?>

      <?php }?>
    </div>
</div>

<div class="clearfix"><?php echo smarty_function_add_content(array('key'=>'event.add_content.list.bottom','listType'=>$_smarty_tpl->tpl_vars['listType']->value),$_smarty_tpl);?>
</div><?php }
}
