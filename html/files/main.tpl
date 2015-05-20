<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>MQ Planet - Clients Area</title>
  <link href="{$URL}/theme/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
  <link href="{$URL}/theme/css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="{$URL}/theme/css/theme.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="{$URL}/theme/js/jquery.js"></script>
  <script type="text/javascript" src="{$URL}/theme/js/bootstrap.js"></script>
  <script type="text/javascript" src="{$URL}/theme/js/hoverIntent.js"></script>
  <script type="text/javascript" src="{$URL}/theme/js/superfish.js"></script>
  <script type="text/javascript" src="{$URL}/theme/js/highcharts.js"></script>
  <script type="text/javascript" src="{$URL}/theme/js/script.js"></script>
  
  
 </head>
 <body>
 {if $client_id != ''}
  <div class="header overflow">
  
    <div class="wrapper overflow">
     <div class="logo"></div>
     
     <div class="details">
     <ul>
        <li><i class="icon-wel"></i>Welcome <span>{$client_name}</span></li>
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
{/if}
  {if $client_id != ''}
  {include file='menu.tpl'}
  {/if}


  {if $client_id == ''}{include file='login.tpl'}
      {elseif !isset($active_sub_menu)}
          {header("location:?cmd=dashboard")}
  {else}
  
   <div class="overflow main-inner wrapper">
 
     <div class="col3"> </div> 
     <!-- <div id="main"></div> -->
    
    <div class="col2"></div>
</div>
  {/if}

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

  {if $client_id != ''}
  <div class="footer-wrapper centerT">Copyright &copy; 2007-{$YEAR} MQ Planet. All Rights Reserved</div>
  {/if}
 </body>
</html>