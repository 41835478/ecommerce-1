<?php /* Smarty version Smarty-3.1.18, created on 2014-06-07 11:43:20
         compiled from "html/files/documentNews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18941687405392d0a8c4a107-01747195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f69bc13baf8bbfb1b286b2a8764cb53632fc072' => 
    array (
      0 => 'html/files/documentNews.tpl',
      1 => 1402130485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18941687405392d0a8c4a107-01747195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'document' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5392d0a8c7e365_06693814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5392d0a8c7e365_06693814')) {function content_5392d0a8c7e365_06693814($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
