 
{include file='header.tpl'}
<div class="tab-pane active" id="MQPlanet">

  {if count($news)}
  {foreach from=$news item=new}
  <div class="news-item">
   <div class="news-title">{$new.name}</div>
   <div class="news-body">{$new.body|truncate:200:"...":false:false|strip_tags:true}</div>
   <a href='#' id='read_more_article' rel='{$new.id}'>read more</a>
   <div class="category">Category: {$new.category}</div> 
   <div class="date_entered">Published: {$new.date_entered}</div>
  </div>
  {/foreach}
  {/if}

 </div>
{include file='footer.tpl'}