<?php
/* Smarty version 3.1.31, created on 2017-07-22 00:34:35
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\controllers\join_index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5973000b9cefc4_84603554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5cf7f604c058809fb6475c74a6cde748b5ac0fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\controllers\\join_index.html',
      1 => 1495976018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5973000b9cefc4_84603554 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_block_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.block_decorator.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.form.php';
if (!is_callable('smarty_function_cycle')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_libraries\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_label')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.label.php';
if (!is_callable('smarty_function_input')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.input.php';
if (!is_callable('smarty_function_error')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.error.php';
if (!is_callable('smarty_function_question_description_lang')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.question_description_lang.php';
if (!is_callable('smarty_function_submit')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.submit.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

<?php if (isset($_smarty_tpl->tpl_vars['notValidInviteCode']->value)) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

         <?php echo smarty_function_text(array('key'=>"base+join_not_valid_invite_code"),$_smarty_tpl);?>

    <?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['step']->value == 1) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

            <?php echo smarty_function_text(array('key'=>"base+join_promo"),$_smarty_tpl);?>

        <?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


        <?php if (!empty($_smarty_tpl->tpl_vars['joinConnectHook']->value)) {?>
           <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>"box",'addClass'=>"ow_center",'style'=>"overflow:hidden;",'iconClass'=>'ow_ic_key','langLabel'=>'base+join_connect_title'));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"ow_center",'style'=>"overflow:hidden;",'iconClass'=>'ow_ic_key','langLabel'=>'base+join_connect_title'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['joinConnectHook']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                  <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

           <?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>"box",'addClass'=>"ow_center",'style'=>"overflow:hidden;",'iconClass'=>'ow_ic_key','langLabel'=>'base+join_connect_title'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

           <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                <?php echo smarty_function_text(array('key'=>"base+join_or"),$_smarty_tpl);?>

           <?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_center",'style'=>"padding:15px;"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php }?>
    <?php }?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>'box','type'=>'empty','iconClass'=>'ow_ic_user','langLabel'=>'base+join_form_title'));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','iconClass'=>'ow_ic_user','langLabel'=>'base+join_form_title'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>'box','type'=>'empty','iconClass'=>'ow_ic_user','langLabel'=>'base+join_form_title'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>'joinForm'));
$_block_repeat=true;
echo smarty_block_form(array('name'=>'joinForm'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

        <table class="ow_table_1 ow_form">
            <?php if ($_smarty_tpl->tpl_vars['displayAccountType']->value == true) {?>
            <?php echo smarty_function_cycle(array('assign'=>'alt','values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>

            <tr class=" ow_tr_first ow_tr_last">
                <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_label">
                    <?php echo smarty_function_label(array('name'=>'accountType'),$_smarty_tpl);?>

                </td>
                <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_value ow_center">
                    <?php echo smarty_function_input(array('name'=>'accountType'),$_smarty_tpl);?>

                    <div style="height:1px;"></div>
                    <?php echo smarty_function_error(array('name'=>'accountType'),$_smarty_tpl);?>

                </td>
                <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_desc">
                    <?php echo smarty_function_question_description_lang(array('name'=>"accountType"),$_smarty_tpl);?>

                </td>
            </tr>
            <tr class="ow_tr_delimiter"><td></td></tr>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questionArray']->value, 'questions', false, 'section', 'section', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['questions']->value) {
?>
                <?php if (!empty($_smarty_tpl->tpl_vars['section']->value)) {?><tr class="ow_tr_first"><th colspan="3"><?php echo smarty_function_text(array('key'=>"base+questions_section_".((string)$_smarty_tpl->tpl_vars['section']->value)."_label"),$_smarty_tpl);?>
</th></tr><?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questions']->value, 'question', false, NULL, 'question', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['total'];
?>
                    <tr class=" <?php if (empty($_smarty_tpl->tpl_vars['section']->value)) {?>ow_tr_first<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] : null) && $_smarty_tpl->tpl_vars['question']->value['name'] != 'password') {?>ow_tr_last<?php }?>">
                        <td class="<?php if (!empty($_smarty_tpl->tpl_vars['question']->value['trClass'])) {
echo $_smarty_tpl->tpl_vars['question']->value['trClass'];
}?> ow_label">
                            <?php echo smarty_function_label(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>

                        </td>
                        <td class="<?php if (!empty($_smarty_tpl->tpl_vars['question']->value['trClass'])) {
echo $_smarty_tpl->tpl_vars['question']->value['trClass'];
}?> ow_value">
                            <?php echo smarty_function_input(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>

                            <div style="height:1px;"></div>
                            <?php echo smarty_function_error(array('name'=>$_smarty_tpl->tpl_vars['question']->value['name']),$_smarty_tpl);?>

                        </td>
                        <td class="<?php if (!empty($_smarty_tpl->tpl_vars['question']->value['trClass'])) {
echo $_smarty_tpl->tpl_vars['question']->value['trClass'];
}?> ow_desc">
                            <?php echo smarty_function_question_description_lang(array('name'=>$_smarty_tpl->tpl_vars['question']->value['realName']),$_smarty_tpl);?>

                        </td>
                    </tr>
                    <?php if ($_smarty_tpl->tpl_vars['question']->value['name'] == 'password') {?>
                        <tr class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_question']->value['last'] : null)) {?>ow_tr_last<?php }?>">
                            <td class="<?php if (!empty($_smarty_tpl->tpl_vars['question']->value['trClass']) && $_smarty_tpl->tpl_vars['question']->value['trClass'] == 'ow_alt1') {?>ow_alt2<?php } else { ?>ow_alt1<?php }?> ow_label">
                                <?php echo smarty_function_label(array('name'=>'repeatPassword'),$_smarty_tpl);?>

                            </td>
                            <td class="<?php if (!empty($_smarty_tpl->tpl_vars['question']->value['trClass']) && $_smarty_tpl->tpl_vars['question']->value['trClass'] == 'ow_alt1') {?>ow_alt2<?php } else { ?>ow_alt1<?php }?> ow_value">
                                <?php echo smarty_function_input(array('name'=>'repeatPassword'),$_smarty_tpl);?>

                                <div style="height:1px;"></div>
                                <?php echo smarty_function_error(array('name'=>'repeatPassword'),$_smarty_tpl);?>

                            </td>
                            <td class="<?php if (!empty($_smarty_tpl->tpl_vars['question']->value['trClass']) && $_smarty_tpl->tpl_vars['question']->value['trClass'] == 'ow_alt1') {?>ow_alt2<?php } else { ?>ow_alt1<?php }?> ow_desc">
                                <?php echo smarty_function_question_description_lang(array('name'=>'repeatPassword'),$_smarty_tpl);?>

                            </td>
                        </tr>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                <?php if (!empty($_smarty_tpl->tpl_vars['section']->value)) {?><tr class="ow_tr_delimiter"><td></td></tr><?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php if (isset($_smarty_tpl->tpl_vars['display_parent_email']->value) && $_smarty_tpl->tpl_vars['display_parent_email']->value) {?>
                <?php echo smarty_function_cycle(array('assign'=>'alt','values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>

                <tr class="ow_tr_first parent_email"><th colspan="3"><?php echo smarty_function_text(array('key'=>"iiscontrolkids+join_parent_email_header"),$_smarty_tpl);?>
</th></tr>
                <tr class=" ow_tr_last parent_email">
                    <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_label">
                        <?php echo smarty_function_label(array('name'=>'parentEmail'),$_smarty_tpl);?>

                    </td>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_value">
                        <?php echo smarty_function_input(array('name'=>'parentEmail'),$_smarty_tpl);?>

                        <div style="height:1px;"></div>
                        <?php echo smarty_function_error(array('name'=>'parentEmail'),$_smarty_tpl);?>

                    </td>
                    <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_desc">
                        <?php echo smarty_function_text(array('key'=>"iiscontrolkids+join_parent_email_description"),$_smarty_tpl);?>

                    </td>
                </tr>
                <tr class="ow_tr_desc parent_email"><th colspan="3"><?php echo smarty_function_text(array('key'=>"iiscontrolkids+parents_kids_message",'kidsAge'=>$_smarty_tpl->tpl_vars['kidsAge']->value),$_smarty_tpl);?>
</th></tr>
                <tr class="ow_tr_delimiter parent_email"><td></td></tr>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['isLastStep']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['display_photo']->value) {?>
                    <tr class="ow_tr_first"><th colspan="3"><?php echo smarty_function_text(array('key'=>"base+questions_section_user_photo_label"),$_smarty_tpl);?>
</th></tr>
                    <?php echo smarty_function_cycle(array('assign'=>'alt','name'=>'userPhoto','values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>

                    <tr class=" ow_tr_last">
                        <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_label">
                            <?php echo smarty_function_label(array('name'=>'userPhoto'),$_smarty_tpl);?>

                        </td>
                        <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_value">
                            <?php echo smarty_function_input(array('name'=>'userPhoto'),$_smarty_tpl);?>

                            <div style="height:1px;"></div>
                            <?php echo smarty_function_error(array('name'=>'userPhoto'),$_smarty_tpl);?>

                        </td>
                        <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_desc">
                            <?php echo smarty_function_question_description_lang(array('name'=>'user_photo'),$_smarty_tpl);?>

                        </td>
                    </tr>
                    <tr class="ow_tr_delimiter"><td></td></tr>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['display_terms_of_use']->value) {?>
                    <tr class="ow_tr_first"><th colspan="3"><?php echo smarty_function_text(array('key'=>"base+questions_section_terms_of_use_label"),$_smarty_tpl);?>
</th></tr>
                    <?php echo smarty_function_cycle(array('assign'=>'alt','name'=>'userPhoto','values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>

                    <tr class=" ow_tr_last">
                        <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_label">
                            <?php echo smarty_function_label(array('name'=>'termOfUse'),$_smarty_tpl);?>

                        </td>
                        <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_value">
                            <?php echo smarty_function_input(array('name'=>'termOfUse'),$_smarty_tpl);?>

                            <div style="height:1px;"></div>
                            <?php echo smarty_function_error(array('name'=>'termOfUse'),$_smarty_tpl);?>

                        </td>
                        <td class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_desc">

                        </td>
                    </tr>
                    <tr class="ow_tr_delimiter"><td></td></tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['display_captcha']->value) {?>
                    <tr class="ow_tr_first"><th colspan="3"><?php echo smarty_function_text(array('key'=>"base+questions_section_captcha_label"),$_smarty_tpl);?>
</th></tr>
                    <?php echo smarty_function_cycle(array('assign'=>'alt','name'=>'captchaField','values'=>'ow_alt1,ow_alt2'),$_smarty_tpl);?>

                    <tr class="ow_tr_last" >
                        <td colspan="3" class="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
 ow_center">
                            <div style='padding:10px;'>
                                <?php echo smarty_function_input(array('name'=>'captchaField'),$_smarty_tpl);?>

                                <div style="height:1px;"></div>
                                <?php echo smarty_function_error(array('name'=>'captchaField'),$_smarty_tpl);?>

                            </div>
                        </td>
                    </tr>
                <?php }?>
                <tr class="ow_tr_delimiter"><td></td></tr>
            <?php }?>
        </table>
		<div class="clearfix">
           <div class="ow_right">
                <?php echo smarty_function_submit(array('name'=>'joinSubmit'),$_smarty_tpl);?>

               <?php if (isset($_smarty_tpl->tpl_vars['back_step']->value)) {?>
               <?php echo smarty_function_decorator(array('name'=>'button','class'=>'ow_ic_update','id'=>'btn-add-new-post','langLabel'=>'base+back','onclick'=>"location.href='".((string)$_smarty_tpl->tpl_vars['back_step']->value)."'"),$_smarty_tpl);?>

               <?php }?>
           </div>
        </div>
    <?php $_block_repeat=false;
echo smarty_block_form(array('name'=>'joinForm'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }
$_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>"box",'type'=>"empty",'addClass'=>"ow_superwide ow_automargin"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }
}
