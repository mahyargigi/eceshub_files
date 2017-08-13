<?php
/* Smarty version 3.1.31, created on 2017-08-12 03:36:39
  from "C:\xampp\htdocs\eceshub\ow_plugins\newsfeed\views\components\feed_item.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598eda37adb1b5_34282756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2868f69f81c66633765cf04ae44305b5bc9a2873' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\newsfeed\\views\\components\\feed_item.html',
      1 => 1499503962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598eda37adb1b5_34282756 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
if (!is_callable('smarty_block_block_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.block_decorator.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    .ow_newsfeed_line
    {
        display: block;
    }
<?php $_block_repeat=false;
echo smarty_block_style(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<li id="<?php echo $_smarty_tpl->tpl_vars['item']->value['autoId'];?>
" class="ow_newsfeed_item <?php echo $_smarty_tpl->tpl_vars['item']->value['view']['class'];?>
 <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['line'])) {?>ow_newsfeed_line_item<?php }
if (isset($_smarty_tpl->tpl_vars['item']->value['actionString'])) {?> main_content_string<?php }
if (isset($_smarty_tpl->tpl_vars['item']->value['hasLastAvtivity'])) {?> with_last_activity<?php }?>" <?php if ($_smarty_tpl->tpl_vars['item']->value['view']['style']) {?>style="<?php echo $_smarty_tpl->tpl_vars['item']->value['view']['style'];?>
"<?php }?> data-entity-type="<?php echo $_smarty_tpl->tpl_vars['item']->value['entityType'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['activity'])) {?>data-activity-type="<?php echo $_smarty_tpl->tpl_vars['item']->value['activity']['activityType'];?>
"<?php }?>>
	<div class="clearfix">
            
	    <?php if (empty($_smarty_tpl->tpl_vars['item']->value['line'])) {?>
	        <div class="ow_newsfeed_avatar">
                    
                    <?php echo smarty_function_decorator(array('name'=>"avatar_item",'title'=>$_smarty_tpl->tpl_vars['item']->value['user']['name'],'url'=>$_smarty_tpl->tpl_vars['item']->value['user']['url'],'src'=>$_smarty_tpl->tpl_vars['item']->value['user']['avatarUrl'],'label'=>$_smarty_tpl->tpl_vars['item']->value['user']['roleLabel']['label'],'labelColor'=>$_smarty_tpl->tpl_vars['item']->value['user']['roleLabel']['labelColor']),$_smarty_tpl);?>

	        </div>
	    <?php } else { ?>
	         <div class="ow_newsfeed_line ow_smallmargin <?php if ($_smarty_tpl->tpl_vars['item']->value['view']['iconClass']) {
echo $_smarty_tpl->tpl_vars['item']->value['view']['iconClass'];
} else { ?>ow_ic_info<?php }?> ow_icon_control">
	            <?php if ($_smarty_tpl->tpl_vars['item']->value['context']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['context']['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['context']['label'];?>
</a> &raquo; <?php }
echo $_smarty_tpl->tpl_vars['item']->value['line'];?>

	         </div>
	    <?php }?>

        <div class="ow_newsfeed_body">
	        <div class="ow_newsfeed_context_menu_wrap">
                    <div class="ow_newsfeed_context_menu">
                       <?php echo $_smarty_tpl->tpl_vars['item']->value['contextActionMenu'];?>

                    </div>
                    <?php if (empty($_smarty_tpl->tpl_vars['item']->value['line'])) {?>
                        <div class="ow_newsfeed_string ow_small ow_smallmargin<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['hasLastAvtivity'])) {?> last_activity_description<?php }?>">
                           <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['user']['url'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['user']['name'];?>
</b></a>
                           <?php if ($_smarty_tpl->tpl_vars['item']->value['context']) {?>  &raquo; <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['context']['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['context']['label'];?>
</a><?php }?>
                           <?php echo $_smarty_tpl->tpl_vars['item']->value['string'];?>

                        </div>
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['hasLastAvtivity'])) {?>
                            <div class="ow_newsfeed_string ow_small ow_smallmargin<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['hasLastAvtivity'])) {?> last_activity_content<?php }?>" style="margin-top: 30px;">
                                <?php if (isset($_smarty_tpl->tpl_vars['item']->value['ownerInfo'])) {?>
                                    <div class="ow_newsfeed_avatar">
                                        <?php echo smarty_function_decorator(array('name'=>"avatar_item",'url'=>$_smarty_tpl->tpl_vars['item']->value['ownerInfo']['url'],'src'=>$_smarty_tpl->tpl_vars['item']->value['ownerInfo']['avatarUrl'],'label'=>$_smarty_tpl->tpl_vars['item']->value['ownerInfo']['roleLabel']['label'],'labelColor'=>$_smarty_tpl->tpl_vars['item']->value['ownerInfo']['roleLabel']['labelColor']),$_smarty_tpl);?>

                                    </div>
                                <?php }?>
                                <div class="ow_newsfeed_body">
                                    <div class="ow_newsfeed_string ow_small ow_smallmargin">
                                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['ownerInfo'])) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['ownerInfo']['url'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['ownerInfo']['name'];?>
</b></a>
                                        <?php }?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['actionString'])) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['actionString'];?>

                                        <?php }?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['actionTime'])) {?>
                                            <span class="ow_nowrap create_time ow_newsfeed_date ow_small"><?php echo $_smarty_tpl->tpl_vars['item']->value['actionTime'];?>
</span>
                                        <?php }?>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['content']) {?>
                                        <div class="ow_newsfeed_content ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</div>
                                    <?php }?>
                                </div>
                            </div>
                        <?php }?>
                    <?php }?>

                    <?php if (!isset($_smarty_tpl->tpl_vars['item']->value['hasLastAvtivity']) && $_smarty_tpl->tpl_vars['item']->value['content']) {?>
                        <div class="ow_newsfeed_content ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</div>
                    <?php }?>
                </div>

            <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['toolbar'])) {?>
            <div class="ow_newsfeed_toolbar ow_small ow_remark clearfix"><span class="ow_newsfeed_toolbar_space">&nbsp;</span><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['toolbar'], 'toolbarItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['toolbarItem']->value) {
?><span class="ow_newsfeed_control ow_nowrap <?php if (!empty($_smarty_tpl->tpl_vars['toolbarItem']->value['class'])) {
echo $_smarty_tpl->tpl_vars['toolbarItem']->value['class'];
}?>"><?php if (!empty($_smarty_tpl->tpl_vars['toolbarItem']->value['href'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['toolbarItem']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['toolbarItem']->value['label'];?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['toolbarItem']->value['label'];
}?><span class="ow_newsfeed_toolbar_space">&nbsp;</span></span><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div>
            <?php }?>

            <div class="ow_newsfeed_btns ow_small ow_remark clearfix">

                <span class="ow_nowrap create_time ow_newsfeed_date ow_small"><?php echo $_smarty_tpl->tpl_vars['item']->value['createTime'];?>
</span>

                <?php if (isset($_smarty_tpl->tpl_vars['item']->value['privacy_label'])) {
if (isset($_smarty_tpl->tpl_vars['item']->value['privacy_label']['onClick'])) {?><a class="privacy_label" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['privacy_label']['id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['privacy_label']['onClick'];?>
"><?php }?><img class="ow_nowrap create_time ow_newsfeed_date ow_small feed_image_privacy" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['privacy_label']['imgSrc'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['privacy_label']['label'];?>
" /><?php if (isset($_smarty_tpl->tpl_vars['item']->value['privacy_label']['onClick'])) {?></a><?php }
}?>
                <div class="ow_newsfeed_left">
                    <span class="ow_newsfeed_control">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['comments']) {?>
                        <span class="ow_newsfeed_btn_wrap <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['comments']['expanded']) {?>ow_newsfeed_active<?php }?>">
                            <span class="ow_miniic_control ow_cursor_pointer newsfeed_comment_btn_cont <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['comments']['expanded']) {?>active<?php }?>">
                                <span class="ow_miniic_comment newsfeed_comment_btn <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['comments']['expanded']) {?>newsfeed_active_button<?php }?>"></span>
                            </span><span class="newsfeed_counter_comments"><?php echo $_smarty_tpl->tpl_vars['item']->value['features']['system']['comments']['count'];?>
</span>
                        </span>
                        <?php }?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['features']['custom'], 'btn');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->value) {
?>
                            <span class="ow_newsfeed_btn_wrap <?php if (!empty($_smarty_tpl->tpl_vars['btn']->value['class'])) {
echo $_smarty_tpl->tpl_vars['btn']->value['class'];
}?>">
                                <span class="ow_miniic_control ow_cursor_pointer newsfeed-feature-button-control <?php if (!empty($_smarty_tpl->tpl_vars['btn']->value['active'])) {?>active<?php }?>">
                                    <span <?php if (!empty($_smarty_tpl->tpl_vars['btn']->value['title'])) {?>title="<?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
"<?php }?> class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['iconClass'];?>
 newsfeed-feature-button" <?php if (!empty($_smarty_tpl->tpl_vars['btn']->value['onclick'])) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['onclick'];?>
"<?php }?> ></span>
                                </span><span class="ow_newsfeed_btn_label newsfeed-feature-label"><?php echo $_smarty_tpl->tpl_vars['btn']->value['label'];?>
</span>
                            </span>

                            <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['string'])) {?>
                                <span class="ow_newsfeed_btn_string newsfeed-feature-string">
                                    <?php echo $_smarty_tpl->tpl_vars['btn']->value['string'];?>

                                </span>
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


                        <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']) {?>
                        <span class="ow_newsfeed_btn_wrap <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']['liked']) {?>ow_newsfeed_active<?php }?>">
                            <span class="ow_miniic_control <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']['allow']) {?>ow_cursor_pointer<?php }?> newsfeed_like_btn_cont <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']['liked']) {?>active<?php }?>">
                                <span <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']['error'])) {?>data-error="<?php echo $_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']['error'];?>
"<?php }?> class="ow_miniic_like <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']['allow']) {?>newsfeed_like_btn<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']['liked']) {?>newsfeed_active_button<?php }?>"></span>
                            </span><span class="newsfeed_counter_likes"><?php echo $_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']['count'];?>
</span>
                        </span>

                        <div class="ow_newsfeed_string">
                            <div class="newsfeed_likes_string" <?php if (!$_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']['count']) {?>style="display: none"<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['features']['system']['likes']['cmp'];?>

                            </div>
                        </div>
                        <?php }?>
                    </span>

                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['comments']) {?>
                <div <?php if (!$_smarty_tpl->tpl_vars['item']->value['features']['system']['comments']['expanded']) {?>style="display: none"<?php }?> class="newsfeed-comments-cont ow_newsfeed_features">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('block_decorator', array('name'=>'tooltip','addClass'=>'ow_newsfeed_tooltip ow_add_comments_form ow_small'));
$_block_repeat=true;
echo smarty_block_block_decorator(array('name'=>'tooltip','addClass'=>'ow_newsfeed_tooltip ow_add_comments_form ow_small'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                        <?php if ($_smarty_tpl->tpl_vars['item']->value['features']['system']['comments']) {?>
                            <div class="ow_newsfeed_comments">
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['features']['system']['comments']['cmp'];?>

                            </div>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_block_decorator(array('name'=>'tooltip','addClass'=>'ow_newsfeed_tooltip ow_add_comments_form ow_small'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                </div>
            <?php }?>

	    </div>
            
            
	</div>

        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['cycle'])) {?>
            <div <?php if ($_smarty_tpl->tpl_vars['item']->value['cycle']['lastItem']) {?>style="display: none"<?php }?> class="newsfeed-item-delim ow_border ow_newsfeed_delimiter ow_newsfeed_doublesided_stdmargin"></div>
        <?php }?>
</li><?php }
}
