<?php
/* Smarty version 3.1.31, created on 2017-08-05 03:51:41
  from "C:\xampp\htdocs\eceshub\ow_plugins\newsfeed\views\formats\image_content.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5985a33d6aad80_06005067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f198a19a3b17feb57c1661d2121fcdd34ecbd3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_plugins\\newsfeed\\views\\formats\\image_content.html',
      1 => 1497519098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5985a33d6aad80_06005067 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_script')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_modifier_more')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\modifier.more.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    
        .feedRtl {
            direction: rtl;
            text-align: right;
            }

        .feedLtr {
            direction: ltr;
            text-align: left;
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


    function checkRtl( character ) {
        var RTL = ['ا','ب','پ','ت','س','ج','چ','ح','خ','د','ذ','ر','ز','ژ','س','ش','ص','ض','ط','ظ','ع','غ','ف','ق','ک','گ','ل','م','ن','و','ه','ی'];
        return RTL.indexOf( character ) > -1;
    }

    function checkLtr( character ) {
        var LTR = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        return LTR.indexOf( character ) > -1;
    }

    function fixAlignment (divs)
    {
        for ( var index = 0; index < divs.length; index++ )
        {
            var isRtl=false;
            for ( var indexText = 0; indexText < divs[index].innerText.length; indexText++ )
            {
                if( checkRtl( divs[index].innerText[indexText] ) )
                {
                    divs[index].className += " feedRtl";
                    isRtl =true;
                    break;
                }else if( checkLtr( divs[index].innerText[indexText] ) ){
                    break;
                }
            }
            if(!isRtl){
                divs[index].className += " feedLtr";
            }
        }
    }

    function addLtrToPictures(divs){
        for ( var index = 0; index < divs.length; index++ )
        {
            divs[index].className += " feedLtr";
        }
    }

    $(document).ready(
        function(){
                fixAlignment(document.getElementsByClassName('ow_newsfeed_item_content'));
                fixAlignment(document.getElementsByClassName('ow_autolink'));
                fixAlignment(document.getElementsByClassName('ow_newsfeed_body_status'));
                fixAlignment(document.getElementsByClassName('ow_newsfeed_content'));
                addLtrToPictures(document.getElementsByClassName('ow_newsfeed_item_picture'));
                fixAlignment(document.getElementsByClassName('ow_newsfeed_item_title'));
                fixAlignment(document.getElementsByClassName('ow_remark ow_smallmargin'));
                fixAlignment(document.getElementsByClassName('ow_newsfeed_activity_title'));
                fixAlignment(document.getElementsByClassName('ow_mini_ipc_header'));
                fixAlignment(document.getElementsByClassName('ow_mini_ipc_content'));
        }
    );

<?php $_block_repeat=false;
echo smarty_block_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['status'])) {?><div class="ow_newsfeed_body_status ow_smallmargin"><?php echo smarty_modifier_more($_smarty_tpl->tpl_vars['vars']->value['status'],300);?>
</div><?php }?>

<div class="ow_newsfeed_oembed_atch clearfix">
    <div class="ow_newsfeed_item_picture">
        <a target="_blank" href="<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['url'])) {
echo $_smarty_tpl->tpl_vars['vars']->value['url'];
} else { ?>javascript://<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['vars']->value['thumbnail'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vars']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /></a>
    </div>
    <div class="ow_newsfeed_item_content">
        <a target="_blank" class="ow_newsfeed_item_title" href="<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['url'])) {
echo $_smarty_tpl->tpl_vars['vars']->value['url'];
} else { ?>javascript://<?php }?>"><?php echo $_smarty_tpl->tpl_vars['vars']->value['title'];?>
</a>
        <div class="ow_remark ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['vars']->value['description'];?>
</div>

        <?php if ($_smarty_tpl->tpl_vars['vars']->value['userList']) {?>
            <div class="owm_newsfeed_ulist">
                <div class="owm_newsfeed_item_padding owm_newsfeed_item_box clearfix">
                    <div class="owm_newsfeed_ulist_count" style="display:inline-block">
                        <?php echo $_smarty_tpl->tpl_vars['vars']->value['userList']['label'];?>

                    </div>
                    <?php echo $_smarty_tpl->tpl_vars['vars']->value['userList']['list'];?>

                </div>
            </div>
        <?php }?>
    </div>
</div><?php }
}
