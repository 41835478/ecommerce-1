 {if count($result) !=0}
     {foreach from=$result item=period}

         
        <tr>
            <td>{$period.id}</td>
            <td>{$period.date_entered}</td>
            <td >{$period.date_modified}</td>
            <td >{$period.description}</td>
            <!--<td>{$period.deleted}</td> -->
            <td>{$period.start_date}</td>
            <td >{$period.end_date}</td>
            <td >{$period.price}</td>
        </tr>
 
    {/foreach}
    {else}
        <tr><td colspan="7">  No result</td></tr>
      
    {/if}
