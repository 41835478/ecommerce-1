<?php /* Smarty version Smarty-3.1.18, created on 2014-06-29 11:54:16
         compiled from "html/files/documents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1696049074538b0795bcd357-50339977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26c00d9c165424ae27ddbd4c6f1d3ae2e4dd774a' => 
    array (
      0 => 'html/files/documents.tpl',
      1 => 1404040628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1696049074538b0795bcd357-50339977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538b0795e532b3_45376286',
  'variables' => 
  array (
    'finedArt' => 0,
    'documents' => 0,
    'document' => 0,
    'countDoc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538b0795e532b3_45376286')) {function content_538b0795e532b3_45376286($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


 <div class="find">
    <span>Find news</span>
    <input type="text" placeholder="Enter title, line ,date" id="search_articles" value="<?php echo $_smarty_tpl->tpl_vars['finedArt']->value;?>
"/>
    <input type="button" value="Find" id="find_articles"/>
    <div class="search_about"></div>
 </div>

 <div class="documents_form">
  <?php  $_smarty_tpl->tpl_vars['document'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['document']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['documents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['document']->key => $_smarty_tpl->tpl_vars['document']->value) {
$_smarty_tpl->tpl_vars['document']->_loop = true;
?>  
      <div class="news-item<?php echo $_smarty_tpl->tpl_vars['document']->value['id'];?>
" style="height: 180px;;margin-bottom: 10px;overflow: hidden; float:left">
         <div class="news-title"><?php echo $_smarty_tpl->tpl_vars['document']->value['name'];?>
</div>
         <div class="category">Category:<div  id="dectCategory"><?php echo $_smarty_tpl->tpl_vars['document']->value['category'];?>
 </div></div><div class="date_entered">Published: <?php echo $_smarty_tpl->tpl_vars['document']->value['publish_date'];?>
</div>
         <div><?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['document']->value['body'], 'UTF-8', 'HTML-ENTITIES');?>
</div>
      </div>
      <div class="news_footer">
         <a href="#" id="news_footer_icon<?php echo $_smarty_tpl->tpl_vars['document']->value['id'];?>
" style="width:70px;height:15pxa;float: right;" onclick="getDocument('<?php echo $_smarty_tpl->tpl_vars['document']->value['id'];?>
')">
           <span>read more</span>
           <div class="news_footer_icon"></div>
         </a>            
      </div>
  <?php } ?> 
 </div>

 
<?php $_smarty_tpl->tpl_vars['countDoc'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['documents']->value), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['countDoc']->value==0) {?> 
         <div style="color:red"> Your search did not match any news. </div> 
    <?php } else { ?>
         <div  id="moreDoc2" >
            <?php if ($_smarty_tpl->tpl_vars['finedArt']->value=='') {?>
             <a href="#"><div  class='moreDoc2' onclick="moreDocument(2)">more document</div></a>
            <?php } else { ?>
             <a href="#"><div  class='finedMoreDoc2' onclick="finedMoreDocument(2)">Fined More Document</div></a>
            <?php }?>
         </div>
    <?php }?>



<?php }} ?>
