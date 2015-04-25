{$offset=$offset+2}
 
 {if count($documents)}
 <div class="documents_form">
  {foreach from=$documents item=document}

  <div class="news-item{$document.id}" style="height: 180px;;margin-bottom: 10px;overflow: hidden; float:left">
   <div class="news-title">{$document.name}</div>
   <div class="category">Category: {$document.category}</div><div class="date_entered">Published: {$document.publish_date}</div>
   <div>{$document.body|unescape:"htmlall"}</div>
  </div>
    <div class="news_footer">
        <a href="#" id="news_footer_icon{$document.id}" style="width:70px;height:15pxa;float: right;" onclick="getDocument('{$document.id}')">
            <span>read more</span>
            <div class="news_footer_icon"></div>
        </a>            
    </div>
    {/foreach}

    
     <div  id="moreDoc{$offset}" >
      {if $finedArt == ""}
       <a href="#"><div  class='moreDoc{$offset}' style="float:right;width:370px;height: 20px;margin-top: 15px;" onclick="moreDocument('{$offset}')">more document</div></a>
      {else}
       <a href="#"><div  class='finedMoreDoc{$offset}' style="float:right;width: 370px;height: 20px;margin-top: 15px;" onclick="finedMoreDocument('{$offset}')">fined more document</div></a>
      {/if}
     </div>
 {else}
 <div class="documents_form"> not more </div>
 {/if} 

</div>

  