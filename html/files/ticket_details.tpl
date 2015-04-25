<div class="sep-10"></div>
<div><span class="ticket-title">{$details.name}</span><span class="ticket-comment-count">( {count($details.notes)} Comments )</span></div>
<div class="sep-10"></div>
<div class="ticket-body">{$details.description|nl2br}</div>
<div class="sep-10"></div>
{if count($details.notes)}
 {foreach from=$details.notes item=note}
  <div class="one-note">
   <div class="note-date">{$note.date_entered}</div>
   <div class="overflow">
    <div class="note-avatar {if $note.assigned_user_id}planet-avatar{else}client-avatar{/if}"></div>
    <div class="note-text">{$note.description|nl2br}</div>
   </div>
  </div>
  <div class="sep-10"></div>
 {/foreach}
 <div class="sep-10"></div>
{/if}
<div class="note-add-comment-wrapper">
 <h2>Add Comment</h2>
 <div class="sep-5"></div>
 <div><textarea id="new-comment" class="form-area"></textarea></div>
 <div class="sep-5"></div>
 <div><a class="curved button orange-gradient" id="add-comment" href="javascript:;">Send</a></div>
</div>