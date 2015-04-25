<?php
if(!defined('MQFLAG')) define('MQFLAG', 1); 
require_once 'loader.php';
global $menu;

$session = new Session();
$smarty  = new Smarty();
$fwork   = new Framework();
$cid     = $session->read(SESS_ACTIVE_CLIENT_ID);

if(empty($cid)) {
    $cid['account_id']="";
    $cid['account_name']="";
}

$smarty->template_dir = 'html'.DS.'files';
$smarty->compile_dir  = 'html'.DS.'compiled';
$smarty->cache_dir    = 'html'.DS.'cache';

$smarty->assign('URL', URL);
$smarty->assign('YEAR', date('Y'));
$smarty->assign('client_id', $cid['account_id']);
$smarty->assign('client_name', $cid['account_name']);
$smarty->assign('products', $products);
$smarty->assign('domains', $fwork->getLookupServers());
$smarty->assign('menu',$menu);
$smarty->display('main.tpl');
?>