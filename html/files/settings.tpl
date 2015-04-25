{include file='submenu.tpl'}
<div class="formxx">
<div class="personal_detalis">
    <div class="cont_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Contact Details</div>
    </div>
    <div class="cont_count">
        <div class="cont_img">
            <div class="cImg"></div>      
        </div>
        <div class="per_detalis">

        <table>
              <tr><td><span style="font-size:15px"><span style="float:left;margin-left: 0;width: 20px;">{$contact.salutation}</span><span style="float:left;margin-left: 4px;width: 100px;" id="cont_first_name">{$contact.first_name}</span><span style="float:left;margin-top: 0;margin-left: 0;"id="cont_Last_name"> {$contact.last_name}</span></span></td></tr>
              <tr><td><p style="margin-top:0px" id="cont_City">{$contact.primary_address_city}</p><p style="margin-left:0px;margin-top:0px;float:left">-</p> <p style="margin-left:0px;margin-top:0px" id="cont_country">{$contact.primary_address_country}</p></td></tr>
              <tr><td><span style="margin-top:10px" >Position :</span></td></tr>
              <tr><td><p id="cont_position">{$contact.title}</p></td></tr>
              <tr><td><span style="margin-top:10px" >Email :</span></td></tr>
              <tr><td><p id="cont_Email">{$contact.email1} </p></td></tr>
              <tr><td><span style="margin-top:10px">Office phone :</span></td></tr>
              <tr><td><p id="cont_offPhone">{$contact.phone_work}</p></td></tr>
              <tr><td><span style="margin-top:-5px">Mobile Phone :</span></td></tr>
              <tr><td><p id="cont_mobPhone">{$contact.phone_mobile} </p></td></tr>

        </table>            
        </div>
    </div>
    <div class="foot_icon">
        <span1><a id="Edit_PerInfo" href="#">Edit</a></span1>
    <div class="foot_icon2"></div>
    </div>
</div>
<div class="contact_detalis" style="height:140px">
    <div class="cont_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Access Detalis</div>
    </div>
    <div class="cont_count" style="height:80px">
        <table>
              <tr><td><span>User name  </span></td>
              <td><p>: {$member.name}</p></td></tr>
              <tr><td><span>Access level  </span></td>
              <td><p>: {$level.{$member.level}}</p></td></tr>
               <tr><td><span>Last Login  </span></td>
              <td><p>: {$member.last_login}</p></td></tr>
        </table>
        
       
            
    </div>
    <div class="foot_icon">
    <span1><a id="Edit_ContInfo" href="#">Edit</a></span1>
    <div class="foot_icon2"></div>
    
</div>

</div>
<div class="header_form1" style="height:225px">
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
            <li><input type="text" value="{$level.{$member.level}}" disabled /></li>
        </ul>
        <ul>

            <li>Current Password :</li>
           <li><input type="password" id="AccCurrPassword" /></li>
        </ul>
  
    </div>
    <div class="contact_2" style="width:400px">
        <ul>
            <li><input type="radio" name="selectAcc" value="1" style="margin-top:-2px"  checked /> User Name :</li>
            <li><input type="text" id="AccUsername" value="{$member.name}" /></li>
        </ul>
        <ul>
            <li><input type="radio" name="selectAcc" value="2" style="margin-top:-2px" /> New Password :</li>
            <li><input type="password" id="AccNewPassword" placeholder="Enter New Password" /></li>
            <li><input type="password" id="AccConfirmPassword" placeholder="Confirm Password"  /></li>
            <li><input type="lable" id="AccLable2"   readonly=""/></li>
            
       </ul>
       
    </div>
    <input type="hidden" id="MemberID" value="{$member.id}" />
    <input type="button" value="Edit"  class="EditButton" id="saveUserDetalis" style="margin-top: 50px;"/>
    </div>
    
</div>
<div class="header_form">
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
            <tr>
               <td><input type="radio" name="title" id="ConSalutation" value="Mr." {if {$contact.salutation}=="Mr."} checked {/if} /> Mr. </td>
               <td><input type="radio" name="title" id="ConSalutation" value="Ms." {if {$contact.salutation}=="Ms."} checked {/if} /> Ms. </td>
               <td><input type="radio" name="title" id="ConSalutation" value="Mrs." {if {$contact.salutation}=="Mrs."} checked {/if} /> Mrs. </td>
            </tr>
         </table>
    </div>
    </div>  
             <div class="F_Name" >
              <ul><li>First Name:</li>
                  <li><input type="text" name="name" id="ConfirstName" value="{$contact.first_name}" /></li>
              </ul></div>
          <div class="L_Name">
              <ul><li>Last Name:</li>
                  <li><input type="text" name="name" id="ConlastName" value="{$contact.last_name}" /></li>
              </ul></div>
          
           <div class="Position">
              <ul><li>Position:</li>
                  <li><input type="text" name="name" id="ConPosition" value="{$contact.title}" /></li>
              </ul></div>   
        
          
           </div>

    <div class="off_num">
           <div class="F_Name" >
              <ul><li>Office Phone :</li>
                  <li><input type="text" name="name" id="ConOfficePone" value="{$contact.phone_work}" /></li>
              </ul></div>
          <div class="L_Name">
              <ul><li>Mobile Phone :</li>
                  <li><input type="text" name="name" id="ConMobilePone" value="{$contact.phone_mobile}" /></li>
              </ul></div>
           </div>


    <div class="per_add">
          <div class="F_Name">
              <ul><li id="city_txt2">City :</li>
                  <li><input type="text" style="width:150px" name="name" id="ConCity" value="{$contact.primary_address_city}" /></li>
              </ul></div>
          
           <div class="L_Name">
              <ul><li id="contry_txt">Country :</li>
                  <li><input style="width:150px" type="text" name="name" id="ConCountry" value="{$contact.primary_address_country}" /></li>
              </ul></div>   
    </div>
    <div class="per_email">
            <div class="F_Name" >
              <ul><li>Email:</li>
                  <li><input type="text" name="name" id="ConEmail" value="{$contact.email1}" /><label id="filter_email" style=" margin-left:166px;margin-top:-37px;"></label></li>
              </ul></div>
              <input type="hidden" id="ContID" value="{$contact.id}" />
               <input type="submit" value="Save" id="saveContactDetalis" />
    </div>
</div>