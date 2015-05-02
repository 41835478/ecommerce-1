{include file='header.tpl'}
{include file='submenu.tpl'}

 <div class="find">
    <span>Find news</span>
    <input type="text" placeholder="Enter title, line ,date" id="search_articles" value="{$finedArt}"/>
    <input type="button" value="Find" id="find_articles"/>
    <div class="search_about"></div>
 </div>

 <div class="documents_form">
  {foreach from=$documents item=document}  
      <div class="news-item{$document.id}" style="height: 180px;;margin-bottom: 10px;overflow: hidden; float:left">
         <div class="news-title">{$document.name}</div>
         <div class="category">Category:<div  id="dectCategory">{$document.category} </div></div><div class="date_entered">Published: {$document.publish_date}</div>
         <div>{$document.body|unescape:"htmlall"}</div>
      </div>
      <div class="news_footer">
         <a href="#" id="news_footer_icon{$document.id}" style="width:70px;height:15pxa;float: right;" onclick="getDocument('{$document.id}')">
           <span>read more</span>
           <div class="news_footer_icon"></div>
         </a>            
      </div>
  {/foreach} 
 </div>

 
{$countDoc=count($documents)}
    {if $countDoc == 0} 
         <div style="color:red"> Your search did not match any news. </div> 
    {else}
         <div  id="moreDoc2" >
            {if $finedArt == ""}
             <a href="#"><div  class='moreDoc2' onclick="moreDocument(2)">more document</div></a>
            {else}
             <a href="#"><div  class='finedMoreDoc2' onclick="finedMoreDocument(2)">Fined More Document</div></a>
            {/if}
         </div>
    {/if}
{include file='footer.tpl'}


