{include file='submenu.tpl'}

 <div class="find">
    <span>Find news</span>
    <input type="text" placeholder="Enter title, line ,date" />
    <input type="button" value="Find" id="find_articles"/>
 </div>
 <div class="documents_form">
  {foreach from=$documents item=document}
  <div class="news-item{$document.id}" style="height: 180px;;margin-bottom: 10px;overflow: hidden;">
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
  
 </div>
