<div class="col1">  
<div class="set_menu">
   <ul>
    {if $sub==''}
     {foreach from=$menu key=k item=v}
         <li><div class="menu_li"></div><a href="?cmd={$v.id}" id="{$v.id}">- {$v.display}</a></li>
     {/foreach}
     {else}
     {foreach from=$menu key=k item=v}
       {if $sub==$k}
          {$sub1=$v.sub}
          {foreach from=$sub1 key=x item=y} 
             <li><div class="menu_li"></div><a href="?cmd={$y.id}" id="{$y.id}">- {$y.display}</a></li>
             {if $y.sub}
             <ul>
              {$sub2=$y.sub}
              {foreach from=$sub2 key=a item=b}
                  <li id="sub_menu_account"><a id="{$b.id}" href="?cmd={$b.id}">{$b.display}</a></li>
              {/foreach}
              </ul>
             {/if}
          {/foreach} 
       {/if}
     {/foreach}
     {/if}
   </ul>
</div>  
</div>