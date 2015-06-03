{include file='header.tpl'}
{include file='submenu.tpl'}
    


            <div class=" table_all_div" id="add_case_table_all_div" >
                <div class="table_head_div">
                    <div class="top_table_icon_div">
                        <i class="fa fa-share"></i>
                    </div>
                    <div class="table_head_label">
                        New Case
                        {if $error_text}
                            <font style='color:#f00'>{$error_text}</font>
                        {/if}
                    </div>

                </div>
                <form action="?cmd=new-case" method="post" id="add_case_form">
                <table class="main_table"  >
                    <thead>
                        
                    </thead>
                    <tbody>
                        <tr>
                            <th>Subject</th>
                            <td><input name="case_subject_input" id="case_subject_input" placeholder="Case Subject" required> </td>
                        </tr>
                        <tr>
                            <th valign="top">Description</th>
                            <td> <textarea name="case_description_textarea" id="case_description_textarea" placeholder="Write case description" required></textarea></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td> <button name="add_case_button" id="add_case_button" value="save">add case</button></td>
                        </tr>
                    </tbody>
                </table>
                </form>

            </div><!-- #add_case_table_all_div -->

                 
{include file='footer.tpl'}