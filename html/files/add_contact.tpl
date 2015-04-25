{include file='submenu.tpl'}
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
</div>