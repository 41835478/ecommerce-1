{include file='header.tpl'}
{include file='submenu.tpl'}
    
    <div class="header_form2" >   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Domains List</div>
      
    </div>
     <div class="pers_title">
        <ul>
            <li style="width:110px">Domain Name</li>
            <li style="width:110px">Registerar</li>
            <li style="width:110px">Start date</li>
            <li style="width:110px">End date</li>
            <li style="width:110px">Action</li>
        </ul>
    </div>   
    {foreach from=$domains item=domain}   
        <div class="pers_body">
        <ul>
            <li style="width:110px">{$domain.name}</li>
            <li style="width:110px">{$registerars.{$domain.registerar}}</li>
            <li style="width:110px">{$domain.start_date}</li>
            <li style="width:110px">{$domain.end_date}</li>
            <li style="width:110px"><div class="foot_icon2" style="margin-left:40px;float:left"><div class="dele_cont" style="margin-left: 20px;margin-top: 0;float:left"></div></div></li>
        </ul>
    </div>
    {/foreach}
</div> 
{include file='footer.tpl'}