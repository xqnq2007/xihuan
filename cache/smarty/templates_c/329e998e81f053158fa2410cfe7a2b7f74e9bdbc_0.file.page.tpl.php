<?php
/* Smarty version 3.1.30-dev/44, created on 2018-02-20 22:08:09
  from "/var/www/html/xihuan/sites/default/themes/2k18/templates/page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_5a8c9c49792ba0_06714293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '329e998e81f053158fa2410cfe7a2b7f74e9bdbc' => 
    array (
      0 => '/var/www/html/xihuan/sites/default/themes/2k18/templates/page.tpl',
      1 => 1517153637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a8c9c49792ba0_06714293 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_load_block')) require_once '/var/www/html/xihuan/sys/CODOF/Smarty/plugins/modifier.load_block.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>




<?php 
new Block_body_13286236405a8c9c49792019_46575212($_smarty_tpl);
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} /var/www/html/xihuan/sites/default/themes/2k18/templates/page.tpl */
class Block_body_13286236405a8c9c49792019_46575212 extends Smarty_Internal_Block
{
public $name = 'body';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>


    <style type="text/css">

        .codo_page_content {

            margin-top: 20px;
            background: white;
            box-shadow: 1px 1px 5px #ccc;
            padding: 20px;
            
        }
        .container {
        
            padding-top: 60px;
            overflow-x:hidden;
        }

    </style>

    <div class="container">

        <?php echo smarty_modifier_load_block("block_custom_page_before");?>


        <div class="codo_page_content">

            <?php echo smarty_modifier_load_block("block_custom_page_start");?>


            <?php echo $_smarty_tpl->tpl_vars['contents']->value;?>


            <?php echo smarty_modifier_load_block("block_custom_page_end");?>


        </div>

        <?php echo smarty_modifier_load_block("block_custom_page_after");?>


    </div>
<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'body'} */
}
