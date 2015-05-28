{include file='header.tpl'}
{include file='submenu.tpl'}
<div class="header_form2" >   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Remain Invoices List</div>
      
    </div>
     <div class="pers_title">
        <ul>
            <li style="width:110px">Invoice Name</li>
            <li style="width:110px">Total</li>
            <li style="width:110px">Paid</li>
            <li style="width:110px">Remaining</li>
            <li style="width:110px">Action</li>
        </ul>
    </div>   
    {foreach from=$invoices item=invoice}   
    {if ($invoice.remaining|doubleval != 0)}
        <div class="pers_body">
        <ul>
            <li style="width:110px">{$invoice.name}</li>
            <li style="width:110px">{$invoice.total|doubleval}</li>
            <li style="width:110px">{$invoice.paid|doubleval}</li>
            <li style="width:110px">{$invoice.remaining|doubleval}</li>
            <li style="width:110px"><a   title="invoice details" style="width:10px;height:10px" onclick="getInvoiceDetails('{$invoice.id}')"><i class="fa fa-list-alt"></i></a><a    title="invoice payment"style="width:10px;height:10px" onclick="getInvoicePayments('{$invoice.id}')"><i class="fa fa-credit-card"></i></a></li>
        </ul>
    </div>
    {/if}
    {/foreach}
</div> 

    <div class="header_form_Invoice" >   
    <div class="form_head">
        <div class="cont_icon">
            <div class="icon_back"></div>
        </div>
        <div class="cont_title">Paid Invoices List</div>
            <a href="#triangle-up">
                <div class="invoice_icon">
                <div id="triangle-down"></div>
                <div id="triangle-up"></div>
            </a>
        </div>
    </div>
     <div class="pers_title">
        <ul>
            <li style="width:110px">Invoice Name</li>
            <li style="width:110px">Total</li>
            <li style="width:110px">Paid</li>
            <li style="width:110px">Remaining</li>
            <li style="width:110px">Action</li>
        </ul>
    </div>  
    {foreach from=$invoices item=invoice}   
    {if ($invoice.remaining|doubleval == 0)}
        <div class="pers_body">
        <ul>
            <li style="width:110px">{$invoice.name}</li>
            <li style="width:110px">{$invoice.total|doubleval}</li>
            <li style="width:110px">{$invoice.paid|doubleval}</li>
            <li style="width:110px">{$invoice.remaining|doubleval}</li>
            <li style="width:110px"><a  style="width:10px;height:10px" title="invoice details" onclick="getInvoiceDetails('{$invoice.id}')"><i class="fa fa-list-alt"></i></a><a  title="invoice payment" style="width:10px;height:10px" onclick="getInvoicePayments('{$invoice.id}')"><i class="fa fa-credit-card"></i></a></li>
        </ul>
    </div>
    {/if}
    {/foreach}
      
    </div>
    <div id="InvoiceDetails"></div>
    <div id="InvoicePayments"></div>
{include file='footer.tpl'}