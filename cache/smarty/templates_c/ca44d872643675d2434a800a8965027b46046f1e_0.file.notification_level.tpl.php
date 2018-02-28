<?php
/* Smarty version 3.1.30-dev/44, created on 2018-01-30 00:30:31
  from "/var/www/html/xihuan/sites/default/themes/2k18/templates/forum/notification_level.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_5a6fbca7515e26_76306525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca44d872643675d2434a800a8965027b46046f1e' => 
    array (
      0 => '/var/www/html/xihuan/sites/default/themes/2k18/templates/forum/notification_level.tpl',
      1 => 1517153637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6fbca7515e26_76306525 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="codo_notification_block">

    <div class="codo_notification_block_type"><?php echo _t("Notification level");?>
</div>
    <div class="codo_notification_block_slider">
        <input type="text" id="codo_notification_selector<?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {
echo $_smarty_tpl->tpl_vars['id']->value;
}?>" class="codo_notification_selector col-md-12 col-xs-12" value="" 
               data-slider-min="1" data-slider-handle="square"
               data-slider-max="4" data-slider-step="1" data-slider-value="<?php echo $_smarty_tpl->tpl_vars['my_subscription_type']->value;?>
" 
               data-slider-orientation="horizontal" data-slider-selection="before" 
               data-slider-tooltip="hide"
               
               <?php if (isset($_smarty_tpl->tpl_vars['is_category']->value)) {?>
                   
                   data-iscategory="<?php echo $_smarty_tpl->tpl_vars['is_category']->value;?>
" 
                   
                   <?php if ($_smarty_tpl->tpl_vars['is_category']->value == 'no') {?>
                       data-cid='<?php echo $_smarty_tpl->tpl_vars['topic']->value['cid'];?>
'
                       data-tid='<?php echo $_smarty_tpl->tpl_vars['topic']->value['tid'];?>
'
                   
                   <?php } else { ?>
                       data-cid='<?php echo $_smarty_tpl->tpl_vars['cat']->value['cid'];?>
'
                       data-tid='<?php echo $_smarty_tpl->tpl_vars['cat']->value['tid'];?>
'
                                              
                   <?php }?>   
                       
               <?php }?>
               
               >
    </div>

    <div class="codo_notification_block_desc">
        <span id="codo_notification_block_text<?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {
echo $_smarty_tpl->tpl_vars['id']->value;
}?>"></span>
        <span class="codo_notification_block_muted hide">
            <ul>
                <li>
                    <?php echo _t("No notifications");?>

                </li>
            </ul>
        </span>
        <span class="codo_notification_block_default hide">
            <ul>
                <li>
                    <b><?php echo _t("Only");?>
</b><?php echo _t(" mentions.");?>

                </li>
            </ul>
        </span>
        <span class="codo_notification_block_following hide">
            <ul>
                <li>
                    <?php echo _t("New replies/topics/mentions");?>
        
                </li>
                <li>
                    <?php echo _t("unread count next to topic");?>

                </li>
            </ul>
        </span>
        <span class="codo_notification_block_notified hide">
            <ul>
                <li>
                    <?php echo _t("New replies/topics/mentions");?>
        
                </li>
                <li>
                    <?php echo _t("Unread count next to topic");?>

                </li>
                <li>
                    <?php echo _t("Email notifications");?>

                </li>
            </ul>
        </span>

    </div>

</div>
<?php }
}
