{include file='header.tpl'}
{include file='submenu.tpl'}
<div class="header_form2" >
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">
            Products List
        </div>

    </div>
    <div class="pers_title">
        <ul>
            <li style="width:150px">
                Product Name
            </li>
            <li style="width:110px">
                Type
            </li>
            <li style="width:60px">
                Version
            </li>
            <li style="width:60px">
                Renewal
            </li>
            <li style="width:60px">
                Date
            </li>
            <li style="width:60px">
                Custom
            </li>
            <li style="width:50px">
                Action
            </li>
        </ul>
    </div>
    {foreach from=$products item=product}
    <div class="pers_body">
        <ul>
            <li style="width:150px">
                {$product.name}
            </li>
            <li style="width:110px">
                {$productType.{$product.type}}
            </li>
            <li style="width:60px">
                {if $product.version==""} N/A {else} $product.version{/if}
            </li>
            <li style="width:60px">
                {if $product.renewal==0} False {else} True {/if}
            </li>
            <li style="width:60px">
                {$product.purchasing_date} 
            </li>
            <li style="width:60px">
                {if $product.custom==0} Standard {else} Custom {/if}
            </li>
            <li style="width:50px">
                <a href="#" style="width:10px;height:10px" id="edit_server" onclick="fillServer('{$server.id}')"><div class="foot_icon2" style="margin-left:45px;float:left"></div></a>
            </li>
        </ul>
    </div>
    {/foreach}
</div>

<div class="header_form" >
    <input type="hidden" id="producServer" />
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">
            Tools
        </div>
        <a href="#"><div class="head_close2"></div></a>
    </div>
    <div class="tool_head">

        <a href="#" id="ded_img2">
        <div class="ded_img">
            <div class="ded_img2"></div>
        </div></a><div class="ded_select2" ></div>
    </div>

    <div class="tool_info">

        <div class="tool_sli2">
            <span>Renewal</span>
            <div class="renewal_msg">
                <div class="re_img"></div>
                <span2>
                    Warning! This functionality can cause unavailability of your server and may lead to data loss. Please note that we do not provide any guarantee.
                </span2>
            </div>
            <span1 id="confirmMessage" style="display:none">
                Are you sure you want to renew the selected product
            </span1>
            <br />
            <input type="button" id="Renewal" value="Renewal" style="margin-top:10px" />
        </div>
        <div class="tool_sli3">
            <div class="ftp_back_haed">
                <ul style="color:black;">
                    <li>
                        Backup server
                    </li>
                    <li>
                        Login
                    </li>
                    <li>
                        Root password
                    </li>
                </ul>
            </div>

        </div>
    </div>

</div>
{include file='footer.tpl'}