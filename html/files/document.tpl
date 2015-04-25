{include file='submenu.tpl'}

<div class="documents_form">
  <div class="news-item{$document.category}" style="margin-bottom: 10px;overflow: hidden;">
   <div class="news-title">{$document.name}</div>
   <div class="category">Category: {$document.category}</div><div class="date_entered">Published: {$document.publish_date}</div>
   <div>{$document.body|unescape:"htmlall"}</div>
  </div>
 </div>