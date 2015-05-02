{include file='header.tpl'}
{include file='submenu.tpl'}
    <div class="header_form2" >   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Cases List</div>
      
    </div>
     <div class="pers_title">
        <ul>
            <li style="width:210px">Case</li>
            <li style="width:110px">Status</li>
            <li style="width:110px">Action</li>
        </ul>
    </div>   
    {foreach from=$cases item=case}   
        <div class="pers_body">
        <ul>
            <li style="width:210px">{$case.name}</li>
            <li style="width:110px">{$status.{$case.status}}</li>
            <li style="width:110px"><div class="foot_icon2" style="margin-left:45px;float:left"></div></li>
        </ul>
    </div>
    {/foreach}
</div> 
{include file='footer.tpl'}