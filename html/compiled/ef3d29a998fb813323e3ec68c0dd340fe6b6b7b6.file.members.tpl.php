<?php /* Smarty version Smarty-3.1.18, created on 2014-06-02 14:44:44
         compiled from "html/files/members.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21161002105389ca3c2a6b67-68786588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef3d29a998fb813323e3ec68c0dd340fe6b6b7b6' => 
    array (
      0 => 'html/files/members.tpl',
      1 => 1401709308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21161002105389ca3c2a6b67-68786588',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5389ca3c2e57f6_55226472',
  'variables' => 
  array (
    'members' => 0,
    'member' => 0,
    'level' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5389ca3c2e57f6_55226472')) {function content_5389ca3c2e57f6_55226472($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (count($_smarty_tpl->tpl_vars['members']->value)) {?>
<div class="header_form2">   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Users List</div>
      
    </div>
     <div class="pers_title">
        <ul>
            <li>Name</li>
            <li>Username</li>
            <li>Level</li>
        </ul>
    </div>
<?php  $_smarty_tpl->tpl_vars['member'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['member']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['members']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['member']->key => $_smarty_tpl->tpl_vars['member']->value) {
$_smarty_tpl->tpl_vars['member']->_loop = true;
?> 
    <div class="pers_body">
        <ul>
            <li><?php if ($_smarty_tpl->tpl_vars['member']->value['mqp_members_contacts_name']) {?> <?php echo $_smarty_tpl->tpl_vars['member']->value['mqp_members_contacts_name'];?>
 <?php } else { ?> N/A <?php }?></li>
            <li><?php if ($_smarty_tpl->tpl_vars['member']->value['name']) {?> <?php echo $_smarty_tpl->tpl_vars['member']->value['name'];?>
 <?php } else { ?> N/A <?php }?></li>
            <li><?php if ($_smarty_tpl->tpl_vars['member']->value['level']) {?> <?php echo $_smarty_tpl->tpl_vars['level']->value[$_smarty_tpl->tpl_vars['member']->value['level']];?>
 <?php } else { ?> N/A <?php }?></li>
            <?php if ($_smarty_tpl->tpl_vars['member']->value['level']!='admin') {?>
            <li><a href="#" style="width:10px;height:10px" id="Edit_ContInfo" onclick="fillMember('<?php echo $_smarty_tpl->tpl_vars['member']->value['id'];?>
')"><div class="foot_icon2" style="margin-left:55px;float:left"></div></a><div class="dele_cont"></div></li>
            <?php } else { ?>
            <li><div class="dele_cont" style="margin-left:55px;float:left"></div></li>
            <?php }?>
        </ul>
    </div>
<?php } ?>       
    
</div>
</div>

<div class="header_form1" style="height:180px">
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Access Details</div>
        <a href="#"><div class="head_close"></div></a>
    </div>
    <div class="contact_form">
    <div class="contact_1">
        <ul>
            <li>Level :</li>
            
            <li>
                <select id="AccLevel">
                <option value="technical">Technical</option>
                <option value="billing">Billing</option>
                </select>
            </li>
            
        </ul>
        <ul>
            <li>User Name :</li>
            <li><input type="text" id="AccUsername"  /></li>
        </ul>
      
        <ul>

            <li>Password :</li>
           <li><input type="password" id="AccPassword" /></li>
        </ul>
        <ul>
           <li><input type="lable" id="AccLable" disabled="disabled"/></li>
        </ul>
 
       
    </div>
    <input type="hidden" id="MemberID" value="0" />
    <input type="hidden" id="ContactID" value="0" />
    <input type="button" value="Edit" class="EditButton" id="saveNewExisitingUser"/>
    </div>
    
</div>
<?php }?><?php }} ?>
