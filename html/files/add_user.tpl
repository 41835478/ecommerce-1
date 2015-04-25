{include file='submenu.tpl'}
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
         {if count($contacts)}
         <input type="radio" name="uscontact" value="1" id="existing_contact"   /> <p1 style="margin-left:5px;float:left">Existing Contact </p1>
         {/if}

    <div class="User_Contact">
        {if count($contacts)}
           <select id="ContactID"> 
             {foreach from=$contacts item=contact} 
             {if $contact.mqp_members_contacts_name==""}
                    <option value='{$contact.id}'>  {$contact.first_name} {$contact.last_name} </option>
             {/if}
            {/foreach}
           </select>
        {/if}
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
</div>