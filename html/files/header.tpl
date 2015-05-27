<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>MQ Planet - Clients Area</title>
  <link href="{$URL}/theme/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
  <link href="{$URL}/theme/css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="{$URL}/theme/css/theme.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
  <script type="text/javascript" src="{$URL}/theme/js/jquery.js"></script>
  <script type="text/javascript" src="{$URL}/theme/js/bootstrap.js"></script>
  <script type="text/javascript" src="{$URL}/theme/js/hoverIntent.js"></script>
  <script type="text/javascript" src="{$URL}/theme/js/superfish.js"></script>
  <script type="text/javascript" src="{$URL}/theme/js/highcharts.js"></script>
  <script type="text/javascript" src="{$URL}/theme/js/script.js"></script>
 </head>
 <body>
   <div class="header overflow">
    <div class="wrapper overflow">
     <div class="logo"></div>
     <div class="details">
        <ul>
           <li><i class="icon-wel"></i>Welcome <span>{$client_name}</span></li>
           <li><i class="icon-setting"></i><a href="#" id="setting">Settings</a></li>
           <li><i class="icon-logout"></i><a href="?cmd=logout" id="logout">Logout</a></li>
        </ul>
     </div>
    </div> 
  </div>
  {include file='menu.tpl'}
  <div class="overflow main-inner wrapper">
  