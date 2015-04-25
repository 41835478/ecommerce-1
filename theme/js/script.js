//--------------------------------------------------------//
//                      Variables						  //
//--------------------------------------------------------//
var INTERNAL_ERROR = 'Internal Error, Please Try Again';

//--------------------------------------------------------//
//                       Events				  //
//--------------------------------------------------------//

$.ajax({
  cache: false
});

$(document).ready(function(){
    var serBuilder="";
  $('#logout').click(function(){logout()});
  $('#setting').click(function(){getSetting()});
  $('#contacts').live('click',function(){getContacts()});
  $('#members').live('click',function(){getMembers()});
  $('#add_contact').live('click',function(){addContact()});
  $('#add_user').live('click',function(){addUser()});
  $('#add_license').live('click',function(){addLicense()});
  $('#servers').live('click',function(){getServers()});
  $('#webhosts').live('click',function(){getWebhosts()});
  $('#domains').live('click',function(){getDomains()});
  $('#company').live('click',function(){getCompany()});
  $('#products').live('click',function(){getProducts()});
  $('#open-cases').live('click',function(){getOpenCases()});
  $('#invoices').live('click',function(){getInvoices()});
  $('#dashboard').live('click',function(){getDashboard()});
  
  $('#articles').live('click',function(){getDocuments('articles');});
  $('#news').live('click',function(){getDocuments('news')});
  $('#faqs').live('click',function(){getDocuments('faqs')});
  $('#manuals').live('click',function(){getDocuments('manuals')});                         
  
  $('#triangle-down').live('click',function(){
    $('#triangle-down').fadeOut(10);
    $('.header_form_Invoice').css({'height':'auto'});   
    $('#triangle-up').fadeIn(10); 
  });
  $('#triangle-up').live('click',function(){
    $('#triangle-up').fadeOut(10);
    $('.header_form_Invoice').css({'height':'30px'});    
    $('#triangle-down').fadeIn(10);
  });
  $('#find_articles').live('click',function(){findArticles();});
  $('#saveContactDetalis').live('click',function(){saveContactDetails();});
  $('#saveUserDetalis').live('click',function(){saveUserDetails()});
  $('#saveLicenseDetalis').live('click',function(){saveLicenseDetails()});    
  $('#saveNewExisitingUser').live('click',function(){saveNewExistingUser()});
  $('#saveServerFTP').live('click',function(){saveServerFTP()});
  $('#ServerReboot').live('click',function(){
    if($('#ServerReboot').val()=="Confirm") {
        getServerReboot($('#selectedServer').val());
        
    }
    
    if($('#ServerReboot').val()=="Reboot") {
        $('#ServerReboot').val("Confirm");
        $("#confirmMessage").css({"display":"block"});
    }
    
  });
  
  $('#Edit_PerInfo').live('click',function(){$(".header_form").fadeIn();});
  $('#Edit_ContInfo').live('click',function(){$(".header_form1").fadeIn();});
  $('.head_close').live('click',function(){$(".header_form1").fadeOut();});
  $('.head_close5').live('click',function(){$(".header_form").fadeOut();});  
  $('.head_close2').live('click',function(){$(".header_form").fadeOut();});
  $('.head_close2').live('click',function(){$(".new_account2").fadeOut();}); 
  $('.head_close6').live('click',function(){$(".header_form6").fadeOut();});
  
  $('#edit_contact').live('click',function(){$(".header_form").fadeIn();});
   $('#edit_server').live('click',function(){$(".header_form").fadeIn();});
  $('.foot_icon5').live('click',function(){$(".header_form").fadeIn();});
  $('.head_close3').live('click',function(){$(".add_account").fadeOut();});
  $('.head_close4').live('click',function(){$(".header_form4").fadeOut();});
  
  $('#forget-password').live('click',function(){forgetPassword(); $('#banners').hide();});
  $('#send_forget_password').live('click',function(){sendForgetPassword();});
  $('#back-to-login').live('click',function(){backToLogin();});
  $('#login-btn').live('click',function(){checkLogin()});

  
  
  /* request mostly will be deleted */
  $('#request-btn').click(function(){requestDialog()});
  $('#request-server-form-id').live('click',function(){openRequestServer();$('#banners').hide();});
  $('#request-product-form-id').live('click',function(){openRequestProduct();$('#banners').hide();});
  $('#request-domain-form-id').live('click',function(){openRequestDomain();$('#banners').hide();});
  $('#request-host-form-id').live('click',function(){openRequestHost();$('#banners').hide();});
 
 
 
  $('#create-ticket-form').live('click',function(){openTicket();$('#banners').hide();});
 

                 
                      
                              
                                   
  
  
  $('#new_contact').live('click',function() {
    var Acc_Password = $('#AccPassword').val();
    if(Acc_Password.length<6)
    {
        $('#AccLable').css({'display':'block'});
        $('#AccLable').val("password must be more than 6 characters");
         return;
    }
        
    $('#AccLable').css({'display':'none'});
    $(".User_Contact").fadeOut(500);
    $(".new_account2").fadeIn(500);
  });
  
   $('#existing_contact').live('click',function() {
    var Acc_Password = $('#AccPassword').val();
    if(Acc_Password.length<6)
    {
        $('#AccLable').css({'display':'block'});
        $('#AccLable').val("password must be more than 6 characters");
         return;
    }
    $('#AccLable').css({'display':'none'});  
    $(".new_account2").fadeOut(500);
    $(".User_Contact").fadeIn(500);
  });
  
  
  $('.ded_img2').live('click',function(){
    $(".ded_select2").css({"display":"block"});
    $(".ded_select1").css({"display":"none"});
    $(".ded_select3").css({"display":"none"});
    $(".ded_select4").css({"display":"none"});
    $(".tool_sli2").fadeIn();  
    $(".tool_sli1").fadeOut();
    $(".tool_sli3").fadeOut();
    $(".tool_sli4").fadeOut();
    

  });
    $('.ded_img4').live('click',function(){
    $(".ded_select4").css({"display":"block"});
    $(".ded_select1").css({"display":"none"});
    $(".ded_select3").css({"display":"none"});
    $(".ded_select2").css({"display":"none"});
    $(".tool_sli4").fadeIn();  
    $(".tool_sli1").fadeOut();
    $(".tool_sli3").fadeOut();
    $(".tool_sli2").fadeOut();
    getServerBandwidth($('#selectedServer').val());
  });
    $('.ded_img3').live('click',function(){
    $(".ded_select3").css({"display":"block"});
    $(".ded_select1").css({"display":"none"});
    $(".ded_select2").css({"display":"none"});
    $(".ded_select4").css({"display":"none"});
    $(".tool_sli3").fadeIn();  
    $(".tool_sli1").fadeOut();
    $(".tool_sli2").fadeOut();
    $(".tool_sli4").fadeOut();
    getServerFTP($('#selectedServer').val());
  });
    $('.ded_img1').live('click',function(){
    $(".ded_select1").css({"display":"block"});
    $(".ded_select2").css({"display":"none"});
    $(".ded_select3").css({"display":"none"});
    $(".ded_select4").css({"display":"none"});
    $(".tool_sli1").fadeIn(); 
    $(".tool_sli2").fadeOut();
    $(".tool_sli3").fadeOut();
    $(".tool_sli4").fadeOut();
    
     
  });
  
  
  $('#invoice_detail').live('click',function(){readUrl($(this));});

  //$('#dashborad-info-get,#articles , #manuals , #faqs , #news').click(function(){getDashboard($(this)); $('#banners').show(); return false});
  
  


  $('#invoice-info-get').click(function(){getInvoicesInfo(); $('#banners').hide();return false});
  $('#support-get').click(function(){getSupportInfo(); $('#banners').hide();return false});

  $('#request-server').click(function(){modalServer(); $('#banners').hide();return false});
  $('#request-host').click(function(){modalHost(); $('#banners').hide();return false});
  $('#request-product').click(function(){modalProduct(); $('#banners').hide();return false});
  $('#request-domain').click(function(){modalDomain(); $('#banners').hide();return false});

  $('#confirm-request-server').live('click',function(){submitServerForm()});
  $('#confirm-request-product').live('click',function(){submitProductForm()});
  $('#confirm-request-host').live('click',function(){submitHostForm()});
  $('#confirm-request-domain').live('click',function(){checkDomainAvilability()});
  
  $('#read_more_article').live('click',function(){ displayArticle($(this)); $('#banners').hide();return false});

  $('#confirm-create-ticket').live('click',function(){submitNewTicket()});

  $("ul.sf-menu").superfish({
    pathClass:  'current'
  });
  $('#banners').carousel();
  $('#dashboard-tabs a').click(function(e){
    e.preventDefault();
    $(this).tab('show');
  });

});

//--------------------------------------------------------//
//                      Functions													//
//--------------------------------------------------------//

function centerVer(ele){
  var parentH = $('#'+ele).parent().height();
  var thisH   = $('#'+ele).height();
  $('#'+ele).css({'margin-top':(parentH-thisH)/2+'px'});
}

function closeDialog(){
  $('.modal').modal('hide')
}

function loadingDialog(){
  $('#loading-div').modal({
    keyboard: false,
  });
}

function modalText(txt){
  $('#request-result .modal-body').html(txt);
  $('#request-result').modal();
}

function requestDialog(){
	$("#request-div").modal({
	opacity:90,
    close:false,
    minHeight: 200,
    minWidth: 350
  });
}

function toggleReport(status){
  if(status){
    $('#report-error').removeClass('hidden');
    return;
  }
  $('#report-error').addClass('hidden');
}

function validateEmail($email) {
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      if( !emailReg.test( $email ) ) {
        return false;
      } else {
        return true;
      }
}

$('html').keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
     if(keycode == '13'){
     $('#login-btn').trigger('click');   
   }
  });  


/*************************************************
 Login Screen back to Login from Forget password
**************************************************/
function backToLogin(){
    $.ajax({
        url: 'index.php?cmd=back-to-password',
        success: function(data){
            window.location.reload();
    },
    error: function(errors){
      alert(INTERNAL_ERROR);
    }
    });
}


/**********************************
  Show Forgetpassword Page
************************************/
function forgetPassword(){
    $.ajax({
        url: 'index.php?cmd=forget-password',
        success: function(data){
            $('#login-wrapper').html(data);
    },
    error: function(errors){
      alert(INTERNAL_ERROR);
    }
    });
}

/*********************************
    send Forget user/pass
********************************/
function sendForgetPassword(){
    loadingDialog();
    var email = $('#email_frgt').val();
    if(validateEmail(email)== false){
        $("#result_frgt").html('Invalid email address syntax ... ');
        closeDialog();
        return false;
    }
    
    $.ajax({
        url: 'index.php?cmd=send-forget-password&email='+email,
        success: function(data){
            
            if(data == 1 ){
             $("#result_frgt").html('Invalid email address syntax');
             closeDialog();
             return;
            }
            else if(data == 2){
             $("#result_frgt").html('Invalid email address');
             closeDialog();
             return;
            }
            else if(data == 3){
             $("#result_frgt").html('Error, Please Try again..!');
             closeDialog();
             return;
            }
            else{
             $("#result_frgt").html('email has been send ...');
             closeDialog();
             return;
            }
            closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
    });
}

/******************************
  Check Login
 *****************************/
function checkLogin(){

  var login    = $('#cid').val();
  var password = $('#cpassword').val();

  if(login == '')    $('#cid').css({'background-color':'#F4BCBC'});
  if(password == '') $('#cpassword').css({'background-color':'#F4BCBC'});

  if(login == '' || password == '') return;

  loadingDialog();

  $.ajax({
    url: 'index.php?cmd=checklogin&login='+login+'&password='+password,
    success: function(data){
      if(data) {
        $('#banners').show();
        window.location.reload();
        }
      
      else{
        $('#login-result').html('Invalid login information');
        closeDialog();
      }
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}



/********************************
  Save Contacts Details
 *******************************/
function saveContactDetails(){
        

 var Contact_firstName = $('#ConfirstName').val();
 var Contact_lastName = $('#ConlastName').val();
 var Contact_Position = $('#ConPosition').val();
 var Contact_officePhone = $('#ConOfficePone').val();
 var Contact_mobPhone = $('#ConMobilePone').val();
 var Contact_city = $('#ConCity').val();
 var Contact_country = $('#ConCountry').val();
 var Contact_Email = $('#ConEmail').val();
 var Contact_ID = $('#ContID').val();
 var Contact_Salutation = $('input:radio[name=title]:checked').val();

 if(Contact_ID=='') return;   

     if(Contact_firstName == '') $('#ConfirstName').css({'background-color':'#F4BCBC'});
     else $('#ConfirstName').css({'background-color':'#FFFFFF'});
     if(Contact_lastName == '') $('#ConlastName').css({'background-color':'#F4BCBC'});
     else $('#ConlastName').css({'background-color':'#FFFFFF'});
     if(Contact_Position == '') $('#ConPosition').css({'background-color':'#F4BCBC'});
     else $('#ConPosition').css({'background-color':'#FFFFFF'});
     if(Contact_officePhone == '') $('#ConOfficePone').css({'background-color':'#F4BCBC'});
     else $('#ConOfficePone').css({'background-color':'#FFFFFF'});
     if(Contact_mobPhone == '') $('#ConMobilePone').css({'background-color':'#F4BCBC'});
     else $('#ConMobilePone').css({'background-color':'#FFFFFF'});
     if(Contact_city == '') $('#ConCity').css({'background-color':'#F4BCBC'});
     else $('#ConCity').css({'background-color':'#FFFFFF'});
     if(Contact_country == '') $('#ConCountry').css({'background-color':'#F4BCBC'});
     else $('#ConCountry').css({'background-color':'#FFFFFF'});   
     alert(Contact_Email);
     if(Contact_Email == ''){
        $('#ConEmail').css({'background-color':'#F4BCBC'});
     }else if(validateEmail(Contact_Email)== false){
         document.getElementById('filter_email').innerHTML=("Invalid email address syntax ... ");
         $('#ConEmail').css({'border':'1px solid red','background-color':'#FFFFFF'});
     }else{
         document.getElementById('filter_email').innerHTML=("");
         $('#ConEmail').css({'border':'1px solid silver','background-color':'#FFFFFF'});
    }
            
    if(Contact_firstName == '' || Contact_lastName == '' || Contact_Position == '' ||
       Contact_officePhone == '' || Contact_mobPhone == '' || Contact_city == '' || 
       Contact_country == '' ||  Contact_Email == ''){ return;}
       


    $.ajax({
      url: 'index.php?cmd=saveContact&first_name='+Contact_firstName+'&last_name='+Contact_lastName+
           '&salutation='+Contact_Salutation+'&office_phone='+Contact_officePhone+'&mobile_phone='+Contact_mobPhone+
           '&city='+Contact_city+'&country='+Contact_country+'&email='+Contact_Email+'&position='+Contact_Position+
           '&id='+Contact_ID,
      success: function(data){
        modalText(data);
        document.getElementById('cont_first_name').innerHTML = Contact_firstName;
        document.getElementById('cont_Last_name').innerHTML = Contact_lastName;
        document.getElementById('cont_position').innerHTML = Contact_Position;  
        document.getElementById('cont_offPhone').innerHTML = Contact_officePhone;  
        document.getElementById('cont_mobPhone').innerHTML = Contact_mobPhone;  
        document.getElementById('cont_City').innerHTML = Contact_city;  
        document.getElementById('cont_country').innerHTML = Contact_country;  
        document.getElementById('cont_Email').innerHTML = Contact_Email;      
        getContacts();
    
      },
      error: function(errors){
        modalText(INTERNAL_ERROR);
      }
    });
 
$(".header_form").fadeOut();  
};

/********************************
  Save License Details
 *******************************/
function saveLicenseDetails()
{
 var License_Name = $('#LicenseName').val();
 var License_ID = $('#LicenseID').val();
 var License_Type = $('#LicenseType').val();
 if(License_ID=='') return; 
 
  if(License_Name == '') {
    $('#LicName').css({'background-color':'#F4BCBC'});
    return;
  }
  $.ajax({
      url: 'index.php?cmd=saveLicense&license_name='+License_Name+'&license_type='+License_Type
           +'&license_id='+License_ID,
     success: function(data){
        modalText(data);
      //  getCompany();
    
      },
      error: function(errors){
        modalText(INTERNAL_ERROR);
      }
    });
 
$(".header_form").fadeOut();  
};
  
    


        
/*******************************
  fill Contact Form for modifcation
*******************************/
function fillContact(id) {
    $.ajax({
    url: 'index.php?cmd=getContactDetails&id='+id,
    success: function(data){
      var obj = JSON.parse(data);
      $('#ConfirstName').val(obj.first_name);
      $('#ConlastName').val(obj.last_name);
      $('#ConPosition').val(obj.title);
      $('#ConOfficePone').val(obj.phone_work);
      $('#ConMobilePone').val(obj.phone_mobile);
      $('#ConCity').val(obj.primary_address_city);
      $('#ConCountry').val(obj.primary_address_country);
      $('#ConEmail').val(obj.email1);
      $('#ContID').val(obj.id);
      $('input:radio[name=title][value="'+obj.salutation+'"]').prop('checked',true);
    },
    error: function(errors){
      alert(INTERNAL_ERROR);
    }
  });
    
}

/*********************************
 fill Member for Edit
**********************************/
function fillMember(id) {
   $.ajax({
    url: 'index.php?cmd=getMemberDetails&id='+id,
    success: function(data){
      var obj = JSON.parse(data);
      $('#AccUsername').val(obj.name);
      $('#MemberID').val(obj.id);
      $('#AccLevel').val(obj.level);
    },
    error: function(errors){
      alert(INTERNAL_ERROR);
    }
  });
    
}

/*********************************
 fill License for Edit
**********************************/
function fillLicense(id) {
        $.ajax({
    url: 'index.php?cmd=getLicenseDetails&id='+id,
    success: function(data){
      var obj = JSON.parse(data);
      $('#LicenseName').val(obj.name);
      $('#LicenseID').val(obj.id);
      $('#LicenseType').val(obj.type);
    },
    error: function(errors){
      alert(INTERNAL_ERROR);
    }
  });
    
}

/*********************************
 fill Server Details
**********************************/
function fillServer(id) {
    loadingDialog();
    $('#selectedServer').val(id);
  $.ajax({
    url: 'index.php?cmd=getServerDetails&id='+id,
    success: function(data){
      $('#serverComponent').html(data);
      closeDialog();
    },
    error: function(errors){
      alert(INTERNAL_ERROR);
      closeDialog();
    }
  });

}


/********************************
  Save User Details
 *******************************/
function saveUserDetails(){
 var SelectAcc = $('input:radio[name=selectAcc]:checked').val();
 var Acc_Password = $('#AccCurrPassword').val();
 
 if(Acc_Password=='') {  
    $('#AccCurrPassword').css({'background-color':'#F4BCBC'});
    return;
 }
  if(Acc_Password.length<6){
    $('#AccLable2').css({'display':'block'});
    $('#AccLable2').val("password must be more than 6 characters");
     return;
    
    };   
 if(SelectAcc==1) {
      var Acc_Username = $('#AccUsername').val();
      if(Acc_Username=='') { 
         $('#AccUsername').css({'background-color':'#F4BCBC'});
         return;
      }
 }
 else {
    var Acc_NewPassword = $('#AccNewPassword').val();
    var Acc_ConfirmPassword = $('#AccConfirmPassword').val();
    if(Acc_NewPassword =='' || Acc_ConfirmPassword=='' || Acc_NewPassword!=Acc_ConfirmPassword) {
        $('#AccNewPassword').css({'background-color':'#F4BCBC'});
        $('#AccConfirmPassword').css({'background-color':'#F4BCBC'});
        return;
    }

 }
 var Member_ID = $('#MemberID').val();
 if(Member_ID=='') return;
 
    $.ajax({
      url: 'index.php?cmd=saveMember&password='+Acc_Password+'&username='+Acc_Username+
           '&newpassword='+Acc_NewPassword+'&confirmpassword='+Acc_ConfirmPassword+
           '&id='+Member_ID+'&select='+SelectAcc,
      success: function(data){
        modalText(data);
      },
      error: function(errors){
        modalText(INTERNAL_ERROR);
      }
    });
    $(".header_form1").fadeOut();

}

/********************************
  Add/Exisiting User Details
 *******************************/
function saveNewExistingUser(){
 
 var Acc_Password = $('#AccPassword').val();
 var Acc_Username = $('#AccUsername').val();
 var Acc_Level    = $('#AccLevel').val();
 var Member_ID = $('#MemberID').val();
 var Contact_ID = $('#ContactID').val();
 
  var Contact_firstName = "";
  var Contact_lastName = "";
  var Contact_Position = "";
  var Contact_officePhone = "";
  var Contact_mobPhone = "";
  var Contact_city = "";
  var Contact_country = "";
  var Contact_Email = "";
  var Contact_Salutation = $('input:radio[name=title]:checked').val();
  if(Member_ID=='') return;
 
 if(Acc_Password=='')  $('#AccCurrPassword').css({'background-color':'#F4BCBC'});
 if(Acc_Username=='')  $('#AccUsername').css({'background-color':'#F4BCBC'});
 if(Acc_Level!='technical' && Acc_Level!='billing')  {
    $('#AccLevel').css({'background-color':'#F4BCBC'});
    return;
 }
 if(Acc_Password=='' || Acc_Username=='') return;
 if(Acc_Password.length<6){
    $('#AccLable').css({'display':'block'});
    $('#AccLable').val("password must be more than 6 characters");
     return;
    
    };
 var new_exists =$('input:radio[name=uscontact]:checked').val();
 alert(new_exists);
 if(new_exists=='0') {
      Contact_ID='0';
      Contact_firstName = $('#ConfirstName').val();
      Contact_lastName = $('#ConlastName').val();
      Contact_Position = $('#ConPosition').val();
      Contact_officePhone = $('#ConOfficePone').val();
      Contact_mobPhone = $('#ConMobilePone').val();
      Contact_city = $('#ConCity').val();
      Contact_country = $('#ConCountry').val();
      Contact_Email = $('#ConEmail').val();
      Contact_Salutation = $('#AccTitle').val();
      if(Contact_firstName == '') $('#ConfirstName').css({'background-color':'#F4BCBC'});
     else $('#ConfirstName').css({'background-color':'#FFFFFF'});
     if(Contact_lastName == '') $('#ConlastName').css({'background-color':'#F4BCBC'});
     else $('#ConlastName').css({'background-color':'#FFFFFF'});
     if(Contact_Position == '') $('#ConPosition').css({'background-color':'#F4BCBC'});
     else $('#ConPosition').css({'background-color':'#FFFFFF'});
     if(Contact_officePhone == '') $('#ConOfficePone').css({'background-color':'#F4BCBC'});
     else $('#ConOfficePone').css({'background-color':'#FFFFFF'});
     if(Contact_mobPhone == '') $('#ConMobilePone').css({'background-color':'#F4BCBC'});
     else $('#ConMobilePone').css({'background-color':'#FFFFFF'});
     if(Contact_city == '') $('#ConCity').css({'background-color':'#F4BCBC'});
     else $('#ConCity').css({'background-color':'#FFFFFF'});
     if(Contact_country == '') $('#ConCountry').css({'background-color':'#F4BCBC'});
     else $('#ConCountry').css({'background-color':'#FFFFFF'});   
     alert(Contact_Email);
     if(Contact_Email == ''){
        $('#ConEmail').css({'background-color':'#F4BCBC'});
     }else if(validateEmail(Contact_Email)== false){
         document.getElementById('filter_email').innerHTML=("Invalid email address syntax ... ");
         $('#ConEmail').css({'border':'1px solid red','background-color':'#FFFFFF'});
     }else{
         document.getElementById('filter_email').innerHTML=("");
         $('#ConEmail').css({'border':'1px solid silver','background-color':'#FFFFFF'});
    }
            
    if(Contact_firstName == '' || Contact_lastName == '' || Contact_Position == '' ||
       Contact_officePhone == '' || Contact_mobPhone == '' || Contact_city == '' || 
       Contact_country == '' ||  Contact_Email == ''){ return;}
    
 }
 
    $.ajax({
      url: 'index.php?cmd=saveNewExistingMember&password='+Acc_Password+'&username='+Acc_Username+
           '&level='+Acc_Level+'&id='+Member_ID+"&contact="+Contact_ID+'&first_name='+Contact_firstName+'&last_name='+Contact_lastName+
           '&salutation='+Contact_Salutation+'&office_phone='+Contact_officePhone+'&mobile_phone='+Contact_mobPhone+
           '&city='+Contact_city+'&country='+Contact_country+'&email='+Contact_Email+'&position='+Contact_Position,
      success: function(data){
        modalText(data);
      },
      error: function(errors){
        modalText(INTERNAL_ERROR);
      }
    });
    $(".header_form1").fadeOut();

}
/***********************************
  Logout
 ***********************************/
function logout(){

  loadingDialog();

  $.ajax({
    url: 'index.php?cmd=logout',
    success: function(data){
      window.location.reload();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });
}




/****************************
 Get Company Details
 ****************************/
function getCompany(){

  loadingDialog();

  $.ajax({
    url: 'index.php?cmd=getCompany',
    success: function(data){
         loadingDialog(); 
      $('.col3').html(data);
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}

/*************************
  Setting View 
 *************************/
function getSetting(){
    loadingDialog();
   $.ajax({
    url: 'index.php?cmd=getSetting',
    success: function(data){
     loadingDialog(); 
      $('.col3').html(data);
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });
}  
/*************************
  Web Host View 
 *************************/
function getWebHost(){
    loadingDialog();
   $.ajax({
    url: 'index.php?cmd=getWebHost',
    success: function(data){
     loadingDialog(); 
      $('.col3').html(data);
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });
} 
/*************************
  Contacts View 
 *************************/
function getContacts(){
loadingDialog();
   $.ajax({
    url: 'index.php?cmd=getContacts',
    success: function(data){
     loadingDialog(); 
      $('.col3').html(data);
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}

/*************************
  Members View 
 *************************/
function getMembers(){
loadingDialog();
   $.ajax({
    url: 'index.php?cmd=getMembers',
    success: function(data){
     loadingDialog(); 
      $('.col3').html(data);
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}

/*************************
  Add Contact Form
 *************************/
function addContact(){
loadingDialog();
   $.ajax({
    url: 'index.php?cmd=addContact',
    success: function(data){
     loadingDialog(); 
      $('.col3').html(data);
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}

/*************************
  Add User From
 *************************/
function addUser(){
loadingDialog();
   $.ajax({
    url: 'index.php?cmd=addUser',
    success: function(data){
     loadingDialog(); 
      $('.col3').html(data);
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}


/*************************
  Add License Form
 *************************/
function addLicense(){
loadingDialog();
   $.ajax({
    url: 'index.php?cmd=addLicense',
    success: function(data){
     loadingDialog(); 
      $('.col3').html(data);
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}


/*************************
  Get Servers
 *************************/
function getServers(){
loadingDialog();
   $.ajax({
    url: 'index.php?cmd=getServers',
    success: function(data){
     loadingDialog(); 
      $('.col3').html(data);
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}

/*************************
  Get Webhosts
 *************************/
function getWebhosts(){

  loadingDialog();

  $.ajax({
    url: 'index.php?cmd=getWebhosts',
    success: function(data){
      $('.col3').html(data);
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}

/*************************
  Get Domains
 *************************/
function getDomains(){

  loadingDialog();

  $.ajax({
    url: 'index.php?cmd=getDomains',
    success: function(data){
      $('.col3').html(data);
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}


/*************************
  Get Server bandwidth
 *************************/
function getServerBandwidth(id) 
{
   loadingDialog();

  $.ajax({
    url: 'index.php?cmd=getServerBandwidth&id='+id,
    success: function(data){
      var bandwidth =JSON.parse(data);
     var inData =[];
     var outData =[];
     var timeData = [];
    var i;
     for (i=0;i<bandwidth.length;i++) {
        inData.push(parseFloat(bandwidth[i].in));
        outData.push(parseFloat(bandwidth[i].out));
        var curDate = new Date(bandwidth[i].timestamp_start*1000);
        var year = curDate.getFullYear();
        var month = curDate.getMonth()+1;
        timeData.push(month+"-"+year);
     }
      var chart = new Highcharts.Chart({
		chart: {
		    renderTo: 'BandWidth',
		    type: 'column',
		},
        xAxis: {
          categories: timeData
        },
		    title: {
			    text: ''
		    },
        yAxis: {
          title: {
            text: ''
          }
        },
        credits: {
          enabled: false
        },
		    series: [{
                name: 'In',
                data: inData

            }, {
                name: 'Out',
                data: outData

            }]
	    });
    
     
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
      $('#BandWidth').html("NO DATA");
    }
  });
}


/*************************
  Get Server FTP
 *************************/
function getServerFTP(id) 
{
   loadingDialog();

  $.ajax({
    url: 'index.php?cmd=getServerFTP&id='+id,
    success: function(data){
      var ftp =JSON.parse(data);
      $('#ftpHost').html(ftp.account_hostname);
      $('#ftpUser').html(ftp.account_loginname);
      $('#ftpPass').html(ftp.account_password);
     if(ftp.add_account==false) {
        $('#saveServerFTP').val('Save');
      }
      else {
        $('#saveServerFTP').val('Add FTP');
      }
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
      $('#ftp').html("NO DATA");
    }
  });
}

/*************************
  Save Server FTP
 *************************/
function saveServerFTP() 
{
  loadingDialog();
  id= $('#selectedServer').val();
  password= $('#ftpNewPassword').val();
  $.ajax({
    url: 'index.php?cmd=saveServerFTP&id='+id+'&password='+password,
    success: function(data){
      var ftp =JSON.parse(data);
      $('#ftpHost').html(ftp.account_hostname);
      $('#ftpUser').html(ftp.account_loginname);
      $('#ftpPass').html(ftp.account_password);
      if(ftp.add_account==false) {
        $('#saveServerFTP').val('Save');
      }
      else {
        $('#saveServerFTP').val('Add FTP');
      }
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
      $('#ftp').html("NO DATA");
    }
  });
}

/*************************
  Get Server Reboot
 *************************/
function getServerReboot(id) 
{
   loadingDialog();

  $.ajax({
    url: 'index.php?cmd=getServerReboot&id='+id,
    success: function(data){
      $('#ServerReboot').val("Reboot");
      $("#confirmMessage").css({"display":"none"});

      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });
}

/*************************
  Get Products
 *************************/
function getProducts(){

  loadingDialog();

  $.ajax({
    url: 'index.php?cmd=getProducts',
    success: function(data){
      $('.col3').html(data);
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}

/*************************
  Get Open Cases
 *************************/
function getOpenCases(){

  loadingDialog();

  $.ajax({
    url: 'index.php?cmd=getOpenCases',
    success: function(data){
      $('.col3').html(data);
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}

/*************************
  Get Invoices
 *************************/
function getInvoices(){

  loadingDialog();

  $.ajax({
    url: 'index.php?cmd=getInvoices',
    success: function(data){
      $('.col3').html(data);
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}

/*************************
  Get Dcouments
 *************************/
function getDocuments(type){
  offset=0;
  loadingDialog();

  $.ajax({
    url: 'index.php?cmd=getDocuments&type='+type+'&offset='+offset,
    success: function(data){
      $('.col3').html(data);
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });
}

function moreDocument(offset){ 

 var decuType = $('#dectCategory').text();
  loadingDialog();
    $.ajax({
      url: 'index.php?cmd=getDocuments&type='+decuType+'&offset='+offset,
      success: function(data){
        $('#moreDoc'+offset).html(data);
        closeDialog();
      },
      error: function(errors){
        closeDialog();
        alert(INTERNAL_ERROR);
      }
    });       
 }
 
/*************************************************
  Find Articles
**************************************************/
function findArticles() {
     var find_articles =  $('#search_articles').val();
     var offset=0;

     if (find_articles !== "")
      {
          $.ajax({
           url: 'index.php?cmd=findArticles&find_articles='+find_articles+'&offset='+offset,
           success: function(data){
              $('.col3').html(data);
           },
           error: function(errors){
           modalText(INTERNAL_ERROR);
           }         
              });
      $(".finedMoreDoc2").fadeIn();
      $("moreDoc2").fadeOut();            
      }

}

 
function finedMoreDocument(offset){     
 var find_articles =  $('#search_articles').val();
   
  loadingDialog();
    $.ajax({
      url: 'index.php?cmd=findArticles&find_articles='+find_articles+'&offset='+offset,
      success: function(data){
        $('#moreDoc'+offset).html(data);
        closeDialog();
      },
      error: function(errors){
        closeDialog();
        alert(INTERNAL_ERROR);
      }
    });       
 } 


/*************************
  Get Document BY ID
 *************************/
function getDocument(id){
  loadingDialog();

  $.ajax({
    url: 'index.php?cmd=getDocument&id='+id,
    success: function(data){
       $('.col3').html(data);
       closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}

function getInvoiceDetails(id){

  loadingDialog();

  $.ajax({
    url: 'index.php?cmd=getInvoiceDetails&id='+id,
    success: function(data){
      $('#InvoiceDetails').html(data);
      //alert(data);
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}

function getInvoicePayments(id){

  loadingDialog();

  $.ajax({
    url: 'index.php?cmd=getInvoicePayments&id='+id,
    success: function(data){
      $('#InvoicePayments').html(data);
      //alert(data);
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}
























function getRedirectsInfo(){

  loadingDialog();

  $.ajax({
    url: 'index.php?cmd=getredirectsinfo',
    success: function(data){
      $('#main').html(data);
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}


function getDashboard(obj){
    
    loadingDialog();
   
  $.ajax({
    url: 'index.php?cmd=getdashboard',
    success: function(data){
      $('.col3').html(data);
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}



function openRequestServer(){
     loadingDialog();

  $.ajax({
    url: 'index.php?cmd=openRequestServer',
    success: function(data){
   
      $('#main').html(data);
        closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}

function openRequestProduct(){
     loadingDialog();

  $.ajax({
    url: 'index.php?cmd=openRequestProduct',
    success: function(data){
   
      $('#main').html(data);
        closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}

function openRequestDomain(){
     loadingDialog();
      $.ajax({
    url: 'index.php?cmd=openRequestDomain',
    success: function(data){
   
      $('#main').html(data);
        closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });
}

function openRequestHost(){
     loadingDialog();
     $.ajax({
    url: 'index.php?cmd=openRequestHost',
    success: function(data){
   
      $('#main').html(data);
        closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });
}

function openTicket(){
    loadingDialog();
     $.ajax({
    url: 'index.php?cmd=openTicket',
    success: function(data){
   
      $('#main').html(data);
        closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });
  }

function getSupportInfo(){

  loadingDialog();

  $.ajax({
    url: 'index.php?cmd=getsupportinfo',
    success: function(data){
      $('#main').html(data);
      $('#tickets-list tbody tr').click(function(){
        getTicketDetails($(this).attr('id'));
      });
      closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}

//function getInvoiceDetails(id, title, pay){
//
//  var buttons = new Array();
//  buttons.push({ text: "Close",
//                 click: function(){$(this).dialog("close");}
//               });
//
//  if(pay != null){
//    buttons.push({ text: "Pay",
//                   click: function(){modalPaymentForm()}
//                 });
//  }
//
//
//  loadingDialog();
//
//  $.ajax({
//    url: 'index.php?cmd=getinvoicedetails&id='+id,
//    success: function(data){
//      $('#invoice-details').html(data);
//      closeDialog();
//      $('#invoice-details').dialog({
//        modal: true,
//        title: title,
//        width: 650,
//        buttons: buttons
//      })
//    },
//    error: function(errors){
//      closeDialog();
//      alert(INTERNAL_ERROR);
//    }
//  });
//
//  return false;
//
//}

function submitServerForm(){
  if($('#server-type').val() == ''){
    $('#server-type').css({'background-color':'#E88F8F'});
    return false;
  }
  else{
    var type = $('#server-type').val();
    closeDialog();
    loadingDialog();
    $.ajax({
      url: 'index.php?cmd=requestserver&type='+type,
      success: function(data){
        closeDialog();
        modalText(data);
      },
      error: function(errors){
        closeDialog();
        alert(INTERNAL_ERROR);
      }
    });
  }

}

function submitHostForm(){

  if($('#host-plan').val() == ''){
    $('#host-plan').css({'background-color':'#E88F8F'});
    return false;
  }
  else{
    var plan = $('#host-plan').val();
    closeDialog();
    loadingDialog();
    $.ajax({
      url: 'index.php?cmd=requesthost&plan='+plan,
      success: function(data){
        closeDialog();
        modalText(data);
      },
      error: function(errors){
        closeDialog();
        alert(INTERNAL_ERROR);
      }
    });
  }
}

function submitProductForm(){

  if($('#product-name').val() == ''){
    $('#product-name').css({'background-color':'#E88F8F'});
    return false;
  }
  else{
    var name = $('#product-name').val();
    closeDialog();
    loadingDialog();
    $.ajax({
      url: 'index.php?cmd=requestproduct&name='+name,
      success: function(data){
        closeDialog();
        modalText(data);
      },
      error: function(errors){
        closeDialog();
        alert(INTERNAL_ERROR);
      }
    });
  }

}

function checkDomainAvilability(){

  var domain = $('#domain-name').val();
  var ext    = $('#domain-ext').val();

  if(domain == ''){
    $('#domain-name').css({'background-color':'#E88F8F'});
    return false;
  }
  else $('#domain-name').removeAttr('style');

  if(ext == ''){
    $('#domain-ext').css({'background-color':'#E88F8F'});
    return false;
  }
  else $('#domain-ext').removeAttr('style');

  $.ajax({
    url: 'index.php?cmd=checkdomain&domain='+domain+'&ext='+ext,
    success: function(data){
      if(data == '0'){
        $('#domain-check-result p').removeClass('domain-state-a').removeClass('domain-state-u').removeClass('domain-state-c').addClass('domain-state-u');
        $('#domain-check-result p').text('Domain is not available');
      }
      else if(data == '1'){
        $('#domain-check-result p').removeClass('domain-state-a').removeClass('domain-state-u').removeClass('domain-state-c').addClass('domain-state-a');
        $('#domain-check-result p').html('Domain is available, <a href="#" class="btn btn-mini btn-success">Confirm Request</a>');
        $('#domain-check-result p a').unbind('click');
        $('#domain-check-result p a').click(function(){
          submitDomainForm();
        });
      }
      else if(data == '2'){
        $('#domain-check-result p').removeClass('domain-state-a').removeClass('domain-state-u').removeClass('domain-state-c').addClass('domain-state-u');
        $('#domain-check-result p').text('Invalid Domain Name');
      }
      else{
        $('#domain-check-result p').removeClass('domain-state-a').removeClass('domain-state-u').removeClass('domain-state-c').addClass('domain-state-u');
        $('#domain-check-result p').text(INTERNAL_ERROR);
      }
    },
    error: function(errors){
      alert(INTERNAL_ERROR);
    },
    beforeSend: function(){
      $('#domain-check-result p').removeClass('domain-state-a').removeClass('domain-state-u').removeClass('domain-state-c').addClass('domain-state-c');
      $('#domain-check-result p').text('Checking for availability, Please wait...');
    }
  });

}

function submitDomainForm(){

  var domain = $('#domain-name').val();
  var ext    = $('#domain-ext').val();

  if(domain == ''){
    $('#domain-name').css({'background-color':'#E88F8F'});
    return false;
  }
  else $('#domain-name').removeAttr('style');

  if(ext == ''){
    $('#domain-ext').css({'background-color':'#E88F8F'});
    return false;
  }
  else $('#domain-ext').removeAttr('style');

  closeDialog();
  loadingDialog();

  $.ajax({
    url: 'index.php?cmd=requestdomain&name=www.'+domain+'.'+ext,
    success: function(data){
      closeDialog();
      modalText(data);
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });
}



function getTicketDetails(id){

  loadingDialog();

  $.ajax({
    url: 'index.php?cmd=getticketdetails&id='+id,
    success: function(data){
      closeDialog();
      $('#ticket-details').html(data);
      $('#add-comment').click(function(){
        addNewComment(id);
      });
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });
}

function addNewComment(id){

  var body = $('#new-comment').val();

  if(body == ''){
    $('#new-comment').css({'background-color':'#E88F8F'});
    return false;
  }

  $.ajax({
    url: 'index.php?cmd=addnewcomment&id='+id,
    type: 'POST',
    data: ({body : body}),
    success: function(data){
      closeDialog();
      getTicketDetails(id);
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });
}

function submitNewTicket(){

  if($('#ticket-title').val() == ''){
    $('#ticket-title').css({'background-color':'#E88F8F'});
    return false;
  }

  if($('#ticket-body').val() == ''){
    $('#ticket-body').css({'background-color':'#E88F8F'});
    return false;
  }

  var title = $('#ticket-title').val();
  var body  = $('#ticket-body').val();

  //closeDialog();
  //loadingDialog();

  $.ajax({
    url: 'index.php?cmd=createnewticket',
    type: 'POST',
    data: ({title : title, body : body}),
    success: function(data){
      closeDialog();
      getSupportInfo();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
  });

}

function modalPaymentForm(){

  var iNumber = $('#invoice-topay-id').val();
  var iAmount = $('#invoice-topay-remaining').val();


  $('#payment-form #amount').val(iAmount);
  $('#payment-form #invoice-number').val(iNumber);

  var buttons = new Array();
  buttons.push({ text: "Close",
                 click: function(){$(this).dialog("close");}
               });

    buttons.push({ text: "Proceed",
                   click: function(){$('#payment-form form').submit()}
                 });

  closeDialog();

  $('#payment-form').dialog({
    modal: true,
    resizable: false,
    title: 'Pay Invoice '+iNumber,
    width: 335,
    buttons: buttons
  });
}





function displayArticle(obj){
        var id = $(obj).attr('rel');
 
    loadingDialog();
    $.ajax({
        url: 'index.php?cmd=displayArticle&id='+id,
        success: function(data){
            $('#main').html(data);
            closeDialog();
    },
    error: function(errors){
      closeDialog();
      alert(INTERNAL_ERROR);
    }
    });        
    }
    function readUrl(selectr){
        var id = $(selectr).attr('rel');
        var $idown;
        url= 'http://localhost/mycp/iframpdf.php?id='+id;
         if ($idown) {
                $idown.attr('src',url);
              } else {
                $idown = $('<iframe>', { id:'idown', src:url }).hide().appendTo('#backlist');
              }
        setTimeout(function(){$('#backlist').html(''); }, 5000);
    }


