<?php /* Smarty version Smarty-3.1.18, created on 2014-06-02 16:37:31
         compiled from "html/files/domains.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7623668955389ca6c1a8567-48112602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e5d0f742bd4c856ffb8f5e6324c3bc5f4683c48' => 
    array (
      0 => 'html/files/domains.tpl',
      1 => 1401709308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7623668955389ca6c1a8567-48112602',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5389ca6c21cd34_67686787',
  'variables' => 
  array (
    'domains' => 0,
    'domain' => 0,
    'registerars' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5389ca6c21cd34_67686787')) {function content_5389ca6c21cd34_67686787($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <div class="header_form2" >   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Domains List</div>
      
    </div>
     <div class="pers_title">
        <ul>
            <li style="width:110px">Domain Name</li>
            <li style="width:110px">Registerar</li>
            <li style="width:110px">Start date</li>
            <li style="width:110px">End date</li>
            <li style="width:110px">Action</li>
        </ul>
    </div>   
    <?php  $_smarty_tpl->tpl_vars['domain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['domain']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['domains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['domain']->key => $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->_loop = true;
?>   
        <div class="pers_body">
        <ul>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['domain']->value['name'];?>
</li>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['registerars']->value[$_smarty_tpl->tpl_vars['domain']->value['registerar']];?>
</li>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['domain']->value['start_date'];?>
</li>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['domain']->value['end_date'];?>
</li>
            <li style="width:110px"><div class="foot_icon2" style="margin-left:40px;float:left"><div class="dele_cont" style="margin-left: 20px;margin-top: 0;float:left"></div></div></li>
        </ul>
    </div>
    <?php } ?>
</div> <?php }} ?>
