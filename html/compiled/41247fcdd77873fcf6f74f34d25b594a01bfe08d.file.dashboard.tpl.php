<?php /* Smarty version Smarty-3.1.18, created on 2014-09-27 20:27:58
         compiled from "html/files/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157435358554271cfbdbfeb4-97599805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41247fcdd77873fcf6f74f34d25b594a01bfe08d' => 
    array (
      0 => 'html/files/dashboard.tpl',
      1 => 1411849662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157435358554271cfbdbfeb4-97599805',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54271cfbf11006_93081296',
  'variables' => 
  array (
    'news' => 0,
    'new' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54271cfbf11006_93081296')) {function content_54271cfbf11006_93081296($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/media/galya/Extra/WebApplications/mycp/libs/smarty/plugins/modifier.truncate.php';
?> <div class="tab-pane active" id="MQPlanet">
  <?php if (count($_smarty_tpl->tpl_vars['news']->value)) {?>
  <?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value) {
$_smarty_tpl->tpl_vars['new']->_loop = true;
?>
  <div class="news-item">
   <div class="news-title"><?php echo $_smarty_tpl->tpl_vars['new']->value['name'];?>
</div>
   <div class="news-body"><?php echo preg_replace('!<[^>]*?>!', ' ', smarty_modifier_truncate($_smarty_tpl->tpl_vars['new']->value['body'],200,"...",false,false));?>
</div>
   <a href='#' id='read_more_article' rel='<?php echo $_smarty_tpl->tpl_vars['new']->value['id'];?>
'>read more</a>
   <div class="category">Category: <?php echo $_smarty_tpl->tpl_vars['new']->value['category'];?>
</div> 
   <div class="date_entered">Published: <?php echo $_smarty_tpl->tpl_vars['new']->value['date_entered'];?>
</div>
  </div>
  <?php } ?>
  <?php }?>
 </div>
<?php }} ?>
