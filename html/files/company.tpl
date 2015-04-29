{include file='header.tpl'}
{include file='submenu.tpl'}

<div class="header_form2" style="height:260px">   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Company Details</div>
      
    </div>
    
    <div class="comp_info1">
        <ul>
            <li><span>Company Name</span><p>{$info.name}</p></li>
            <li><span>Address:</span><p>{$info.billing_address_street} - {$info.billing_address_state} - {$info.billing_address_postalcode}</p><p>{$info.billing_address_city} - {$info.billing_address_country}</p></li>
            <li><div class="map_icon"></div><p style="margin-top:20px">View on map</p></li>
        </ul>
    </div>
    <div class="comp_info2">
        <ul>
            <li><span>Website</span><p>{if $info.website} {$info.website} {else} N/A {/if}</p></li>
            <li><span>Email</span><p>{if $info.email1} {$info.email1} {else} N/A {/if}</p></li>
            <li><span>Phone</span><p>{if $info.phone_office} {$info.phone_office} {else} N/A {/if}</p></li>
            <li><span>Fax</span><p>{if $info.phone_fax} {$info.phone_fax} {else} N/A {/if}</p></li>
            
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
    {foreach from=$licenses item=license}
        <div class="License_Info">
          
          <ul>
            <li>{$license.name}</li>
            <li>{$type.{$license.type}}</li>
            <li style="float:right"><a href="#" style="width:10px;height:10px" id="edit_contact" onclick="fillLicense('{$license.id}')"><div class="foot_icon2" style="float:left;"></div><div class="dele_cont" style="margin-left:5px;float:left"></div></a></li>
          </ul>
    </div>
    {/foreach}
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
             {foreach from=$type key=licensetype item=licensename}
              <option value="{$licensetype}">{$licensename}</option>
             {/foreach}
            </select>
            </li>
        </ul>
    </div>
    <div class="License_Edit1">
    <input type="hidden" id="LicenseID" />
       <input  type="button" id="saveLicenseDetalis" value="Edit" class="EditButton"/></li>
    </div>
</div>
{include file='footer.tpl'}