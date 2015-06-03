{include file='header.tpl'}
{include file='submenu.tpl'}
<input type="hidden" id="dectCategory" value="{$active_sub_menu}">
 <div class="documents_form">
  {foreach from=$documents item=document}  
      <div class="news-item{$document.id}" style="margin-bottom: 10px;overflow: hidden; float:left">
         <div class="news-title">{$document.name}</div>
         <div class="category">Category: {$document.category}  </div><div class="date_entered">Published: {$document.publish_date}</div>
         <div>{$document.body|truncate:400|unescape:"htmlall"}</div>
        
      </div>
      <div class="news_footer"> 
          <div class="full_document_div"></div>
         <a href="?cmd=getDocumentBody&docuemnt_type={$active_sub_menu}&id={$document.id}" id="news_footer_icon{$document.id}" style="width:70px;height:15pxa;float: right;" >
           <span>read more</span>
           <div class="news_footer_icon"></div>
         </a>            
      </div>
  {/foreach} 
 </div>

<div  class="moreDoc4" >
{$countDoc=count($documents)}
    {if $countDoc == 0} 
         <a href="#"><div  class='moreDoc2'  > No  document</div></a> 
    {else}
             <a href="#"><div  class='moreDoc2' onclick="moreDocument({$offset+2})">more document</div></a>
    {/if}
    
</div>
    
      <div id="loading-div" class="modal hide fade">
   <div class="modal-body">
    <h5 class="alert alert-info">Processing, Please wait...</h5>
   </div>
  </div>
    
   
    
{include file='footer.tpl'}


