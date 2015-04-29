{include file='header.tpl'}
{include file='submenu.tpl'}
{if count($members)}
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
{foreach from=$members item=member} 
    <div class="pers_body">
        <ul>
            <li>{if $member.mqp_members_contacts_name} {$member.mqp_members_contacts_name} {else} N/A {/if}</li>
            <li>{if $member.name} {$member.name} {else} N/A {/if}</li>
            <li>{if $member.level} {$level.{$member.level}} {else} N/A {/if}</li>
            {if $member.level!='admin'}
            <li><a href="#" style="width:10px;height:10px" id="Edit_ContInfo" onclick="fillMember('{$member.id}')"><div class="foot_icon2" style="margin-left:55px;float:left"></div></a><div class="dele_cont"></div></li>
            {else}
            <li><div class="dele_cont" style="margin-left:55px;float:left"></div></li>
            {/if}
        </ul>
    </div>
{/foreach}       
    
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
{/if}