{include file='header.tpl'}
{include file='submenu.tpl'}

<div class="header_form2" >   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Webhosts List</div>

    </div>
    <div class="pers_title">
        <ul>
            <li style="width:110px">Webhost User</li>
            <li style="width:110px">Host Plan</li>
            <li style="width:110px">Start date</li>
            <li style="width:110px">End date</li>
            <li style="width:110px">Action</li>
        </ul>
    </div>   
    {foreach from=$webhosts item=webhost}   
        <div class="pers_body">
            <ul>
                <li style="width:110px">{$webhost.name}</li>
                <li style="width:110px">{$plans.{$webhost.host_plan}}</li>
                <li style="width:110px">{$webhost.start_date}</li>
                <li style="width:110px">{$webhost.end_date}</li>
                <li style="width:110px"><i class="fa fa-close" onclick="send_cancel_email('web host {$webhost.name}', '{$webhost.id}')"></i></li>
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