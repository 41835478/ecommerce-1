<?php
if(!defined('MQFLAG')) die('Direct access is not allowed');

define('DS', DIRECTORY_SEPARATOR);

/* Operations */
$dir = realpath(__FILE__);
$dir = explode(DS, $dir);
array_pop($dir);
$dir = implode(DS, $dir);

$uri = 'http';
if(isset($_SERVER['HTTPS']) &&
  !empty($_SERVER['HTTPS']) &&
  strtolower($_SERVER['HTTPS']) != 'off') $uri .= 's';

$uri .= '://' . $_SERVER['HTTP_HOST'];
$sub  = $_SERVER['PHP_SELF'];
$sub  = explode('/', $sub);

array_pop($sub);

$sub  = implode('/', $sub);
$uri .= $sub;

/* Defines */
define('DIR', $dir);
define('URL', $uri);
define('LIBS', DIR.DS.'libs');
define('SESS_ACTIVE_CLIENT_ID', 'active_mq_client_id');
define('SEND_TO_EMAIL', 'galya@mqplanet.com');
?>