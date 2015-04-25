{if count($info)}
 {assign var=counter value=0}
 {section name=redirect loop=$info}
 <div class="panel curved">
  <div class="panel-header">Redirection</div>
  <div class="panel-body">
   <table class="table table-striped table-hover">
    <tr>
     <td><label><strong>First Phone</strong></label></td>
     <td>{$info[redirect].fphone}</td>
     <td><label><strong>Second Phone</strong></label></td>
     <td>{$info[redirect].sphone}</td>
    </tr>
    <tr>
     <td><label><strong>Toll Free</strong></label></td>
     <td>{$info[redirect].toll_free}</td>
     <td><label><strong>Redirect To Phone</strong></label></td>
     <td>{$info[redirect].rphone}</td>
    </tr>
    <tr>
     <td><label><strong>Fax Number</strong></label></td>
     <td>{$info[redirect].fxnumber}</td>
     <td><label><strong>Fax Email</strong></label></td>
     <td>{$info[redirect].fxemail}</td>
    </tr>
    <tr>
     <td><label><strong>Start Date</strong></label></td>
     <td>{$info[redirect].sdate}</td>
     <td><label><strong>Expire Date</strong></label></td>
     <td>{$info[redirect].edate}</td>
    </tr>
    <tr>
     <td><label><strong>Time Remaining</strong></label></td>
     <td>{$expire.$counter}</td>
     <td><label><strong>Price</strong></label></td>
     <td>{$info[redirect].price}</td>
    </tr>
   </table>
  </div>
 </div>
 <div class="sep-10"></div>
 {assign var=counter value=$counter+1}
 {/section}
 {else} <h3 class="no-data-found">No Phone Redirections Found</h3>
 {/if}