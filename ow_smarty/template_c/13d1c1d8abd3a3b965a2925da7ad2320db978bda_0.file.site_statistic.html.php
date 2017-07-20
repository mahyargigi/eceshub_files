<?php
/* Smarty version 3.1.31, created on 2017-07-20 06:59:09
  from "C:\xampp\htdocs\eceshub\ow_system_plugins\base\views\components\site_statistic.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5970b72d4b4f99_19898950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13d1c1d8abd3a3b965a2925da7ad2320db978bda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eceshub\\ow_system_plugins\\base\\views\\components\\site_statistic.html',
      1 => 1463982332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5970b72d4b4f99_19898950 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_style')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.style.php';
if (!is_callable('smarty_block_script')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\block.script.php';
if (!is_callable('smarty_function_text')) require_once 'C:\\xampp\\htdocs\\eceshub\\ow_smarty\\plugin\\function.text.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('style', array());
$_block_repeat=true;
echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    .statistic_amount {
        margin-top:10px;
    }

    .statistic_amount h3 {
        margin-bottom: 10px;
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

    var ctx = $("#<?php echo $_smarty_tpl->tpl_vars['chartId']->value;?>
").get(0).getContext("2d");
    ctx.canvas.height = 100;

    var data = {
        labels: <?php echo $_smarty_tpl->tpl_vars['categories']->value;?>
,
        datasets: <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

    };

    
        var lineChart = new Chart(ctx).Line(data, {
            animation: false,
            responsive : true,
            tooltipTemplate: "<?php echo '<%'; ?>
= datasetLabel <?php echo '%>'; ?>
 - <?php echo '<%'; ?>
= value <?php echo '%>'; ?>
",
            multiTooltipTemplate: "<?php echo '<%'; ?>
= datasetLabel <?php echo '%>'; ?>
 - <?php echo '<%'; ?>
= value <?php echo '%>'; ?>
"
        });
    

    if ( typeof OW.WidgetPanel != "undefined" )
    {
        // Rebuild the chart
        OW.WidgetPanel.bind("move", function(e)
        {
            var canvasId = $(e.widget).find("canvas").attr("id");

            if (canvasId == "<?php echo $_smarty_tpl->tpl_vars['chartId']->value;?>
")
            {
                lineChart.destroy();
                lineChart = new Chart(ctx).Line(data, {
                    animation: false,
                    responsive : true,
                    tooltipTemplate: "<?php echo '<%';?>= datasetLabel <?php echo '%>';?> - <?php echo '<%';?>= value <?php echo '%>';?>",
                    multiTooltipTemplate: "<?php echo '<%';?>= datasetLabel <?php echo '%>';?> - <?php echo '<%';?>= value <?php echo '%>';?>"
                });
            }
        });
    }
<?php $_block_repeat=false;
echo smarty_block_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<div class="statistic_chart_wrapper">
    <canvas id="<?php echo $_smarty_tpl->tpl_vars['chartId']->value;?>
"></canvas>
</div>
<div class="statistic_amount">
    <h3><?php echo smarty_function_text(array('key'=>'admin+statistics_amount_for_period'),$_smarty_tpl);?>
 :</h3>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['total']->value, 'info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
?>
        <li>
            <?php echo $_smarty_tpl->tpl_vars['info']->value['label'];?>
: <b><?php echo $_smarty_tpl->tpl_vars['info']->value['count'];?>
</b>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </ul>
</div>
<?php }
}
