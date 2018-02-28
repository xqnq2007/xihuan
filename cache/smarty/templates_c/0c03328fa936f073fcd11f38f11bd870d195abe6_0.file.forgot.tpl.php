<?php
/* Smarty version 3.1.30-dev/44, created on 2018-02-21 08:50:06
  from "/var/www/html/xihuan/sites/default/themes/2k18/templates/user/forgot.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_5a8d32be81bc30_48891261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c03328fa936f073fcd11f38f11bd870d195abe6' => 
    array (
      0 => '/var/www/html/xihuan/sites/default/themes/2k18/templates/user/forgot.tpl',
      1 => 1517153635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a8d32be81bc30_48891261 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_load_block')) require_once '/var/www/html/xihuan/sys/CODOF/Smarty/plugins/modifier.load_block.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>




<?php 
new Block_body_15082535935a8d32be81b4b4_87170571($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} /var/www/html/xihuan/sites/default/themes/2k18/templates/user/forgot.tpl */
class Block_body_15082535935a8d32be81b4b4_87170571 extends Smarty_Internal_Block
{
public $name = 'body';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>


    <style type="text/css">

        #breadcrumb {
            padding: 0;
        }
    </style>

    <div id="breadcrumb" class="col-md-12">

        <div class="codo_breadcrumb_list btn-breadcrumb hidden-xs">                
            <?php echo smarty_modifier_load_block("block_breadcrumbs_before");?>

            <a href="<?php echo @constant('RURI');
echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><div><?php echo $_smarty_tpl->tpl_vars['home_title']->value;?>
</div></a>
            <a href="<?php echo @constant('RURI');?>
user/login"><div><?php echo _t("User login");?>
</div></a>
            <a href="#"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</a>
            <?php echo smarty_modifier_load_block("block_breadcrumbs_after");?>

        </div>
    </div>

    <div class="container">

        <div class="row">

            <div id='codo_new_password_resp' class='codo_notification' style="display: none"></div>

            <?php echo smarty_modifier_load_block("block_forgot_form_before");?>
  
            <div class="codo_block col-md-12">

                <?php echo smarty_modifier_load_block("block_forgot_form_start");?>
  
                <div class="row">

                    <div class="col-md-6">            
                        <input class="codo_input" type="text" id="name" maxlength="60" placeholder="<?php echo _t('username or e-mail address');?>
" required="">
                    </div>

                </div>

                <div class='row'>

                    <div class='col-md-6'>

                        <button id='req_pass' class='codo_btn codo_btn_primary'><?php echo _t('E-mail reset token');?>
</button>
                        <img id="codo_sending_mail" style="display: none" src="<?php echo @constant('CURR_THEME');?>
img/ajax-loader.gif" />
                    </div>
                </div>
                <?php echo smarty_modifier_load_block("block_forgot_form_end");?>
                  
            </div>
            <?php echo smarty_modifier_load_block("block_forgot_form_after");?>
  

        </div>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">

        function on_codo_loaded() {

            jQuery('document').ready(function ($) {

                //keep initial focus
                $('#name').focus();

                $('input').bind('keypress', function (e) {

                    var code = e.keyCode || e.which;
                    if (code === 13) { //Enter keycode

                        $('#req_pass').trigger('click');
                    }
                });


                $('#req_pass').on('click', function () {

                    $('#codo_sending_mail').show();
                    $.getJSON(
                            codo_defs.url + 'Ajax/user/login/req_pass',
                            {
                                ident: $.trim($('#name').val()),
                                token: codo_defs.token
                            },
                    function (response) {

                        $('#codo_sending_mail').hide();
                        CODOF.util.update_response_status(response, $('#codo_new_password_resp'), true);
                    }
                    );

                });


            });
        }
    <?php echo '</script'; ?>
>

<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'body'} */
}
