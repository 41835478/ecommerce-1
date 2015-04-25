<?php /* Smarty version Smarty-3.1.18, created on 2014-11-15 11:48:58
         compiled from "html/files/add_license.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1756477937538c7d04997323-69251118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '338a2172174575dc4489d711743e138e402c76ac' => 
    array (
      0 => 'html/files/add_license.tpl',
      1 => 1412255468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1756477937538c7d04997323-69251118',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538c7d04a03594_41338610',
  'variables' => 
  array (
    'type' => 0,
    'licensetype' => 0,
    'licensename' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538c7d04a03594_41338610')) {function content_538c7d04a03594_41338610($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="header_form" style="height:110px;display:block">   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Add License</div>
    </div>
    <div class="License_Edit1">
        <ul>
            <li>Name</li>
            <li><input  type="text" id="LicenseName" /></li>
        </ul>
    </div>
    <div class="License_Edit1">
        <ul>
            <li>Type</li>
            <li>
             <select id="LicenseType" >
             <?php  $_smarty_tpl->tpl_vars['licensename'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['licensename']->_loop = false;
 $_smarty_tpl->tpl_vars['licensetype'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['licensename']->key => $_smarty_tpl->tpl_vars['licensename']->value) {
$_smarty_tpl->tpl_vars['licensename']->_loop = true;
 $_smarty_tpl->tpl_vars['licensetype']->value = $_smarty_tpl->tpl_vars['licensename']->key;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['licensetype']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['licensename']->value;?>
</option>
             <?php } ?>
            </select>
            
            </li>
        </ul>
    </div>
    <div class="License_Edit1">
    <input type="hidden" id="LicenseID" value="0" />
       <input  type="button" id="saveLicenseDetalis" value="Save"/>
    </div>
    
    
</div><?php }} ?>
