<?php
/* Smarty version 3.1.30-dev/44, created on 2018-01-28 16:40:38
  from "/var/www/html/xihuan/admin/layout/templates/mail/templates.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_5a6dfd06f112a0_19399756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3838c78cad4c1e0e97cc10b56adccdb1db08948e' => 
    array (
      0 => '/var/www/html/xihuan/admin/layout/templates/mail/templates.tpl',
      1 => 1517153553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6dfd06f112a0_19399756 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_get_opt')) require_once '/var/www/html/xihuan/sys/CODOF/Smarty/plugins/modifier.get_opt.php';
?>
<section class="content-header" id="breadcrumb_forthistemplate_hack">
    <h1>&nbsp;</h1>
    <ol class="breadcrumb" style="float:left; left:10px;">
         <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
         <li class=""><i class="fa fa-envelope"></i> Mail Settings</li>
         <li class="active"><i class="fa fa-file"></i> Templates</li>
    </ol>
    
</section>
<div class="col-md-6">
<div  class="box box-info">
<form class="box-body" action="?page=mail/templates" role="form" method="post" enctype="multipart/form-data">

Await Approval Subject:
<input type="text" class="form-control" name="await_approval_subject" value="<?php echo smarty_modifier_get_opt("await_approval_subject");?>
"/><br/>
Await Approval Message:
<textarea class="form-control" style="height:200px" name="await_approval_message"><?php echo smarty_modifier_get_opt("await_approval_message");?>
</textarea><br/>

Post Notify Subject:
<input type="text" class="form-control" name="post_notify_subject" value="<?php echo smarty_modifier_get_opt("post_notify_subject");?>
"/><br/>
Post Notify Message:
<textarea class="form-control" style="height:200px" name="post_notify_message"><?php echo smarty_modifier_get_opt("post_notify_message");?>
</textarea><br/>

Password Reset Subject:
<input type="text" class="form-control" name="password_reset_subject" value="<?php echo smarty_modifier_get_opt("password_reset_subject");?>
"/><br/>
Password Reset Message:
<textarea class="form-control" style="height:200px" name="password_reset_message"><?php echo smarty_modifier_get_opt("password_reset_message");?>
</textarea><br/>
<input type="hidden" name="CSRF_token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
<input type="submit" value="Save" class="btn btn-primary"/>
</form>
 
<?php }
}
