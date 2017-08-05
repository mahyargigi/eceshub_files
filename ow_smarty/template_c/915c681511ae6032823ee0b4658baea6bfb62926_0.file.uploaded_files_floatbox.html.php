<?php
/* Smarty version 3.1.31, created on 2017-08-05 03:37:21
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\admin\views\components\uploaded_files_floatbox.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59859fe1152e19_74958106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '915c681511ae6032823ee0b4658baea6bfb62926' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\admin\\views\\components\\uploaded_files_floatbox.html',
      1 => 1499503962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59859fe1152e19_74958106 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
?>
<div class="ow_hidden">
    <div id="ow-photo-view" class="ow_photoview_wrap clearfix ow_bg_color">
        <?php if (!empty($_smarty_tpl->tpl_vars['authError']->value)) {?>
        <div id="ow-photo-view-error" style="padding: 45px 10px 65px">
            <div class="ow_anno ow_nocontent"><?php echo $_smarty_tpl->tpl_vars['authError']->value;?>
</div>
        </div>
        <?php } else { ?>
        <div class="ow_photoview_stage_wrap">
            <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" class="ow_photo_img ow_photo_view" />
            <div class="ow_photo_context_action" style="display: none"></div>
            <a class="ow_photoview_arrow_left" href="javascript://"><i></i></a>
            <a class="ow_photoview_arrow_right" href="javascript://"><i></i></a>
        </div>
        <div class="ow_photoview_info_wrap">
            <div class="ow_photoview_info">
                <div class="ow_photo_scroll_cont">
                    <input type="hidden" class="ow_photoview_id" name="photo_id" />
                    <div class="ow_photoview_title ow_small ow_smallmargin">
                        <h5><?php echo smarty_function_text(array('key'=>"admin+title"),$_smarty_tpl);?>
:</h5>
                        <input type="text" name="title" />
                    </div>

                    <div class="ow_photoview_url ow_small ow_smallmargin">
                        <h5><?php echo smarty_function_text(array('key'=>"admin+url"),$_smarty_tpl);?>
:</h5>
                        <input type="text" name="url" readonly="readonly" class="ow_disabled" />
                        <a href="#"><?php echo smarty_function_text(array('key'=>"admin+copy_url"),$_smarty_tpl);?>
</a>
                    </div>

                    <div class="ow_photoview_date ow_small">
                        <?php echo smarty_function_text(array('key'=>"admin+date"),$_smarty_tpl);?>
: <b><span id="photo-date"></span></b>
                    </div>
                    <div class="ow_photoview_size ow_small">
                        <?php echo smarty_function_text(array('key'=>"admin+size"),$_smarty_tpl);?>
: <b><span id="photo-size"></span></b>
                    </div>
                    <div class="ow_photoview_filesize ow_small">
                        <?php echo smarty_function_text(array('key'=>"admin+filesize"),$_smarty_tpl);?>
: <b><span id="photo-filesize"></span></b>
                    </div>

                    <div class="ow_photoview_save ow_small ow_right">
                        <span class="ow_button">
                            <span class=" ow_positive ow_btn_delimiter">
                                <input type="submit"  name="save"  value="<?php echo smarty_function_text(array('key'=>"admin+save_btn_label"),$_smarty_tpl);?>
"  class="ow_positive ow_btn_delimiter image_save_data" name="submit" />
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="ow_feed_comments_input_sticky"></div>
        </div>
        <?php }?>
    </div>
</div><?php }
}
