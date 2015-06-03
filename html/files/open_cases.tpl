{include file='header.tpl'}
{include file='submenu.tpl'}
       
            <div class=" table_all_div"   >
                <div class="table_head_div">
                    <div class="top_table_icon_div">
                        <i class="fa fa-share"></i>
                    </div>
                    <div class="table_head_label">
                        Cases list
                            <span id="add_error_message_span" style='color:#f00'></span>
                    </div>

                </div>
                 
                <table class="main_table"  >
                    <thead>
                                <tr>
            <th  >Case</th>
            <th >Status</th>
            <th >Action</th>
        </tr>
                    </thead>
                    
                    <tbody>
                        {foreach from=$cases item=case}   
             {if $case.status != $page_status} 
        {continue} 
     {/if} 
        <tr>
            <td >{$case.name}</td>
            <td >{$status.{$case.status}}</td>
            <td ><i class="fa fa-list" onclick="getCaseBuges('{$case.id}')"></i></td>
        </tr>
   
    {/foreach}
                    </tbody>
                    

                    
                </table>

            </div>
            
            
       
  
        
       
            <div class=" table_all_div" id="add_comment_case_table_all_div" >
                <div class="table_head_div">
                    <div class="top_table_icon_div">
                        <i class="fa fa-share"></i>
                    </div>
                    <div class="table_head_label">
                        add comment on case
                            <span id="add_error_message_span" style='color:#f00'></span>
                    </div>

                </div>
                    <form action=" " method="post" id="add_comment_form" onsubmit="return false;">
                <table class="main_table"  >
                    <thead>
                        
                    </thead>
                    
                    <tbody>
                    </tbody>
                    
                    
                    <tfoot>
                        <tr>
                            <th>Description</th>
                            <td> <textarea name="buge_description" id="buge_description" placeholder="Write your comment" required></textarea></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td> <button name="add_case_button" id="add_case_button" value="save">add comment</button></td>
                        </tr>
                    </tfoot>
                    
                    
                </table>
                </form>

            </div><!-- #add_comment_table_all_div -->

        
{include file='footer.tpl'}