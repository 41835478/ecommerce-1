<div class="main-menu-wrapper">
  <div class="wrapper overflow">
  <div id='cssmenu'>
   <ul>
     {foreach from=$menu key=k item=v}
        <li>

           <a href="{if $v.id == "#"} {else} ?cmd={$v.id}{/if} " id="{$v.id}" >{$v.display}</a>

           {if $v.sub}
             {$sub = $v.sub}
             <ul>
               {foreach from=$sub key=x item=y}
          	       <li><a href="?cmd={$y.id}" id="{$y.id}">{$y.display}</a></li>
               {/foreach}
             </ul> 
           {/if}
        </li>
     {/foreach}
    </ul>
  </div>
  </div>
</div>