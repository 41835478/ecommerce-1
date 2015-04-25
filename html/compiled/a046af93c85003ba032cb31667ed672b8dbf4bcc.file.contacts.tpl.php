<?php /* Smarty version Smarty-3.1.18, created on 2014-06-01 13:51:01
         compiled from "html/files/contacts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2579556435389ca2cbdcc13-20670528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a046af93c85003ba032cb31667ed672b8dbf4bcc' => 
    array (
      0 => 'html/files/contacts.tpl',
      1 => 1401619856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2579556435389ca2cbdcc13-20670528',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5389ca2cc6a5f6_56748325',
  'variables' => 
  array (
    'contacts' => 0,
    'contact' => 0,
    'x' => 0,
    'contact_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5389ca2cc6a5f6_56748325')) {function content_5389ca2cc6a5f6_56748325($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (count($_smarty_tpl->tpl_vars['contacts']->value)) {?>
 <div class="header_form2" >   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Contacts List</div>
      
    </div>
     <div class="pers_title">
        <ul>
            <li>Name</li>
            <li>Email</li>
            <li>Phone</li>
            <li>Action</li>
        </ul>
    </div>
<?php  $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contact']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contacts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->key => $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->_loop = true;
?> 
    <div class="pers_body">
        <ul>
            <li><span><?php echo $_smarty_tpl->tpl_vars['contact']->value['salutation'];?>
</span><span id="Edit_cont_Fname<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['contact']->value['first_name'];?>
</span><span> <?php echo $_smarty_tpl->tpl_vars['contact']->value['last_name'];?>
</span></li>
            <li><?php if ($_smarty_tpl->tpl_vars['contact']->value['email1']) {?> <?php echo $_smarty_tpl->tpl_vars['contact']->value['email1'];?>
 <?php } else { ?> N/A <?php }?></li>
            <li><?php if ($_smarty_tpl->tpl_vars['contact']->value['phone_work']) {?> <?php echo $_smarty_tpl->tpl_vars['contact']->value['phone_work'];?>
 <?php } else { ?> N/A <?php }?></li>
            <?php if ($_smarty_tpl->tpl_vars['contact']->value['id']!=$_smarty_tpl->tpl_vars['contact_id']->value) {?>
            <li><a href="#" style="width:10px;height:10px" id="edit_contact" onclick="fillContact('<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
')"><div class="foot_icon2" style="margin-left:55px;float:left"></div></a><div class="dele_cont"></div></li>
            <?php } else { ?>
            <li><div class="dele_cont" style="margin-left:55px;float:left"></div></li>
            <?php }?>
        </ul>
    </div>
<?php } ?>
    
</div>


<div class="header_form" >
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Contact Details</div>
         <a href="#"><div class="head_close2"></div></a>
    </div>

    <div class="per_name">
     <div class="tittle_settings">
    <div class="table_form">
         <table>
            <tr><td>Title:</td></tr>
            <tr><td><input type="radio" name="title" value="Mr." /> Mr. </td>
               <td><input type="radio" name="title" value="Ms." /> Ms. </td>
               <td><input type="radio" name="title" value="Mrs."/> Mrs. </td></tr>
            <tr>
         </table>
    </div>
    </div>  
             <div class="F_Name" >
              <ul><li>First Name:</li>
                  <li><input type="text" name="name" id="ConfirstName" /></li>
              </ul></div>
          <div class="L_Name">
              <ul><li>Last Name:</li>
                  <li><input type="text" name="name" id="ConlastName" /></li>
              </ul></div>
          
           <div class="Position">
              <ul><li>Position:</li>
                  <li><input type="text" name="name" id="ConPosition" /></li>
              </ul></div>   
        
          
           </div>

    <div class="off_num">
           <div class="F_Name" >
              <ul><li>Office Phone :</li>
                  <li><input type="text" name="name" id="ConOfficePone"/></li>
              </ul></div>
          <div class="L_Name">
              <ul><li>Mobile Phone :</li>
                  <li><input type="text" name="name" id="ConMobilePone"/></li>
              </ul></div>
           </div>


    <div class="per_add">
          <div class="L_Name">
              <ul><li id="city_txt">City :</li>
                  <li><input type="text" name="name" id="ConCity"/></li>
              </ul></div>
          
           <div class="Position">
              <ul><li id="contry_txt">Country :</li>
                  <li><input type="text" name="name" id="ConCountry" /></li>
              </ul></div>   
    </div>
    <div class="per_email">
            <div class="F_Name" >
              <ul><li>Email:</li>
                  <li><input type="text" name="name" id="ConEmail"/><label id="filter_email" style=" margin-left:166px;margin-top:-37px;"></label></li>
              </ul></div>
              <input type="hidden" id="ContID" />
               <input type="submit" value="Edit" class="EditButton" id="saveContactDetalis" />
    </div>
</div>
<?php }?>
<?php }} ?>
