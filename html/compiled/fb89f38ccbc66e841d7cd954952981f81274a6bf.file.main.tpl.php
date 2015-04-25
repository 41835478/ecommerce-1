<?php /* Smarty version Smarty-3.1.18, created on 2014-09-28 07:39:22
         compiled from "html/files/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135410293253886acc8e8e96-97738678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb89f38ccbc66e841d7cd954952981f81274a6bf' => 
    array (
      0 => 'html/files/main.tpl',
      1 => 1411889955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135410293253886acc8e8e96-97738678',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53886accaa9a82_24328405',
  'variables' => 
  array (
    'URL' => 0,
    'client_id' => 0,
    'client_name' => 0,
    'YEAR' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53886accaa9a82_24328405')) {function content_53886accaa9a82_24328405($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>MQ Planet - Clients Area</title>
  <link href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
/theme/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
/theme/css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
/theme/css/theme.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
/theme/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
/theme/js/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
/theme/js/hoverIntent.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
/theme/js/superfish.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
/theme/js/highcharts.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
/theme/js/script.js"></script>
  
  
 </head>
 <body>
 <?php if ($_smarty_tpl->tpl_vars['client_id']->value!='') {?>
  <div class="header overflow">
  
    <div class="wrapper overflow">
     <div class="logo"></div>
     
     <div class="details">
     <ul>
        <li><i class="icon-wel"></i>Welcome <span><?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
</span></li>
        <li><i class="icon-setting"></i><a href="#" id="setting">Settings</a></li>
        <li><i class="icon-logout"></i><a href="#" id="logout">Logout</a></li>


     </ul>
     
          <div style="text-align:right;margin-top:10px">
        <a href="javascript:void(window.open('http://www.mqplanet.com/support/chat.php','','width=590,height=610,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))">
        <img src="http://www.mqplanet.com/support/image.php?id=04&amp;type=inlay" width="158" height="45" border="0" alt="MQ Planet Live Help" />
        </a>
    </div>
    <div id="livezilla_tracking" style="display:none"></div>
    <script type="text/javascript">
        var script = document.createElement("script");
        script.type="text/javascript";
        var src = "http://www.mqplanet.com/support/server.php?request=track&output=jcrpt&nse="+Math.random();
        setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);
    </script>
    <noscript><img src="http://www.mqplanet.com/support/server.php?request=track&amp;output=nojcrpt" width="0" height="0" style="visibility:hidden;" alt="" /></noscript>
     </div>

    </div> 
  </div>
<?php }?>
  <?php if ($_smarty_tpl->tpl_vars['client_id']->value!='') {?>
  <?php echo $_smarty_tpl->getSubTemplate ('menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php }?>


  <?php if ($_smarty_tpl->tpl_vars['client_id']->value=='') {?><?php echo $_smarty_tpl->getSubTemplate ('login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php } else { ?>
  
   <div class="overflow main-inner wrapper">
 
     <div class="col3"> </div> 
     <!-- <div id="main"></div> -->
    
    <div class="col2"></div>
</div>
  <?php }?>

  <div id="loading-div" class="modal hide fade">
   <div class="modal-body">
    <h5 class="alert alert-info">Processing, Please wait...</h5>
   </div>
  </div>

  <div id="request-result" class="modal hide fade">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h5>Request Result</h5>
   </div>
   <div class="modal-body">
    <p></p>
   </div>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['client_id']->value!='') {?>
  <div class="footer-wrapper centerT">Copyright &copy; 2007-<?php echo $_smarty_tpl->tpl_vars['YEAR']->value;?>
 MQ Planet. All Rights Reserved</div>
  <?php }?>
 </body>
</html><?php }} ?>
