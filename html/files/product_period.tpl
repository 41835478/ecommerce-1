 {if count($result) !=0}
     {foreach from=$result item=period}
    
       
        <tr>
            <td></td>
            <td>{$period.start_date}</td>
            <td >{$period.end_date}</td>
            <td ></td>
        </tr>
 
    {/foreach}
    {else}
        <tr><td colspan="4">  No result</td></tr>
      
    {/if}
