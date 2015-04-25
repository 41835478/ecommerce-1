<?php /* Smarty version Smarty-3.1.18, created on 2014-06-02 10:55:33
         compiled from "html/files/open_cases.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1330715415538c2df50d19c2-56508633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2227ce49601991bd513620ad4815809234aeea8e' => 
    array (
      0 => 'html/files/open_cases.tpl',
      1 => 1400669177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1330715415538c2df50d19c2-56508633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cases' => 0,
    'case' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538c2df5108ef7_56818291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538c2df5108ef7_56818291')) {function content_538c2df5108ef7_56818291($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="header_form2" >   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Cases List</div>
      
    </div>
     <div class="pers_title">
        <ul>
            <li style="width:210px">Case</li>
            <li style="width:110px">Status</li>
            <li style="width:110px">Action</li>
        </ul>
    </div>   
    <?php  $_smarty_tpl->tpl_vars['case'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['case']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['case']->key => $_smarty_tpl->tpl_vars['case']->value) {
$_smarty_tpl->tpl_vars['case']->_loop = true;
?>   
        <div class="pers_body">
        <ul>
            <li style="width:210px"><?php echo $_smarty_tpl->tpl_vars['case']->value['name'];?>
</li>
            <li style="width:110px"><?php echo $_smarty_tpl->tpl_vars['status']->value[$_smarty_tpl->tpl_vars['case']->value['status']];?>
</li>
            <li style="width:110px"><div class="foot_icon2" style="margin-left:45px;float:left"></div></li>
        </ul>
    </div>
    <?php } ?>
</div> <?php }} ?>
