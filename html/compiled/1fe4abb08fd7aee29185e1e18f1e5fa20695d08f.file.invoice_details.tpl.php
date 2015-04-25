<?php /* Smarty version Smarty-3.1.18, created on 2014-06-01 16:07:42
         compiled from "html/files/invoice_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1616036327538b06b4955fd7-83626376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fe4abb08fd7aee29185e1e18f1e5fa20695d08f' => 
    array (
      0 => 'html/files/invoice_details.tpl',
      1 => 1401627943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1616036327538b06b4955fd7-83626376',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538b06b4b2de00_03276257',
  'variables' => 
  array (
    'info' => 0,
    'servers' => 0,
    'server' => 0,
    'products' => 0,
    'product' => 0,
    'hosts' => 0,
    'host' => 0,
    'domains' => 0,
    'domain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538b06b4b2de00_03276257')) {function content_538b06b4b2de00_03276257($_smarty_tpl) {?><div class="header_form4" >   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Invoice Details</div><a href="#"><div class="head_close4"></div></a>
      
    </div>
    <?php if (count($_smarty_tpl->tpl_vars['info']->value['servers'])) {?>
     <div class="pers_title">
        <ul>
            <li style="width:110px">IP Address</li>
            <li style="width:110px">Start Date</li>
            <li style="width:110px">Expire Date</li>
            <li style="width:110px">Price</li>
            
        </ul>
    </div>   
    <?php $_smarty_tpl->tpl_vars['servers'] = new Smarty_variable($_smarty_tpl->tpl_vars['info']->value['servers'], null, 0);?>
     <?php  $_smarty_tpl->tpl_vars['server'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['server']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['servers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['server']->key => $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->_loop = true;
?>
    
        <div class="pers_body">
        <ul>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['server']->value['name'];?>
</li>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['server']->value['start_date'];?>
</li>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['server']->value['end_date'];?>
</li>
            <li style="width:110px"><?php echo doubleval($_smarty_tpl->tpl_vars['server']->value['price']);?>
$</li>
        </ul>
    </div>
    <?php } ?>
    <?php }?>

<?php if (count($_smarty_tpl->tpl_vars['info']->value['products'])) {?>
  <div class="pers_title">
        <ul>
            <li style="width:210px">Product</li>
            <li style="width:110px">Quantity</li>
            <li style="width:110px">Type</li>
            <li style="width:110px">Price</li>
        </ul>
    </div>   
    <?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['info']->value['products'], null, 0);?>
     <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
        <div class="pers_body">
        <ul>
            <li style="width:210px"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</li>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
</li>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['product']->value['type'];?>
</li>
            <li style="width:110px"><?php echo doubleval($_smarty_tpl->tpl_vars['product']->value['price']);?>
$</li>
        </ul>
    </div>
    <?php } ?>
    <?php }?>
    
    
     <?php if (count($_smarty_tpl->tpl_vars['info']->value['hosts'])) {?>
     <div class="pers_title">
        <ul>
            <li style="width:110px">Plan</li>
            <li style="width:110px">Start Date</li>
            <li style="width:110px">Expire Date</li>
            <li style="width:110px">Price</li>
            
        </ul>
    </div>   
    <?php $_smarty_tpl->tpl_vars['hosts'] = new Smarty_variable($_smarty_tpl->tpl_vars['info']->value['hosts'], null, 0);?>
     <?php  $_smarty_tpl->tpl_vars['host'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['host']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hosts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['host']->key => $_smarty_tpl->tpl_vars['host']->value) {
$_smarty_tpl->tpl_vars['host']->_loop = true;
?>
    
        <div class="pers_body">
        <ul>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['host']->value['name'];?>
</li>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['host']->value['start_date'];?>
</li>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['host']->value['end_date'];?>
</li>
            <li style="width:110px"><?php echo doubleval($_smarty_tpl->tpl_vars['host']->value['price']);?>
$</li>
        </ul>
    </div>
    <?php } ?>
    <?php }?>
    
     <?php if (count($_smarty_tpl->tpl_vars['info']->value['domains'])) {?>
     <div class="pers_title">
        <ul>
            <li style="width:110px">Domain</li>
            <li style="width:110px">Start Date</li>
            <li style="width:110px">Expire Date</li>
            <li style="width:110px">Price</li>
            
        </ul>
    </div>   
    <?php $_smarty_tpl->tpl_vars['domains'] = new Smarty_variable($_smarty_tpl->tpl_vars['info']->value['domains'], null, 0);?>
     <?php  $_smarty_tpl->tpl_vars['domain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['domain']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['domains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['domain']->key => $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->_loop = true;
?>
    
        <div class="pers_body">
        <ul>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['domain']->value['name'];?>
</li>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['domain']->value['start_date'];?>
</li>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['domain']->value['end_date'];?>
</li>
            <li style="width:110px"><?php echo doubleval($_smarty_tpl->tpl_vars['domain']->value['price']);?>
$</li>
        </ul>
    </div>
    <?php } ?>
    <?php }?>
 </div> <?php }} ?>
