{$offset=$offset+2}
 <div class="documents_form">
  {foreach from=$documents item=document}  
      <div class="news-item{$document.id}" style="margin-bottom: 10px;overflow: hidden; float:left">
         <div class="news-title">{$document.name}</div>
         <div class="category">Category:<div  id="dectCategory">{$document.category} </div></div><div class="date_entered">Published: {$document.publish_date}</div>
         <div>{$document.body|unescape:"htmlall"}</div>
        
      </div>
      <div class="news_footer"> 
          <div class="full_document_div"></div>
         <a href="#" id="news_footer_icon{$document.id}" style="width:70px;height:15pxa;float: right;" onclick="getDocument('{$document.id}',$(this))">
           <span>read more</span>
           <div class="news_footer_icon"></div>
         </a>            
      </div>
  {/foreach} 
 </div>

   <div  class="moreDoc4" >
{$countDoc=count($documents)}
    {if $countDoc == 0} 
         <a href="#"><div  class='moreDoc2'  > No More document</div></a> 
    {else}
      
       <a href="#"><div  class='moreDoc2' onclick="moreDocument({$offset})">More Document</div></a>

       
    {/if}
  </div>


