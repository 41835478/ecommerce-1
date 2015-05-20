<div class="col1">  
<div class="set_menu">
   <ul>
    {if $sub==''}
     {foreach from=$menu key=k item=v}
         <li><div class="menu_li"></div><a href="?cmd={$v.id}" id="{$v.id}"> {$v.display}</a></li>
     {/foreach}
     {else}
     {foreach from=$menu key=k item=v}
       {if $sub==$k}
          {$sub1=$v.sub}
          {foreach from=$sub1 key=x item=y} 
             <li class="main_menu_title_li"><div class="menu_li"></div><a >{$y.display}</a>
             {if $y.sub}
             <ul class="sub_menu_account_ul">
              {$sub2=$y.sub}
              <li class="sub_menu_account"><a href="?cmd={$y.id}" id="{$y.id}"> {$y.display}</a></li>
              {foreach from=$sub2 key=a item=b}
                  <li class="sub_menu_account"><a id="{$b.id}" href="?cmd={$b.id}">{$b.display}</a></li>
              {/foreach}
              </ul></li>
             {/if}
          {/foreach} 
       {/if}
     {/foreach}
     {/if}
   </ul>
</div>  
</div>
     {if isset($active_sub_menu)}
     <script>
         set_active_menu("{$active_sub_menu}");
     </script>
     {/if}
   