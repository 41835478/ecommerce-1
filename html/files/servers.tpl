{include file='header.tpl'}
{include file='submenu.tpl'}
    
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
    {foreach from=$servers item=server}   
        <div class="pers_body">
        <ul>
            <li style="width:110px">{$server.name}</li>
            <li style="width:110px">{$servertypes.{$server.server_type}}</li>
            <li style="width:110px">{$server.start_date}</li>
            <li style="width:110px">{$server.end_date}</li>
            <li style="width:110px"><a  style="width:10px;height:10px" id="edit_server" onclick="fillServer('{$server.id}')"><i class="fa fa-list"></i></a></li>
        </ul>
    </div>
    {/foreach}
</div> 

 <div class="header_form details_tabs_all_div" >
 <input type="hidden" id="selectedServer" />   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Tools</div>
       <a href="#"><div class="head_close2"></div></a>
    </div>
    <div class="tool_head">
        <a   id="ded_img1"><div class="ded_img"><div class="ded_img1">Details<br><i class="fa fa-file-o"></i></div></div></a><div class="ded_select1"></div>
        <a   id="ded_img2"><div class="ded_img"><div class="ded_img2">Reboot<br><i class="fa fa-refresh"></i></div></div></a><div class="ded_select2" ></div>
      <!--  <a   id="ded_img3"><div class="ded_img"><div class="ded_img3"></div></div></a><div class="ded_select3"></div>
        <a   id="ded_img4"><div class="ded_img"><div class="ded_img4"></div></div></a><div class="ded_select4"></div> -->
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
     
     <!--
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
      -->
      
    <div class="tool_sli1"style="display:none;">
        <div class="Compnents">
          <div id="serverComponent" ></div>
    </div>
    </div>
 </div>
 </div>
{include file='footer.tpl'}