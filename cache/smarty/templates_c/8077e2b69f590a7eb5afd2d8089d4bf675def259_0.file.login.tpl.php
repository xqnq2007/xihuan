<?php
/* Smarty version 3.1.30-dev/44, created on 2018-01-28 16:36:45
  from "/var/www/html/xihuan/admin/layout/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/44',
  'unifunc' => 'content_5a6dfc1d070b54_49849582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8077e2b69f590a7eb5afd2d8089d4bf675def259' => 
    array (
      0 => '/var/www/html/xihuan/admin/layout/templates/login.tpl',
      1 => 1517153553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6dfc1d070b54_49849582 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="content-header" id="breadcrumb_forthistemplate_hack">
    <h1>&nbsp;</h1>
    <ol class="breadcrumb" style="float:left; left:10px;">
         <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
         <li class="active"><i class="fa fa-lock"></i> Login</li>
    </ol>
    
</section>



<div class="row" id="msg_cntnr">
    <div class="col-lg-4"><!-- just an empty tag so that the next div looks centeres--> </div>
    <div class="col-lg-4">
        <?php if ($_smarty_tpl->tpl_vars['msg']->value == '') {?>

        <?php } else { ?>
            <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
        <?php }?>

    </div>
</div>
<br/>


<div class="row" id="add_cat">
    <div class="col-lg-4"><!-- just an empty tag so that the next div looks centeres--> </div>
    
    <div class="col-lg-4">
        <div class="box box-primary">
            <div class="box-header" style="text-align: center">
                <img src="<?php echo @constant('A_RURI');?>
img/mstile-70x70.png" />
            </div>
            <hr/>
            <form class="box-body" action="?page=login" role="form" method="post" enctype="multipart/form-data">
               
                <input type="text" name="username"  value="" class="form-control" placeholder="Username" required />
                <br/>
                <input type="password" name="password"  value="" class="form-control" placeholder="Password" required />
                <br/>
                <input type="submit" value="Login" class="btn btn-success btn-block" />

            </form>
        </div>
    </div>

</div>
                        
            
<?php echo '<script'; ?>
 type="text/javascript">

    jQuery('input[name=username]').focus();

<?php echo '</script'; ?>
><?php }
}
