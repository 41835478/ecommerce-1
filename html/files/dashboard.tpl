{include file='header.tpl'}
<div id="dashboard_all_div">
<style type="text/css">
    .main-inner {
  margin-top: 0px;
  min-height: 400px;
  width: 100%;
  margin: 0 auto;
  padding: 0px;
  overflow: auto;
}

</style>
<section id="body_section">

    <div id="header_blank_div"></div><!-- #header_blank_div -->    

    <div id="inner_page_all_div">
        <div id="body_header_div">

            <div class=" table_all_div" id="welcome_table_all_div" >
                <div class="table_head_div">
                    <div class="top_table_icon_div">
                        <i class="fa fa-share"></i>
                    </div>
                    <div class="table_head_label">
                      Control Panel
                    </div>

                </div>

                <table class="main_table"  >
                    <thead>
                        <tr><td style="font-size:16px;  padding: 1%; line-height: 30px;">
                           
                                We would like to welcome you, to your control area.<br>
This area is delivers all the information regarding your renewals and software updates. <br>
We place this tool in your hands to achieve a fast and effective connection between us.<br>

                                
                                
                            </td></tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

            </div><!-- #welcome_table_all_div -->

            
            
            
            <div class=" table_all_div" id="new_messages_label_table_all_div">
                <div class="table_head_div">
                    <div class="top_table_icon_div">
                        <i class="fa fa-refresh"></i>
                    </div>
                    <div class="table_head_label">
                        <div style="width:200px;">
                        {if $cases_number >0 }    
                        you have {$cases_number} open cases
                        {else}
                            you have no open cases
                        {/if}
                        </div>
                    </div>
                        <div id="new_messages_icon_number_div" style="cursor:pointer;" onclick="window.location.href='index.php?cmd=open-cases&status=New';" >
                        {$cases_number}
                        <i class="fa fa-envelope-o"></i>
                    </div><!-- #new_messages_icon_number_div -->

                </div>

            </div><!-- #new_messages_label_table_all_div -->

            
            
            
            <div class=" table_all_div" id="account_summary_table_all_div"  >
                <div class="table_head_div">
                    <div class="top_table_icon_div">
                        <i class="fa fa-share"></i>
                    </div>
                    <div class="table_head_label">
                        Account Summary
                    </div>

                </div>
                <div class="scroll_table_div" style="font-size:18px; text-align: center; ">
                
                    {if $remaining > 0}
    <br>The remaining  amount <br><br><b style="font-size:24px;">{$remaining}$ </b>
    <br>
    <a href="index.php?cmd=invoices" style="display:block;"><button  style="float:right; margin-right: 1%;" >Invoice list</button></a>
    {else}
        <br>You have pay all your invices(temp) </b>
        {/if}
                </div><!-- .scroll_table_div -->
                
            </div><!-- #account_summary_table_all_div -->

            <div class="hr_div"></div><!-- .hr_div -->
        </div><!-- #body_header_div -->


        
        
        
            <div class=" table_all_div" id="news_table_all_div" >
                <div class="table_head_div">
                    <div class="top_table_icon_div">
                        <i class="fa fa-share"></i>
                    </div>
                    <div class="table_head_label">
                        News
                    </div>

                </div>
                <table class="main_table"  >
                    <thead>
                      
                    </thead>
                    <tbody>
                        
                        {foreach from=$documents item=document} 
                        <tr><td>
                                <div class="news_social_icons_div" >
                                    <i class="fa fa-facebook-f"></i>
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-envelope"></i>
                                </div><!--.news_social_icons_div -->
                                
                                <span class="news_date_span">{$document.publish_date}</span>
                                <h5 class="news_title_h5">{$document.name}</h5>
                                <div style="clear:both;"></div>
                                <p class="one_news_shortcut_p">
                                    {$document.body|unescape:"htmlall"|mb_substr:0:1000}<span >...</span>
                                </p>
                                <div class="read_more_news_div">
                                    <a class="dashboard_news_read_more_a" onclick="read_more($(this));" >
                                        read more <i class="fa fa-arrows-alt"></i>
                                <div class="one_news_details_p">{$document.body|unescape:"htmlall"|mb_substr:1000:1000000}
                                </div>
                                    </a><!-- dashboard_news_read_more_a -->                                   
                                </div><!-- read_more_news_div -->
                            </td></tr>
                          {/foreach} 
                        
                        
                    </tbody>
                </table>

            </div><!-- #news_table_all_div -->

            
            
    </div><!-- #inner_page_all_div -->

</section><!-- #body_section -->
</div><!-- #dashboard_all_div this div just for dashboard -->
{*
<div class="tab-pane active" id="MQPlanet">

{if count($news)}
{foreach from=$news item=new}
<div class="news-item">
<div class="news-title">{$new.name}</div>
<div class="news-body">{$new.body|truncate:200:"...":false:false|strip_tags:true}</div>
<a href='#' id='read_more_article' rel='{$new.id}'>read more</a>
<div class="category">Category: {$new.category}</div> 
<div class="date_entered">Published: {$new.date_entered}</div>
</div>
{/foreach}
{/if}

</div>
*}
{include file='footer.tpl'}