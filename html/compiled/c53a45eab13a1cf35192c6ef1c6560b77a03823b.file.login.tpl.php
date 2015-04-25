<?php /* Smarty version Smarty-3.1.18, created on 2014-05-30 14:26:04
         compiled from "html/files/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136651721453886accab0522-86594078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c53a45eab13a1cf35192c6ef1c6560b77a03823b' => 
    array (
      0 => 'html/files/login.tpl',
      1 => 1399458328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136651721453886accab0522-86594078',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53886accab4139_41650454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53886accab4139_41650454')) {function content_53886accab4139_41650454($_smarty_tpl) {?><div class="page">
<div class="page_top">
<div class="test1">
<div class="test2">
<div class="login-wrapper centerM curved" id="login-wrapper">
  <div class="after_logo"><div class="logo"></div></div>
 <div class="curved-tl curved-tr login-title">Member Login</div>
 <div class="form-horizontal">
  <p class="sep-10"></p>
  
  <div class="control-group">
   <div class="controls">
    <div class="input-appendLog">
     <input type="text" id="cid" placeholder="Login" />
     <span class="add-on"><i class="icon-user"></i></span>
    </div>
   </div>
  </div>
  <div class="control-group">

   <div class="controls">
    <div class="input-appendPass">
     <input type="password" id="cpassword" placeholder="Password" />
     <span class="add-on"><i class="icon-eye-close"></i></span>
    </div>
   </div>
  </div>
  <div class="control-group">
   <label class="control-label" ></label>
   <div class="controls">
    <div>
   
     <a href="#" id="forget-password">Forget Password</a>
    </div>
   </div>
  </div>  
  <div class="control-group">
   <div class="controls">
    <button type="submit" id="login-btn" class="btn btn-primary">Login</button>
   </div>
  </div>
  <p id="login-result"></p>
 </div>
</div>
</div>
</div>
</div>
<div class="page_bottom">

</div>
</div>

<script>
$(document).ready(function(){
  centerVer('login-wrapper');
});
</script><?php }} ?>
