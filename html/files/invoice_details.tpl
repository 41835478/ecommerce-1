<div class="header_form4" >   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Invoice Details</div><a href="#"><div class="head_close4"></div></a>
      
    </div>
    {if count($info.servers)}
     <div class="pers_title">
        <ul>
            <li style="width:110px">IP Address</li>
            <li style="width:110px">Start Date</li>
            <li style="width:110px">Expire Date</li>
            <li style="width:110px">Price</li>
            
        </ul>
    </div>   
    {assign var=servers value=$info.servers}
     {foreach from=$servers item=server}
    
        <div class="pers_body">
        <ul>
            <li style="width:110px">{$server.name}</li>
            <li style="width:110px">{$server.start_date}</li>
            <li style="width:110px">{$server.end_date}</li>
            <li style="width:110px">{$server.price|doubleval}$</li>
        </ul>
    </div>
    {/foreach}
    {/if}

{if count($info.products)}
  <div class="pers_title">
        <ul>
            <li style="width:210px">Product</li>
            <li style="width:110px">Quantity</li>
            <li style="width:110px">Type</li>
            <li style="width:110px">Price</li>
        </ul>
    </div>   
    {assign var=products value=$info.products}
     {foreach from=$products item=product}
        <div class="pers_body">
        <ul>
            <li style="width:210px">{$product.name}</li>
            <li style="width:110px">{$product.quantity}</li>
            <li style="width:110px">{$product.type}</li>
            <li style="width:110px">{$product.price|doubleval}$</li>
        </ul>
    </div>
    {/foreach}
    {/if}
    
    
     {if count($info.hosts)}
     <div class="pers_title">
        <ul>
            <li style="width:110px">Plan</li>
            <li style="width:110px">Start Date</li>
            <li style="width:110px">Expire Date</li>
            <li style="width:110px">Price</li>
            
        </ul>
    </div>   
    {assign var=hosts value=$info.hosts}
     {foreach from=$hosts item=host}
    
        <div class="pers_body">
        <ul>
            <li style="width:110px">{$host.name}</li>
            <li style="width:110px">{$host.start_date}</li>
            <li style="width:110px">{$host.end_date}</li>
            <li style="width:110px">{$host.price|doubleval}$</li>
        </ul>
    </div>
    {/foreach}
    {/if}
    
     {if count($info.domains)}
     <div class="pers_title">
        <ul>
            <li style="width:110px">Domain</li>
            <li style="width:110px">Start Date</li>
            <li style="width:110px">Expire Date</li>
            <li style="width:110px">Price</li>
            
        </ul>
    </div>   
    {assign var=domains value=$info.domains}
     {foreach from=$domains item=domain}
    
        <div class="pers_body">
        <ul>
            <li style="width:110px">{$domain.name}</li>
            <li style="width:110px">{$domain.start_date}</li>
            <li style="width:110px">{$domain.end_date}</li>
            <li style="width:110px">{$domain.price|doubleval}$</li>
        </ul>
    </div>
    {/foreach}
    {/if}
 </div> 