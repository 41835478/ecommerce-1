<?php /* Smarty version Smarty-3.1.18, created on 2014-06-02 14:48:47
         compiled from "html/files/add_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1467305917538b02f489da29-68514358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f5e5127d13eb13502d67ba0d29a14334d5711c8' => 
    array (
      0 => 'html/files/add_user.tpl',
      1 => 1401709308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1467305917538b02f489da29-68514358',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538b02f494f121_65641637',
  'variables' => 
  array (
    'contacts' => 0,
    'contact' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538b02f494f121_65641637')) {function content_538b02f494f121_65641637($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="add_account">
   <div class="new_account">
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Access Details</div>
    </div>

<div class="contact_form">
     <div class="F_Name" >
        <ul>
            <li>Level :</li>
            <li>
            <select id="AccLevel">
                <option value="technical">Technical</option>
                <option value="billing">Billing</option>
            </select>
            </li>
        </ul>
        </div>
        <div class="L_Name">
        <ul>
            <li>User Name :</li>
            <li><input type="text" id="AccUsername" /></li>
       </ul>    
       </div>
    <div class="Position">
        <ul>
            <li>Password :</li>
           <li><input type="password" id="AccPassword" /></li>
        </ul>
       
    </div>
    <div class="CheckAccessDetails">
         <div class="new_contact_cheked">
         <input type="radio" name="uscontact" value="0" id="new_contact"  /><p1 style="margin-left:5px;float:left"> New Contact</p1>
         <input type="lable" id="AccLable"   readonly="" style="margin-top: -22px;margin-left: -88px;float: left;"/>
         </div>
         <?php if (count($_smarty_tpl->tpl_vars['contacts']->value)) {?>
         <input type="radio" name="uscontact" value="1" id="existing_contact"   /> <p1 style="margin-left:5px;float:left">Existing Contact </p1>
         <?php }?>

    <div class="User_Contact">
        <?php if (count($_smarty_tpl->tpl_vars['contacts']->value)) {?>
           <select id="ContactID"> 
             <?php  $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contact']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contacts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->key => $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->_loop = true;
?> 
             <?php if ($_smarty_tpl->tpl_vars['contact']->value['mqp_members_contacts_name']=='') {?>
                    <option value='<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
'>  <?php echo $_smarty_tpl->tpl_vars['contact']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['contact']->value['last_name'];?>
 </option>
             <?php }?>
            <?php } ?>
           </select>
        <?php }?>
         <input type="hidden" id="MemberID" value="0" />
        <input type="submit" value="Add" id="saveNewExisitingUser"/>
               
    </div>
         
    </div>
   
</div>


<div class="add_account">
   <div class="new_account2" style="margin-top:30px" >

<div class="contact_form2">
          <div class="table_form">
              <ul style="margin-top:7px"><li>Tittle:</li>
                 <li><select id="AccTitle">
                        <option value="Mr.">Mr.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Mrs.">Mrs.</option>
                     </select></li>
             </ul>
          </div>  
          <div class="F_Name" >
              <ul><li>First Name:</li>
                  <li><input type="text" name="name" id="ConfirstName" /></li>
              </ul></div>
          <div class="L_Name">
              <ul><li>Last Name:</li>
                  <li><input type="text" name="name" id="ConlastName" /></li>
              </ul></div>
            
           <div class="Of_Phone" >
              <ul><li>Office Phone :</li>
                  <li><input type="text" name="name" id="ConOfficePone" /></li>
              </ul></div>
          <div class="L_Name" style="margin-top:15px">
              <ul><li>Mobile Phone :</li>
                  <li><input type="text" name="name" id="ConMobilePone" /></li>
              </ul></div>
          <div class="Line"></div>


    <div class="per_add" style="margin-left:0px">
          <div class="F_Name">
              <ul><li id="city_txt2">City :</li>
                  <li><input type="text" style="width:150px" name="name" id="ConCity" /></li>
              </ul></div>
          
           <div class="L_Name">
              <ul><li id="contry_txt">Country :</li>
                  <li><input style="width:150px" type="text" name="name" id="ConCountry" /></li>
              </ul></div>   
    </div>
    <div class="per_email" style="margin-left:0px">
            <div class="F_Name" >
              <ul><li>Email:</li>
                  <li><input type="text" name="name" id="ConEmail" /><label id="filter_email"></label></li>
              </ul></div>
           <div class="Position">
               <ul><li>Position:</li>
                   <li><input type="text" name="name" id="ConPosition"/></li>
               </ul></div> 
               <input type="hidden" id="ContactID" value="0" />
               <input type="hidden" id="MemberID" value="0" />
               <input type="submit" value="Add" id="saveNewExisitingUser"/>
               
    </div>
    

</div>
</div>
</div>
</div>
</div><?php }} ?>
