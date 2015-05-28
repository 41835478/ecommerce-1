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
                <li style="width:110px"><i class="fa fa-close" onclick="send_cancel_email('domain  {$domain.name}', '{$domain.id}')"></i></li>
            </ul>
        </div>
    {/foreach}
</div> 

<div id="loading-div" class="modal hide fade">
    <div class="modal-body">
        <h5 class="alert alert-info">Processing, Please wait...</h5>
    </div>
</div>

{include file='footer.tpl'}