<?php /* Smarty version Smarty-3.1.18, created on 2014-06-28 10:05:57
         compiled from "html/files/moreNews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212670459453a6e515c99828-05602335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c6b4dfe2962f722830c470dc225d1b0f952a3d7' => 
    array (
      0 => 'html/files/moreNews.tpl',
      1 => 1403775748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212670459453a6e515c99828-05602335',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a6e515cd2f15_50465541',
  'variables' => 
  array (
    'offset' => 0,
    'documents' => 0,
    'document' => 0,
    'finedArt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a6e515cd2f15_50465541')) {function content_53a6e515cd2f15_50465541($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['offset'] = new Smarty_variable($_smarty_tpl->tpl_vars['offset']->value+2, null, 0);?>
 
 <?php if (count($_smarty_tpl->tpl_vars['documents']->value)) {?>
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
   <div class="category">Category: <?php echo $_smarty_tpl->tpl_vars['document']->value['category'];?>
</div><div class="date_entered">Published: <?php echo $_smarty_tpl->tpl_vars['document']->value['publish_date'];?>
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

    
     <div  id="moreDoc<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
" >
      <?php if ($_smarty_tpl->tpl_vars['finedArt']->value=='') {?>
       <a href="#"><div  class='moreDoc<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
' style="float:right;width:370px;height: 20px;margin-top: 15px;" onclick="moreDocument('<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
')">more document</div></a>
      <?php } else { ?>
       <a href="#"><div  class='finedMoreDoc<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
' style="float:right;width: 370px;height: 20px;margin-top: 15px;" onclick="finedMoreDocument('<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
')">fined more document</div></a>
      <?php }?>
     </div>
 <?php } else { ?>
 <div class="documents_form"> not more </div>
 <?php }?> 

</div>

  <?php }} ?>
