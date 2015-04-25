<div class="header_form6" >   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Payment Details</div><a href="#"><div class="head_close6"></div></a>
      
    </div>
     <div class="pers_title">
        <ul>
            <li style="width:110px">Payment</li>
            <li style="width:110px">Amount</li>
            <li style="width:110px">Payment Date</li>
        </ul>
    </div>   
     {foreach from=$payments item=payment}
    
    <div class="pers_body">
        <ul>
            <li style="width:110px">{$payment.name}</li>
            <li style="width:110px">{$payment.payment|doubleval}$</li>
            <li style="width:110px">{$payment.payment_date}</li>
        </ul>
    </div>
    {/foreach}
 </div> 