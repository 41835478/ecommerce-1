<?php /* Smarty version Smarty-3.1.18, created on 2014-09-28 07:40:57
         compiled from "html/files/servers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20951294685389ca6062fbd8-19798685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '344882d2c6378e82d767a99f51feb1fcdb2d1fa2' => 
    array (
      0 => 'html/files/servers.tpl',
      1 => 1411890045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20951294685389ca6062fbd8-19798685',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5389ca6066f453_70786037',
  'variables' => 
  array (
    'servers' => 0,
    'server' => 0,
    'servertypes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5389ca6066f453_70786037')) {function content_5389ca6066f453_70786037($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <div class="header_form2" >   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Servers List</div>
      
    </div>
     <div class="pers_title">
        <ul>
            <li style="width:110px">IP Address</li>
            <li style="width:110px">Type</li>
            <li style="width:110px">Start date</li>
            <li style="width:110px">End date</li>
            <li style="width:110px">Action</li>
        </ul>
    </div>   
    <?php  $_smarty_tpl->tpl_vars['server'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['server']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['servers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['server']->key => $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->_loop = true;
?>   
        <div class="pers_body">
        <ul>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['server']->value['name'];?>
</li>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['servertypes']->value[$_smarty_tpl->tpl_vars['server']->value['server_type']];?>
</li>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['server']->value['start_date'];?>
</li>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['server']->value['end_date'];?>
</li>
            <li style="width:110px"><a href="#" style="width:10px;height:10px" id="edit_server" onclick="fillServer('<?php echo $_smarty_tpl->tpl_vars['server']->value['id'];?>
')"><div class="foot_icon2" style="margin-left:40px;float:left"></div><div class="dele_cont" style="margin-left:5px;float:left"></div></a></li>
        </ul>
    </div>
    <?php } ?>
</div> 

 <div class="header_form" >
 <input type="hidden" id="selectedServer" />   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Tools</div>
       <a href="#"><div class="head_close2"></div></a>
    </div>
    <div class="tool_head">
        <a href="#" id="ded_img1"><div class="ded_img"><div class="ded_img1"></div></div></a><div class="ded_select1"></div>
        <a href="#" id="ded_img2"><div class="ded_img"><div class="ded_img2"></div></div></a><div class="ded_select2" ></div>
        <a href="#" id="ded_img3"><div class="ded_img"><div class="ded_img3"></div></div></a><div class="ded_select3"></div>
        <a href="#" id="ded_img4"><div class="ded_img"><div class="ded_img4"></div></div></a><div class="ded_select4"></div>
    </div>
 
 <div class="tool_info">

    <div class="tool_sli2">
    <span>Reboot server</span>
    <div class="reboot_msg">
    <div class="re_img"></div>
    <span2>Warning! This functionality can cause unavailability of your server and may lead to data loss. Please note that we do not provide any guarantee. </span2>
    </div>
    <span1 id="confirmMessage" style="display:none">Are you sure you want to reboot the selected server</span1>
    <br />
    <input type="button" id="ServerReboot" value="Reboot" style="margin-top:10px" />
    </div>
    <div class="tool_sli3">
    <div class="ftp_back_haed">
        <ul style="color:black;">
            <li>Backup server</li>
            <li>Login</li>
            <li>Root password</li>
        </ul>
    </div>
    <div class="ftp_back_haed2" >
        <ul>
            <li ><div id="ftpHost"></div></li>
            <li ><div id="ftpUser"></div></li>
            <li ><div id="ftpPass" ></div></li>
        </ul>
    </div>
    <div class="ftp_back_span">
    <span style="color:black ;float:left">Information:  </span><p style="float:left ;width:467px; margin-left:3px;font-size:11px"> in the field below, you can change your password anytime. </p>
    <p style="float:left;font-size:11px">This Password must consist of 6 characters minimum . its must also contain alpha-nemercil characters only .</p>
    <div class="ftp_back_chPass">
    <span>FTP Password</span> <input type="password" id="ftpNewPassword" /> <input type="submit" id="saveServerFTP" value="Save"/>
    <div class="ftp_back_msg">
    <div class="ftp_back_msg_img"></div>
    <span1>You have the possibility to save
     up to 100 GB of data on an FTP server .
     Please note : the data on this FTP
     server is not additionally  backed up .
     we are not respnsible for any possible 
     data loses. Remember that you can only
     login to the FTP server from your own 
     server.</span1>
    </div>
    
    </div>
    </div>
    </div>
    <div class="tool_sli4">
    <div id="BandWidth" ></div>
    </div>
    <div class="tool_sli1">
    <div class="Compnents">
          <div id="serverComponent" ></div>
    </div>
    </div>
 </div>
 </div><?php }} ?>
