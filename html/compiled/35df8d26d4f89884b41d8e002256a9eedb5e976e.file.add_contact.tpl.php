<?php /* Smarty version Smarty-3.1.18, created on 2014-06-01 13:39:44
         compiled from "html/files/add_contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:422399227538b02f01d7228-64027409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35df8d26d4f89884b41d8e002256a9eedb5e976e' => 
    array (
      0 => 'html/files/add_contact.tpl',
      1 => 1399815990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '422399227538b02f01d7228-64027409',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538b02f030cc38_28488363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538b02f030cc38_28488363')) {function content_538b02f030cc38_28488363($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('submenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="add_account">
   <div class="new_account">
  <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Add Contact</div>
    </div>

    <div class="per_name">
     <div class="tittle_settings">
    <div class="table_form">
         <table>
            <tr><td>Title:</td></tr>
            <tr>
               <td><input type="radio" name="title" value="Mr." checked/> Mr. </td>
               <td><input type="radio" name="title"  value="Ms."  /> Ms. </td>
               <td><input type="radio" name="title"  value="Mrs." /> Mrs. </td>
            </tr>
         </table>
    </div>  
    </div>  
             <div class="F_Name" >
              <ul><li>First Name:</li>
                  <li><input type="text" name="name" id="ConfirstName" value="" /></li>
              </ul></div>
          <div class="L_Name">
              <ul><li>Last Name:</li>
                  <li><input type="text" name="name" id="ConlastName" value="" /></li>
              </ul></div>
          
           <div class="Position">
              <ul><li>Position:</li>
                  <li><input type="text" name="name" id="ConPosition" value="" /></li>
              </ul></div>   
        
          
           </div>

    <div class="off_num">
           <div class="F_Name" >
              <ul><li>Office Phone :</li>
                  <li><input type="text" name="name" id="ConOfficePone" value="" /></li>
              </ul></div>
          <div class="L_Name">
              <ul><li>Mobile Phone :</li>
                  <li><input type="text" name="name" id="ConMobilePone" value="" /></li>
              </ul></div>
           </div>


    <div class="per_add">
          <div class="F_Name">
              <ul><li id="city_txt2">City :</li>
                  <li><input type="text" style="width:150px" name="name" id="ConCity" value="" /></li>
              </ul></div>
          
           <div class="L_Name">
              <ul><li id="contry_txt">Country :</li>
                  <li><input style="width:150px" type="text" name="name" id="ConCountry" value="" /></li>
              </ul></div>   
    </div>
    <div class="per_email">
            <div class="F_Name" >
              <ul style="width:300px"><li style="float:left ;width: 500px;">Email:</li>
                  <li style="float:left ; width: 400px;"><input type="text" name="name" id="ConEmail" value="" style="float:left"/><label id="filter_email"></label></li>
                  
              </ul></div>
              <input type="hidden" id="ContID" value="0" />
               <input type="submit" value="Add" id="saveContactDetalis" />
    </div>
  </div>
</div><?php }} ?>
