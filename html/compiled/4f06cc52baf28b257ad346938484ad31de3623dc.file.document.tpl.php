<?php /* Smarty version Smarty-3.1.18, created on 2014-06-22 08:11:26
         compiled from "html/files/document.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60183070153a68faebf2462-92143133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f06cc52baf28b257ad346938484ad31de3623dc' => 
    array (
      0 => 'html/files/document.tpl',
      1 => 1402144652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60183070153a68faebf2462-92143133',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'document' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a68faec3e4d9_48636052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a68faec3e4d9_48636052')) {function content_53a68faec3e4d9_48636052($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="documents_form">
  <div class="news-item<?php echo $_smarty_tpl->tpl_vars['document']->value['category'];?>
" style="margin-bottom: 10px;overflow: hidden;">
   <div class="news-title"><?php echo $_smarty_tpl->tpl_vars['document']->value['name'];?>
</div>
   <div class="category">Category: <?php echo $_smarty_tpl->tpl_vars['document']->value['category'];?>
</div><div class="date_entered">Published: <?php echo $_smarty_tpl->tpl_vars['document']->value['publish_date'];?>
</div>
   <div><?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['document']->value['body'], 'UTF-8', 'HTML-ENTITIES');?>
</div>
  </div>
 </div><?php }} ?>
