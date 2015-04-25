<?php /* Smarty version Smarty-3.1.18, created on 2014-06-01 17:01:14
         compiled from "html/files/invoice_payments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129851623538b2fef5c0543-49001419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35ba3037e55d65f83accbea199b2820e4d214a55' => 
    array (
      0 => 'html/files/invoice_payments.tpl',
      1 => 1401631165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129851623538b2fef5c0543-49001419',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538b2fef5f4d05_49615900',
  'variables' => 
  array (
    'payments' => 0,
    'payment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538b2fef5f4d05_49615900')) {function content_538b2fef5f4d05_49615900($_smarty_tpl) {?><div class="header_form6" >   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Payment Details</div><a href="#"><div class="head_close6"></div></a>
      
    </div>
     <div class="pers_title">
        <ul>
            <li style="width:110px">Payment</li>
            <li style="width:110px">Amount</li>
            <li style="width:110px">Payment Date</li>
        </ul>
    </div>   
     <?php  $_smarty_tpl->tpl_vars['payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->key => $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->_loop = true;
?>
    
    <div class="pers_body">
        <ul>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['payment']->value['name'];?>
</li>
            <li style="width:110px"><?php echo doubleval($_smarty_tpl->tpl_vars['payment']->value['payment']);?>
$</li>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['payment']->value['payment_date'];?>
</li>
        </ul>
    </div>
    <?php } ?>
 </div> <?php }} ?>
