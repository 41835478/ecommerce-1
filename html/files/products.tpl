{include file='header.tpl'}
{include file='submenu.tpl'}
{*
<div class="header_form2 table_all_div"  >
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
<div class="pers_body" onClick="getProductsPeriod('{$product.id}');">
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
<li style="margin: 0px;">
{if $product.renewal==0} 
<button class="renew_button" > Renew</button>
{else} 
<button class="expiry_button"  >expiry </button>
{/if}
</li>
<li style="width:62px">
{$product.purchasing_date} 
</li>
<li style="width:60px">
{if $product.custom==0} Standard {else} Custom {/if}
</li>
<li style="width:50px">
<a href="#" style="width:10px;height:10px" id="edit_server" onclick="fillServer('{$server.id}')"><div class="foot_icon2" style="margin-left:18px;float:left"></div></a>
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


<div id="period_table_div" class="tool_info">
<div class="form_head">
<div class="cont_icon">
<div class="icon_back"></div>
</div>
<div class="cont_title" >Products Renewal<span class="period_loading_span"></span> </div>
<a href="#" onclick="$('#period_table_div').hide(100);"><div class="head_close2"></div></a>
</div>

<div class="pers_title">
<ul>
<li style="width:110px">Plan</li>
<li style="width:110px">Start Date</li>
<li style="width:110px">Expire Date</li>
<li style="width:110px">Price</li>

</ul>
</div>   
<div id="pers_body_all_div"><span class="period_loading_span"></span>
</div>
</div><!-- #period_table_div -->


*}


<div class=" table_all_div"  >
    <div class="table_head_div">
        <div class="top_table_icon_div">
            <div class="top_table_icon"></div>
        </div>
        <div class="table_head_label">
            Products List
        </div>

    </div>

    <table class="main_table"  >
        <thead>
            <tr>
                <th>Product Name </th>
                <th  >Type </th>
                <th >Version</th>
                <th > Renewal</th>
                <th > Date</th>
                <th>Custom</th>
                <th> Action</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$products item=product}

                <tr>
                    <td onClick="getProductsPeriod('{$product.id}');">{$product.name}</li>
                    <td>{$productType.{$product.type}}</td>
                    <td>{if $product.version==""} N/A {else} $product.version{/if}</td>
                    <td>
                        {if $product.renewal==0} 
                            <button class="renew_button" onclick="sendrenewalemail('{$product.id}',$(this))" > Renew</button>
                        {else} 
                            <button class="expiry_button"  >expiry </button>
                        {/if}
                    </td>
                    <td>{$product.purchasing_date} </td>
                    <td>{if $product.custom==0} Standard {else} Custom {/if} </td>
                    <td><a href="#" style="width:10px;height:10px" id="edit_server" onclick="fillServer('{$server.id}')"><div class="foot_icon2" style="margin-left:18px;float:left"></div></a></td>
                </tr>

            {/foreach}
        </tbody>
    </table>

</div>




<div class=" table_all_div"  id="period_table_div"  >
    <div class="table_head_div">
        <div class="top_table_icon_div">
            <div class="top_table_icon"></div>
        </div>
        <div class="table_head_label">
            Products Renewal<span class="period_loading_span"></span>
        </div>
        <a  class="close_table_x_a" onclick="$('#period_table_div').hide(100);"><span ></span></a>
    </div>

    <table class="main_table"  >
        <thead>
            <tr>
                <th >Plan</th>
                <th>Start Date</th>
                <th>Expire Date</th>
                <th>Price</th>
            </tr>

        <tbody id="pers_body_all_div">
          
        </tbody>
    </table>
</div><!-- #period_table_div -->


{include file='footer.tpl'}