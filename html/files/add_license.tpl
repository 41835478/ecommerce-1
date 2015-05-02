{include file='header.tpl'}
{include file='submenu.tpl'}
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
             {foreach from=$type key=licensetype item=licensename}
              <option value="{$licensetype}">{$licensename}</option>
             {/foreach}
            </select>
            
            </li>
        </ul>
    </div>
    <div class="License_Edit1">
    <input type="hidden" id="LicenseID" value="0" />
       <input  type="button" id="saveLicenseDetalis" value="Save"/>
    </div>
    
    
</div>
{include file='footer.tpl'}