<?php /* Smarty version Smarty-3.1.18, created on 2014-06-02 14:52:35
         compiled from "html/files/company.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4064090375389ca0a7c30d8-51598609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3aa500b3c58ba96f5d563fb28874f3a408fb27e' => 
    array (
      0 => 'html/files/company.tpl',
      1 => 1401709308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4064090375389ca0a7c30d8-51598609',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5389ca0a9cfbd9_78169093',
  'variables' => 
  array (
    'info' => 0,
    'licenses' => 0,
    'license' => 0,
    'type' => 0,
    'licensetype' => 0,
    'licensename' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5389ca0a9cfbd9_78169093')) {function content_5389ca0a9cfbd9_78169093($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="header_form2" style="height:260px">   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Company Details</div>
      
    </div>
    
    <div class="comp_info1">
        <ul>
            <li><span>Company Name</span><p><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
</p></li>
            <li><span>Address:</span><p><?php echo $_smarty_tpl->tpl_vars['info']->value['billing_address_street'];?>
 - <?php echo $_smarty_tpl->tpl_vars['info']->value['billing_address_state'];?>
 - <?php echo $_smarty_tpl->tpl_vars['info']->value['billing_address_postalcode'];?>
</p><p><?php echo $_smarty_tpl->tpl_vars['info']->value['billing_address_city'];?>
 - <?php echo $_smarty_tpl->tpl_vars['info']->value['billing_address_country'];?>
</p></li>
            <li><div class="map_icon"></div><p style="margin-top:20px">View on map</p></li>
        </ul>
    </div>
    <div class="comp_info2">
        <ul>
            <li><span>Website</span><p><?php if ($_smarty_tpl->tpl_vars['info']->value['website']) {?> <?php echo $_smarty_tpl->tpl_vars['info']->value['website'];?>
 <?php } else { ?> N/A <?php }?></p></li>
            <li><span>Email</span><p><?php if ($_smarty_tpl->tpl_vars['info']->value['email1']) {?> <?php echo $_smarty_tpl->tpl_vars['info']->value['email1'];?>
 <?php } else { ?> N/A <?php }?></p></li>
            <li><span>Phone</span><p><?php if ($_smarty_tpl->tpl_vars['info']->value['phone_office']) {?> <?php echo $_smarty_tpl->tpl_vars['info']->value['phone_office'];?>
 <?php } else { ?> N/A <?php }?></p></li>
            <li><span>Fax</span><p><?php if ($_smarty_tpl->tpl_vars['info']->value['phone_fax']) {?> <?php echo $_smarty_tpl->tpl_vars['info']->value['phone_fax'];?>
 <?php } else { ?> N/A <?php }?></p></li>
            
        </ul>
    </div>
    
</div>

<div class="header_form2">   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Licenses List</div>
      
    </div>
    <div class="License_ul_title">
        <ul>
            <li>License Name</li>
            <li>License Type</li>
            <li style="float:right">Action</li>
        </ul>
    </div>
    <?php  $_smarty_tpl->tpl_vars['license'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['license']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['licenses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['license']->key => $_smarty_tpl->tpl_vars['license']->value) {
$_smarty_tpl->tpl_vars['license']->_loop = true;
?>
        <div class="License_Info">
          
          <ul>
            <li><?php echo $_smarty_tpl->tpl_vars['license']->value['name'];?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['type']->value[$_smarty_tpl->tpl_vars['license']->value['type']];?>
</li>
            <li style="float:right"><a href="#" style="width:10px;height:10px" id="edit_contact" onclick="fillLicense('<?php echo $_smarty_tpl->tpl_vars['license']->value['id'];?>
')"><div class="foot_icon2" style="float:left;"></div><div class="dele_cont" style="margin-left:5px;float:left"></div></a></li>
          </ul>
    </div>
    <?php } ?>
</div>

<div class="header_form" style="height:110px">   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">License Details</div>
        <a href="#"><div class="head_close2"></div></a>
    </div>
    <div class="License_Edit1">
        <ul>
            <li>Name</li>
            <li><input  type="text" id="LicenseName"/></li>
        </ul>
    </div>
    <div class="License_Edit1">
        <ul>
            <li>Type</li>
            <li>
            <select id="LicenseType">
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
    <input type="hidden" id="LicenseID" />
       <input  type="button" id="saveLicenseDetalis" value="Edit" class="EditButton"/></li>
    </div>
</div>
<?php }} ?>
