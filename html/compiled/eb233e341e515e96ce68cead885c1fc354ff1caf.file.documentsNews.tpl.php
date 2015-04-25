<?php /* Smarty version Smarty-3.1.18, created on 2014-06-04 15:22:43
         compiled from "html/files/documentsNews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1487992772538f0f93166ce1-14896863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb233e341e515e96ce68cead885c1fc354ff1caf' => 
    array (
      0 => 'html/files/documentsNews.tpl',
      1 => 1401884543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1487992772538f0f93166ce1-14896863',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'documents' => 0,
    'count' => 0,
    'document' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538f0f931b3522_74802533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538f0f931b3522_74802533')) {function content_538f0f931b3522_74802533($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
  <?php  $_smarty_tpl->tpl_vars['document'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['document']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['documents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['document']->key => $_smarty_tpl->tpl_vars['document']->value) {
$_smarty_tpl->tpl_vars['document']->_loop = true;
?>
  <div class="news-item<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" style="height: 175px;margin-bottom: 10px;overflow: hidden;">
   <div class="news-title"><?php echo $_smarty_tpl->tpl_vars['document']->value['name'];?>
</div>
   <div class="category">Category: <?php echo $_smarty_tpl->tpl_vars['document']->value['category'];?>
</div><div class="date_entered">Published: <?php echo $_smarty_tpl->tpl_vars['document']->value['publish_date'];?>
</div>
   <div class="news-body"><?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['document']->value['body'], 'UTF-8', 'HTML-ENTITIES');?>
 </div>
  </div>
    <div class="news_footer">
        <a href="#" id="news_footer_icon<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" style="width:15px;height:15pxa;background:red;"><div class="news_footer_icon" onclick="read_more(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)"></div></a>
        <a href="#" id="news_footer_ico<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" style="width:15px;height:15pxa;background:red;display:none"><div class="news_footer_icon2" onclick="read_less(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)"></div></a>
        
    </div>
    <?php $_smarty_tpl->tpl_vars['x'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value++, null, 0);?>
<?php } ?>
<?php }} ?>
