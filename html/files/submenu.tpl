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
       {if $y.sub}
          
          <li class="main_menu_title_li"><div class="menu_li"></div><a ><i class=" fa fa-plus-square-o"></i>  {$y.display}</a>
             
             <ul class="sub_menu_account_ul">
              {$sub2=$y.sub}
              {if $y.status !='hidden'}
              <li class="sub_menu_account"><a href="?cmd={$y.id}" id="{$y.id}">{$y.display}</a></li>
              {/if}
              {foreach from=$sub2 key=a item=b}
              <li class="sub_menu_account"><a href="?cmd={$b.id}" id="{$b.id|replace:'&':''|replace:'=':''}">{$b.display}</a></li>
              {/foreach}
              </ul></li>
             {else}
                 <li class="main_menu_title_li">
                     <div class="menu_li"></div>
                     <a href="?cmd={$y.id}" id="{$y.id}" no_sub='1'> {$y.display}</a>
             
             </li>
                 
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
   