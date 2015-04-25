<?php /* Smarty version Smarty-3.1.18, created on 2014-06-02 14:49:58
         compiled from "html/files/invoices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1314722161538b02f6c5f934-49530438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f776a5feef4e42ee6689cee7e4fd76efa0c80d24' => 
    array (
      0 => 'html/files/invoices.tpl',
      1 => 1401709308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1314722161538b02f6c5f934-49530438',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538b02f6cd5e39_77301458',
  'variables' => 
  array (
    'invoices' => 0,
    'invoice' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538b02f6cd5e39_77301458')) {function content_538b02f6cd5e39_77301458($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="header_form2" >   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Remain Invoices List</div>
      
    </div>
     <div class="pers_title">
        <ul>
            <li style="width:110px">Invoice Name</li>
            <li style="width:110px">Total</li>
            <li style="width:110px">Paid</li>
            <li style="width:110px">Remaining</li>
            <li style="width:110px">Action</li>
        </ul>
    </div>   
    <?php  $_smarty_tpl->tpl_vars['invoice'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['invoice']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['invoices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['invoice']->key => $_smarty_tpl->tpl_vars['invoice']->value) {
$_smarty_tpl->tpl_vars['invoice']->_loop = true;
?>   
    <?php if ((doubleval($_smarty_tpl->tpl_vars['invoice']->value['remaining'])!=0)) {?>
        <div class="pers_body">
        <ul>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['invoice']->value['name'];?>
</li>
            <li style="width:110px"><?php echo doubleval($_smarty_tpl->tpl_vars['invoice']->value['total']);?>
</li>
            <li style="width:110px"><?php echo doubleval($_smarty_tpl->tpl_vars['invoice']->value['paid']);?>
</li>
            <li style="width:110px"><?php echo doubleval($_smarty_tpl->tpl_vars['invoice']->value['remaining']);?>
</li>
            <li style="width:110px"><a href="#" style="width:10px;height:10px" onclick="getInvoiceDetails('<?php echo $_smarty_tpl->tpl_vars['invoice']->value['id'];?>
')"><div class="foot_icon9" style="margin-left:45px;float:left"></div></a><a href="#" style="width:10px;height:10px" onclick="getInvoicePayments('<?php echo $_smarty_tpl->tpl_vars['invoice']->value['id'];?>
')"><div class="foot_icon8" style="margin-left:4px;float:left"></div></a></li>
        </ul>
    </div>
    <?php }?>
    <?php } ?>
</div> 

    <div class="header_form_Invoice" >   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Paid Invoices List</div>
            <a href="#">
                <div class="invoice_icon">
                <div id="triangle-down"></div>
                <div id="triangle-up"></div>
            </a>
        </div>
    </div>
     <div class="pers_title">
        <ul>
            <li style="width:110px">Invoice Name</li>
            <li style="width:110px">Total</li>
            <li style="width:110px">Paid</li>
            <li style="width:110px">Remaining</li>
            <li style="width:110px">Action</li>
        </ul>
    </div>  
    <?php  $_smarty_tpl->tpl_vars['invoice'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['invoice']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['invoices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['invoice']->key => $_smarty_tpl->tpl_vars['invoice']->value) {
$_smarty_tpl->tpl_vars['invoice']->_loop = true;
?>   
    <?php if ((doubleval($_smarty_tpl->tpl_vars['invoice']->value['remaining'])==0)) {?>
        <div class="pers_body">
        <ul>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['invoice']->value['name'];?>
</li>
            <li style="width:110px"><?php echo doubleval($_smarty_tpl->tpl_vars['invoice']->value['total']);?>
</li>
            <li style="width:110px"><?php echo doubleval($_smarty_tpl->tpl_vars['invoice']->value['paid']);?>
</li>
            <li style="width:110px"><?php echo doubleval($_smarty_tpl->tpl_vars['invoice']->value['remaining']);?>
</li>
            <li style="width:110px"><a href="#" style="width:10px;height:10px" onclick="getInvoiceDetails('<?php echo $_smarty_tpl->tpl_vars['invoice']->value['id'];?>
')"><div class="foot_icon2" style="margin-left:45px;float:left"></div></a><a href="#" style="width:10px;height:10px" onclick="getInvoicePayments('<?php echo $_smarty_tpl->tpl_vars['invoice']->value['id'];?>
')"><div class="foot_icon2" style="margin-left:4px;float:left"></div></a></li>
        </ul>
    </div>
    <?php }?>
    <?php } ?>
      
    </div>
    <div id="InvoiceDetails"></div>
    <div id="InvoicePayments"></div><?php }} ?>
