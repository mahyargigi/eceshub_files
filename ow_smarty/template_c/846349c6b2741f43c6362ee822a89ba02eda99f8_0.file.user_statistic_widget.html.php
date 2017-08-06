<?php
/* Smarty version 3.1.31, created on 2017-08-06 05:48:23
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\admin\views\components\user_statistic_widget.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59871017456909_14435562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '846349c6b2741f43c6362ee822a89ba02eda99f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\admin\\views\\components\\user_statistic_widget.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59871017456909_14435562 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_script')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_url_for_route')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.url_for_route.php';
if (!is_callable('smarty_function_decorator')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.decorator.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    #admin-user-statistics-header #user-statistics-menu {
        float:right;
    }

    #admin-user-statistics-container .ow_ajaxloader_preloader {
        min-height:300px;
    }

    #admin-user-browse {
        float:right;
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

    var defaultPeriod = "<?php echo $_smarty_tpl->tpl_vars['defaultPeriod']->value;?>
";

    $("#user-statistics-menu a").on("click", function(){
        defaultPeriod = $(this).attr("id");
        defaultPeriod = defaultPeriod.replace("user_menu_statistics_", "");

        reloadChart();
    });

    /**
     * Reload chart
     *
     * @return void
     */
    function reloadChart()
    {
        if (!defaultPeriod)
        {
            return;
        }

        OW.loadComponent("ADMIN_CMP_UserStatistic",
                [{ "defaultPeriod" : defaultPeriod }], "#admin-user-statistics-container");
    }
<?php $_block_repeat=false;
echo smarty_block_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<div id="admin-user-statistics-header">
    <div id="user-statistics-menu">
        <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

    </div>
    <div class="clearfix"></div>
</div>

<div id="admin-user-statistics-container">
    <?php echo $_smarty_tpl->tpl_vars['statistics']->value;?>

</div>

<div id="admin-user-browse">
    <?php ob_start();
echo smarty_function_url_for_route(array('for'=>'admin_users_browse'),$_smarty_tpl);
$_prefixVariable1=ob_get_clean();
echo smarty_function_decorator(array('name'=>"button_list_item",'langLabel'=>"admin+statistics_browse_users",'onclick'=>"location.href='".$_prefixVariable1."'"),$_smarty_tpl);?>

</div>
<div class="clearfix"></div>
<?php }
}
