<?php
/* Smarty version 3.1.30-dev/44, created on 2018-02-10 16:35:42
  from "/var/www/html/xihuan/sites/default/themes/2k18/templates/not_found.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_5a7f1f5e7bb4a0_45375959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ed94d854c7b7eb6a9e17e8ad08f8c5e493781e1' => 
    array (
      0 => '/var/www/html/xihuan/sites/default/themes/2k18/templates/not_found.tpl',
      1 => 1517153637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a7f1f5e7bb4a0_45375959 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_load_block')) require_once '/var/www/html/xihuan/sys/CODOF/Smarty/plugins/modifier.load_block.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>




<?php 
new Block_body_18436792905a7f1f5e7ba835_17324196($_smarty_tpl);
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} /var/www/html/xihuan/sites/default/themes/2k18/templates/not_found.tpl */
class Block_body_18436792905a7f1f5e7ba835_17324196 extends Smarty_Internal_Block
{
public $name = 'body';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>


    <style type="text/css">

        .codo_not_found {

            margin-top: 60px;
            background: white;
            box-shadow: 1px 1px 5px #ccc;
            padding: 20px;
        }

    </style>

    <div class="container">

        <?php echo smarty_modifier_load_block("block_not_found_before");?>
        
        <div class="codo_not_found">

            <?php echo smarty_modifier_load_block("block_not_found_start");?>


            <?php echo _t("The page you are looking for does not exists!");?>

            <?php echo smarty_modifier_load_block("block_not_found_end");?>


        </div>
        <?php echo smarty_modifier_load_block("block_not_found_after");?>


    </div>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'body'} */
}
