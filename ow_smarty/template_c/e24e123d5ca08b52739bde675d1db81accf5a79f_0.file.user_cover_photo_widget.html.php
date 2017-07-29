<?php
/* Smarty version 3.1.31, created on 2017-07-29 00:39:21
  from "C:\xampp\htdocs\eceshub\ow_plugins\coverphoto\views\components\user_cover_photo_widget.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597c3ba9269a56_02068453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e24e123d5ca08b52739bde675d1db81accf5a79f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\coverphoto\\views\\components\\user_cover_photo_widget.html',
      1 => 1473778206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597c3ba9269a56_02068453 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
?>
<style>
    #cropContainerHeader {
        width: 200px;
        height: 150px;
        position: relative; /* or fixed or absolute */
    }

</style>


<div class="parent_cover">
    <div class="page-wrapper">
        <div class="timeline-header-wrapper">

            <div class="cover-container">
                <div class="cover-wrapper">
                    <?php if (empty($_smarty_tpl->tpl_vars['empty_original_cover_path']->value)) {?><img src="<?php echo $_smarty_tpl->tpl_vars['user_cropped_cover_path']->value;?>
"><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['empty_cropped_cover_path']->value;?>
"><?php }?>
                    <div class="cover-progress"></div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['owner']->value) {?>
                <div class="cover-resize-wrapper">
                    <?php if (empty($_smarty_tpl->tpl_vars['empty_original_cover_path']->value)) {?><img src="<?php echo $_smarty_tpl->tpl_vars['user_original_cover_path']->value;?>
"><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['empty_original_cover_path']->value;?>
"><?php }?>
                    <div class="drag-div" align="center"><?php echo smarty_function_text(array('key'=>"coverphoto+drag_to_reposition_label"),$_smarty_tpl);?>
</div>
                    <div class="cover-progress"></div>
                </div>

                <div class="timeline-name-wrapper">
                </div>
                <?php }?>

            </div>

            <?php if ($_smarty_tpl->tpl_vars['owner']->value) {?>
            <div class="coverphoto-buttons">
                <div class=" timeline-buttons cover-resize-buttons">
                    <a class="ow_lbutton" onclick="saveReposition();"><?php echo smarty_function_text(array('key'=>"coverphoto+save_position_label"),$_smarty_tpl);?>
</a>
                    <a class="ow_lbutton" onclick="cancelReposition();"><?php echo smarty_function_text(array('key'=>"coverphoto+cancel_position_label"),$_smarty_tpl);?>
</a>
                    <form class="cover-position-form hidden" method="post">
                        <input class="cover-position" name="pos" value="0" type="hidden">
                        <input class="cover-photo-height" name="cover_photo_height" value="0" type="hidden">
                    </form>
                </div>
                <div class="timeline-buttons default-buttons">
                    <a class="ow_lbutton" onclick="repositionCover();"><?php echo smarty_function_text(array('key'=>"coverphoto+reposition_label"),$_smarty_tpl);?>
</a>
                    <a href="javascript://" class="ow_lbutton" id="cover_edit_for_select_float"><?php echo smarty_function_text(array('key'=>'coverphoto+edit_for_select_cover'),$_smarty_tpl);?>
</a>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div><?php }
}
