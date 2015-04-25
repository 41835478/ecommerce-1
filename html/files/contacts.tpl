{include file='submenu.tpl'}
{if count($contacts)}
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
{foreach from=$contacts item=contact} 
    <div class="pers_body">
        <ul>
            <li><span>{$contact.salutation}</span><span id="Edit_cont_Fname{$x}"> {$contact.first_name}</span><span> {$contact.last_name}</span></li>
            <li>{if $contact.email1} {$contact.email1} {else} N/A {/if}</li>
            <li>{if $contact.phone_work} {$contact.phone_work} {else} N/A {/if}</li>
            {if $contact.id!=$contact_id}
            <li><a href="#" style="width:10px;height:10px" id="edit_contact" onclick="fillContact('{$contact.id}')"><div class="foot_icon2" style="margin-left:55px;float:left"></div></a><div class="dele_cont"></div></li>
            {else}
            <li><div class="dele_cont" style="margin-left:55px;float:left"></div></li>
            {/if}
        </ul>
    </div>
{/foreach}
    
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
{/if}
