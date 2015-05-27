<?php 
if(!defined('MQFLAG')) die('Direct access is not allowed');

$fwork   = new Framework();
$session = new Session();
$smarty  = new Smarty(); 

$cmd                  = $fwork->requestVar('cmd');

$smarty->compile_dir = 'html'.DS.'compiled';
$smarty->cache_dir    = 'html'.DS.'cache';
$smarty->template_dir = 'html'.DS.'files';

$smarty->assign('URL', URL);
$smarty->assign('menu', $menu);


if(!empty($cmd)){
if (!$session->read(SESS_ACTIVE_CLIENT_ID)){

header('location:index.php');//$smarty->display('login.tpl');
}

/********************************
    Check Login
 ********************************/
  if($cmd == 'checklogin'){
    $login    = $fwork->requestVar('login');
    $password = $fwork->requestVar('password');
    $result   = $fwork->checkLogin($login, $password);
    
    if(!empty($result)) {
        
        $account  = $fwork->getAccountDetails($result['account_id']);
        $result['account_name'] = $account['name'];
        $session->write(SESS_ACTIVE_CLIENT_ID, $result);
        echo 1;
        exit();
    }
    echo 0;
    exit();
 
  }
  
 /********************************
    Logout
 ********************************/
  elseif($cmd == 'logout'){
    $session->delete(SESS_ACTIVE_CLIENT_ID);
              header('Location: index.php');
  }
  
 /********************************
    Desplay Settings
 ********************************/
  elseif($cmd == 'setting'){
    
    $result = $session->read(SESS_ACTIVE_CLIENT_ID);
    $contact = $fwork->getContactDetails($result['contact_id']);
    $member  = $fwork->getMemberDetails($result['member_id']);
    $level  = $fwork->getFields("mqp_members","level");
    $smarty->assign('contact',$contact);
    $smarty->assign('member',$member);
    $smarty->assign('level',$level);
    $smarty->assign('active_sub_menu','setting');
    $smarty->display('settings.tpl');
    exit(); 
  }
  
/********************************
    Contacts List
 ********************************/
   elseif($cmd == 'contacts'){
    $smarty->assign('sub', 'account');
    $result = $session->read(SESS_ACTIVE_CLIENT_ID);
    $contacts =  $fwork->getContacts($result['account_id']);
    $smarty->assign('contact_id',$result['contact_id']);
    $smarty->assign('contacts', $contacts); 
    $smarty->assign('active_sub_menu','contacts');
    $smarty->display('contacts.tpl');
    exit();
  }
  elseif($cmd == 'delete_contact'){
$contact_id   = $fwork->requestVar('contact_id');  
echo $fwork->deleteContact($contact_id);
      exit();
  }//delete_contact
  /********************************
    Add Contact Form
 ********************************/
  elseif($cmd == 'add_contact'){
    $smarty->assign('sub', 'account');
    $smarty->assign('active_sub_menu','add_contact');
    $smarty->display('add_contact.tpl');
    exit();
  } 
  
  /********************************
    Add Contact Form
 ********************************/
  elseif($cmd == 'add_user'){
    $smarty->assign('sub', 'account');
    $result = $session->read(SESS_ACTIVE_CLIENT_ID);
    $contacts =  $fwork->getContacts($result['account_id']);
    $contacts2= array();
    foreach($contacts as $contact) {
        if($contact['mqp_members_contacts_name']=='') {
            $contacts2[]=$contact;
        }
    }
    $smarty->assign('contacts', $contacts2); 
    $smarty->assign('sub', 'account');
    $smarty->assign('active_sub_menu','add_user');
    $smarty->display('add_user.tpl');
    exit();
  } 
  
   /********************************
    Add Contact List
 ********************************/
  elseif($cmd == 'add_license'){
    $smarty->assign('sub', 'account');
    $type  = $fwork->getFields("mqp_license","type");
    $smarty->assign('type',$type);
    $smarty->assign('active_sub_menu','add_license');
    $smarty->display('add_license.tpl');
    exit();
  } 
  
  
  /********************************
    Save Contact
 ********************************/
  elseif($cmd =='saveContact') {
    $contact = array();

    $contact['first_name']    = $fwork->requestVar('first_name');
    $contact['last_name']    = $fwork->requestVar('last_name');
    $contact['salutation']    = $fwork->requestVar('salutation');
    $contact['title']    = $fwork->requestVar('position');
    $contact['email1']    = $fwork->requestVar('email');
    $contact['phone_work']    = $fwork->requestVar('office_phone');
    $contact['phone_mobile']    = $fwork->requestVar('mobile_phone');
    $contact['primary_address_city']    = $fwork->requestVar('city');
    $contact['primary_address_country']    = $fwork->requestVar('country');
    $contact['id']    = $fwork->requestVar('id');
    $result = $fwork->checkExistingEmail($contact['email1']);   

    if($contact['id']=='0') {
        $result2 = $session->read(SESS_ACTIVE_CLIENT_ID);
        $contact['account_id'] =$result2['account_id'];
        
        if($result){
            echo "Email already been used";
            exit();
        }        
    }
    else {
        if($result && $result['id']!=$contact['id']){
            echo "Email already been used";
            exit();
        }
    }
    $result = $fwork->saveContact($contact);
    if($result->number==0) 
      echo "Success";
    else
      echo "Error";
    
    
    exit();
  }
  
  /********************************
    Save Member
 ********************************/
   elseif($cmd =='saveMember') {
    $member = array();

    $member['id']    = $fwork->requestVar('id');
    $result = $session->read(SESS_ACTIVE_CLIENT_ID);
    
    if($member['id']!=$result['member_id']) {
        echo "Error";
        exit();
    }
    $mem = $fwork->getMemberDetails($member['id']);
    $password    = $fwork->requestVar('password');
    if($mem['password']!=$password) {
        echo "Wrong Password";
        exit();
    }
    
    $select    = $fwork->requestVar('select');
    if($select==2) {
        $newpassword    = $fwork->requestVar('newpassword');
        $confirmpassword    = $fwork->requestVar('confirmpassword');
        if($newpassword!=$confirmpassword) {
            echo "Passwords not Matched";
            exit();
        }
        $member['password']=$newpassword;
    }
    else {
        $member['name']    = $fwork->requestVar('username');    
        $name = $fwork->checkDuplicateUsername($member['name']);
        if($name) {
            echo "Username Exist";
            exit();
        }
        
    }
    
    $result = $fwork->saveMember($member);
    if($result->number==0) 
      echo "Success";
    else
      echo "Error";
    exit();
  }

  /********************************
    Save License
 ********************************/
elseif($cmd =='saveLicense') {
    $license = array();
    $newRecord=false;

    $license['name']    = $fwork->requestVar('license_name');
    $license['type']    = $fwork->requestVar('license_type');
    $license['id']    = $fwork->requestVar('license_id');

    if($license['id']=='0') {
        $result2 = $session->read(SESS_ACTIVE_CLIENT_ID);
        $license['account_id'] =$result2['account_id'];
        $newRecord=true;
    }
    
    $result = $fwork->saveLicense($license,$newRecord);
  
    /*________________________old responed*
    if($result->number==0) 
    /*_____________________END___old responed*/
     if($result == true) 
      echo "Success";
    else
      echo "Error";

    exit();
  }
  /********************************
    Get Users List
 ********************************/  
  elseif($cmd == 'members'){
    $smarty->assign('sub', 'account');
    $result = $session->read(SESS_ACTIVE_CLIENT_ID);
    $members =  $fwork->getMembers($result['account_id']);
    $level  = $fwork->getFields("mqp_members","level");
    $smarty->assign('level',$level);
    $smarty->assign('members', $members);
    $smarty->assign('active_sub_menu','members');
    $smarty->display('members.tpl');
    exit();
  }

  /********************************
    get Company
 ********************************/
  elseif($cmd == 'company'){
    $smarty->assign('sub', 'account');
    $result = $session->read(SESS_ACTIVE_CLIENT_ID);
    $info = $fwork->getAccountDetails($result['account_id']);
    $licenses =  $fwork->getLicenses($result['account_id']);
    $type  = $fwork->getFields("mqp_license","type");
    $smarty->assign('info', $info);
    $smarty->assign('licenses', $licenses);
    $smarty->assign('type',$type);
    $smarty->assign('active_sub_menu','company');
    $smarty->display('company.tpl');
    exit();
  }
  
  /********************************
    Forget password
 ********************************/
  elseif($cmd == 'forget-password'){
      
    $smarty->assign('active_sub_menu','forget_password');

    $smarty->display('forget_password.tpl');
    exit();
  }
  
  /********************************
    Send Forget password
 ********************************/
  elseif($cmd == 'send-forget-password'){
   $email = $fwork->requestVar('email');
    
    //validate email in server side 
   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 1;
    exit();
   }
   
   // checking the email if available
   $result = $fwork->checkExistingEmail($email);
   if(!$result){
    echo 2;
    exit();
   }
   
   // send forget email 
   $result_2 = $fwork->sendForgetPassword($result);
      
    if($result_2){
      echo 0;
      exit();
    }
    else{
      echo 3;
      exit();
    }
    exit();
  }
  
  /**************************************
  Get Servers List
  ************************************/
  elseif($cmd == 'servers'){
    $smarty->assign('sub', 'hosting');
    $result = $session->read(SESS_ACTIVE_CLIENT_ID);
    $servers= $fwork->getServers($result['account_id']);    
    $servertypes  = $fwork->getFields("mqp_servers","server_type");
    $smarty->assign('servers',$servers);
    $smarty->assign('servertypes',$servertypes);
    
    $smarty->assign('active_sub_menu','servers');
    $smarty->display('servers.tpl');
    exit();
  }
  
  /**************************************
   Get Contact Details
  ************************************/
  elseif($cmd=='getContactDetails') 
  {
    $id = $fwork->requestVar('id');
    echo json_encode($fwork->getContactDetails($id));
    exit();
  }
  
  /**************************************
  Get License Details
  ************************************/
  elseif($cmd=='getLicenseDetails') 
  {
    $id = $fwork->requestVar('id');
    echo json_encode($fwork->getLicenseDetails($id));
    exit();
  }
  
  /**************************************
  Get Member Details
  ************************************/
  elseif($cmd=='getMemberDetails') 
  {
    $id = $fwork->requestVar('id');
    unset($member['password']);
    echo json_encode($fwork->getMemberDetails($id));
    exit();
  }
  /**************************************
    Get Servers Details
  ************************************/
  elseif($cmd=='getServerDetails') 
  {
    $id = $fwork->requestVar('id');
    $server =$fwork->getServerDetails($id);
    $result=$server['components'];
    echo html_entity_decode($result);
    exit();
  }
  
  
  /**************************************
    Get Web Hosts List
  ************************************/
   elseif($cmd == 'webhosts'){
    $smarty->assign('sub', 'hosting');
    $result = $session->read(SESS_ACTIVE_CLIENT_ID);
    $webhosts= $fwork->getWebHosts($result['account_id']);    
    $plans  = $fwork->getFields("mqp_webhost","host_plan");
    $smarty->assign('webhosts',$webhosts);
    $smarty->assign('plans',$plans);
    $smarty->assign('active_sub_menu','webhosts');
   $smarty->display('webhosts.tpl');
   exit();
  }
  
 /**************************************
    Get Domain List
  ************************************/
  elseif($cmd == 'domains'){
    $smarty->assign('sub', 'hosting');    
    $result = $session->read(SESS_ACTIVE_CLIENT_ID);
    $domains= $fwork->getDomains($result['account_id']);    
    $registerars  = $fwork->getFields("mqp_domains","registerar");
    $smarty->assign('domains',$domains);
    $smarty->assign('registerars',$registerars);
    $smarty->assign('active_sub_menu','domains');
    $smarty->display('domains.tpl');
    exit();
  }

 /**************************************
    Save New/Exisiting User
  ************************************/  
  elseif($cmd ==  'saveNewExistingMember') {
    $member = array();
    
    $result = $session->read(SESS_ACTIVE_CLIENT_ID);
    $mem = $fwork->getMemberDetails($result['member_id']);
    if($mem['level']!='admin') {
        echo "User Dont have permission to add/modify user";
        exit();
    }
    $member['name']    = $fwork->requestVar('username');
    $member['password']    = $fwork->requestVar('password');
    $member['level']    = $fwork->requestVar('level');
    
    if($member['level']!='technical' && $member['level']!='billing') {
        echo "Error Level Type";
        exit();
    }

    $member['id']    = $fwork->requestVar('id');
    if($member['id']!=0) {
        $mem2 = $fwork->getMemberDetails($member['id']);
        if($mem2) {
            if($mem2['name']!=$member['name']) {
               $name = $fwork->checkDuplicateUsername($member['name']);
               if($name) {
                 echo "Duplicate Username";
                 exit();
               }
            }
            $result = $fwork->saveMember($member);
            if($result->number==0) {
               echo "Success";
               exit();
            }
            else {
               echo "Failed to update User";
               exit();
            }
        }
        else {
          echo "Error User1";
          exit();
        }
     }
     else {
        //Member ID = 0 ,, we should check for Contact to assign one to it 
        $name = $fwork->checkDuplicateUsername($member['name']);
        if($name) {
           echo "Duplicate Username";
           exit();
        }
        $member['account_id'] = $result['account_id'];
        $member['contact_id'] = $fwork->requestVar('contact');
        if($member['contact_id']!='0') {
            $result = $fwork->checkDuplicateMemberContacts($member['contact_id']);
            if($result) {
                echo "Contact Already have Member assigned to it";
                exit();
            }
            else {
                $res = $fwork->getContactDetails($member['contact_id']);
                if(!$res) {
                    echo "Error";
                    exit();
                }
                $result = $fwork->saveNewMember($member);
                if($result->number==0) {
                    echo "Success";
                    exit();
                }
                else {
                    echo "Failed to add new User";
                    exit();
                }

            }
        }
        else {
            $contact = array();

            $contact['first_name']    = $fwork->requestVar('first_name');
            $contact['last_name']    = $fwork->requestVar('last_name');
            $contact['salutation']    = $fwork->requestVar('salutation');
            $contact['title']    = $fwork->requestVar('position');
            $contact['email1']    = $fwork->requestVar('email');
            $contact['phone_work']    = $fwork->requestVar('office_phone');
            $contact['phone_mobile']    = $fwork->requestVar('mobile_phone');
            $contact['primary_address_city']    = $fwork->requestVar('city');
            $contact['primary_address_country']    = $fwork->requestVar('country');
            $contact['id']    = '0';
            $result = $fwork->checkExistingEmail($contact['email1']);
            //var_dump($result);   
            if($result){
                echo "Email already been used";
                exit();
            }
            $contact['account_id'] =$member['account_id'];
            $result = $fwork->saveContact($contact);
            if($result) {
                $member['contact_id']=$result->id;
                $result = $fwork->saveNewMember($member);
                if($result->number==0) {
                    echo "Success";
                    exit();
                }
                else {
                    echo "Failed to add new User";
                    exit();
                }
            }
            else {
                echo "Problem adding Contact";
                exit();
            }
            
        }
       
    }
  
  }
  
  
  elseif($cmd == 'getServerBandwidth')
  {
    $id = $fwork->requestVar('id');
    $result = $fwork->getServerBandwidth($id);
    echo json_encode($result);
    exit();
    
  }
  
   elseif($cmd == 'getServerFTP')
  {
    $id = $fwork->requestVar('id');
    $result = $fwork->getServerFTP($id);
    echo json_encode($result);
    exit();
    
  }
  
   elseif($cmd == 'saveServerFTP')
  {
    $id = $fwork->requestVar('id');
    $password = $fwork->requestVar('password');
    $result = $fwork->saveServerFTP($id,$password);
    echo json_encode($result);
    exit();
    
  }
  
   elseif($cmd == 'getServerReboot')
  {
    $id = $fwork->requestVar('id');
    $result = $fwork->getServerReboot($id);
    echo json_encode($result);
    exit();
    
  }
  
  /********************************
    Products List
 ********************************/
   elseif($cmd == 'products'){  
       
    $smarty->assign('sub', 'products');
    $result = $session->read(SESS_ACTIVE_CLIENT_ID);
    $products =  $fwork->getProducts($result['account_id']);
    $productType  = $fwork->getFields("mqp_products","type");
   
    
    $smarty->assign('products', $products);
    $smarty->assign('productType', $productType);  
    $smarty->assign('active_sub_menu','products');
    $smarty->display('products.tpl');
    exit();
  }
  
  /********************************
    Open Cases List
 ********************************/
   elseif($cmd == 'open-cases'){
    $smarty->assign('sub', 'support');
    $result = $session->read(SESS_ACTIVE_CLIENT_ID);
    $cases =  $fwork->getOpenCases($result['account_id']);
    $status  = $fwork->getFields("Cases","status");
    $smarty->assign('cases', $cases);
    $smarty->assign('status', $status);  
    $smarty->assign('active_sub_menu','open-cases');
    $smarty->display('open_cases.tpl');
    exit();
  }
  
    /********************************
    Open Cases List
 ********************************/
   elseif($cmd == 'invoices'){
    $smarty->assign('sub', 'account');
    $result = $session->read(SESS_ACTIVE_CLIENT_ID);
    $invoices =  $fwork->getInvoices($result['account_id']);
    $smarty->assign('invoices', $invoices);  
  
    $smarty->assign('active_sub_menu','invoices');
    $smarty->display('invoices.tpl');
    exit();
  }
  
  

 
 /********************************
    Documents List
 ********************************/
   elseif($cmd == 'getDocumentsAjax'){
    $offset = $fwork->requestVar('offset');
    $type = $fwork->requestVar('type');  
    $smarty->assign('sub', 'documents');
    $documents =  $fwork->getDocuments($type,$offset);
    $smarty->assign('documents', $documents);
    $smarty->assign('type', $type);
    $smarty->assign('offset', $offset); 
    $smarty->assign('active_sub_menu','getDocuments');
    
    $smarty->display('documents_list.tpl');
    
    exit();
    
    
    
  }
  
   elseif($cmd == 'getDocumentBody'){
    $document_id = $fwork->requestVar('id');
    $smarty->assign('sub', 'documents');
    $document =  $fwork->getDocument($document_id);
    $smarty->assign('document', $document);
    $smarty->assign('active_sub_menu','getDocument');
    $smarty->display('document.tpl');
    exit();
  }   
 
 /********************************
      Articles
 ********************************/
  elseif($cmd == 'articles' || $cmd == 'manuals' || $cmd == 'faqs'){
   $offset = $fwork->requestVar('offset');
   $finedArt = $fwork->requestVar('find_articles');
   
   $smarty->assign('sub', 'documents');
   $documents =  $fwork->findArticles($cmd,$offset);
   $smarty->assign('finedArt', $finedArt);
   $smarty->assign('offset', $offset);
   $smarty->assign('documents', $documents);
    $smarty->assign('active_sub_menu',$cmd);
   if($offset==0)
        $smarty->display('documents.tpl');
   else
        $smarty->display('moreNews.tpl');
  exit();
  }
   
 /********************************
     Find Articles
 ********************************/
  elseif($cmd == 'news'){

   $smarty->assign('sub', 'documents');
    $smarty->assign('active_sub_menu','news');
        $smarty->display('news.tpl');
  exit();
  }
  
 
 elseif($cmd == 'getInvoiceDetails') {
    $invoice_id = $fwork->requestVar('id');
    $info = $fwork->getInvoiceDetails($invoice_id);
    $smarty->assign('info', $info);
    $smarty->assign('active_sub_menu','getInvoiceDetails');
    $smarty->display('invoice_details.tpl');
    exit();
 }
 
 elseif($cmd == 'getInvoicePayments') {
    $invoice_id = $fwork->requestVar('id');
    $payments= $fwork->getInvoicePayments($invoice_id);
    $smarty->assign('payments', $payments);
    $smarty->assign('active_sub_menu','getInvoicePayments');
    $smarty->display('invoice_payments.tpl');
    exit();
 }
 elseif($cmd == 'dashboard'){
    $documents =  $fwork->getDocuments('news',0);
    //var_dump("sdsda",$documents);
    $smarty->assign('news', $documents);
    $smarty->assign('active_sub_menu','dashboard');
    $smarty->display('dashboard.tpl');
    exit();
  }
  
  
  















  
  
  elseif($cmd == 'displayArticle'){
    $id = $fwork->requestVar('id');
    $result   = $fwork->getFullarticle($id);
  
    $smarty->assign('article', $result);
    $smarty->assign('active_sub_menu','displayArticle');
    $smarty->display('article.tpl');
    exit();
  }

  
  elseif($cmd == 'openRequestServer'){
    $smarty->assign('active_sub_menu','openRequestServer');
    $smarty->display('request_server.tpl');
    exit();
  }
  
  elseif($cmd == 'openRequestProduct'){
    $smarty->assign('products', $products);
    $smarty->assign('active_sub_menu','openRequestProduct');
    $smarty->display('request-product.tpl');
    exit();
  }
  
    elseif($cmd == 'openRequestDomain'){
    $smarty->assign('domains', $fwork->getLookupServers());
    $smarty->assign('active_sub_menu','openRequestDomain');
    $smarty->display('Request_Domain.tpl');
    exit();
  }
  
  elseif($cmd == 'openTicket'){
    $smarty->assign('domains', $fwork->getLookupServers());
    $smarty->assign('active_sub_menu','openTicket');
    $smarty->display('request_ticket.tpl');
    exit();
  }
  
    elseif($cmd == 'openRequestHost'){
    $smarty->assign('domains', $fwork->getLookupServers());
    $smarty->assign('active_sub_menu','openRequestHost');
    $smarty->display('request_host.tpl');
    exit();
  }

  
  elseif($cmd == 'getsupportinfo'){
    $tickets  = $fwork->getTicketsInfo($session->read(SESS_ACTIVE_CLIENT_ID));
    $smarty->assign('tickets', $tickets);
    $smarty->assign('active_sub_menu','getsupportinfo');
    $smarty->display('support.tpl');
    exit();
  }



 

  elseif($cmd == 'getredirectsinfo'){
    $info   = $fwork->getRedirectsInfo($session->read(SESS_ACTIVE_CLIENT_ID));
    $expire = array();

    foreach($info as $_info)
      $expire[] = $fwork->timeDiffrence(date("Y-m-d"), $_info['edate']);

    $smarty->assign('info', $info);
    $smarty->assign('expire', $expire);
    $smarty->assign('active_sub_menu','getredirectsinfo');
    $smarty->display('redirects.tpl');
    exit();
  }

  
  elseif($cmd == 'getinvoicesinfo'){
    $invoices = $fwork->getInvoicesInfo($session->read(SESS_ACTIVE_CLIENT_ID));
    $paid     = array();
    $unpaid   = array();

    if(count($invoices)){
      foreach($invoices as $invoice){
        if($invoice['details'][0]['remaining'] == 0){
          $paid[] = $invoice;
        }
        else{
          $unpaid[] = $invoice;
        }
      }
    }

    $smarty->assign('paid', $paid);
    $smarty->assign('unpaid', $unpaid);
    $smarty->assign('active_sub_menu','getinvoicesinfo');
    $smarty->display('invoices.tpl');
    exit();
  }

  /*elseif($cmd == 'getinvoicedetails'){
    $info = $fwork->getInvoiceDetails($fwork->requestVar('id'), $session->read(SESS_ACTIVE_CLIENT_ID));
    $smarty->assign('info', $info);
    $smarty->display('invoice_details.tpl');
    exit();
  }*/

  elseif($cmd == 'requestserver'){
    $result = $session->read(SESS_ACTIVE_CLIENT_ID);
    
    $body  = "<p><strong>Services:</strong> Servers</p>";
    $body .= "<p><strong>Type:</strong> ".$fwork->requestVar('type')."</p>";
    $body .= "<p><strong>Client:</strong> ".$result['account_name']."</p>";
    $body .= "<p><strong>Date:</strong> ".date('Y-m-d H:i:s')."</p>";
    $body .= "<p><strong>IP:</strong> ".$_SERVER["REMOTE_ADDR"]."</p>";

    if($fwork->sendEmail('Request Server', $result['account_name'], 'members@mqplanet.com', $body)){
      echo '<p class="alert alert-success"><strong>Request Sent Successfully</strong></p>';
    }
    else{
      echo '<p class="alert alert-danger"><strong>Error, Please Try again</strong></p>';
    }
    exit();
  }

  elseif($cmd == 'requesthost'){
    
    $result = $session->read(SESS_ACTIVE_CLIENT_ID);
    $body  = "<p><strong>Services:</strong> Hosting</p>";
    $body .= "<p><strong>Plan:</strong> ".$fwork->requestVar('plan')."</p>";
    $body .= "<p><strong>Client:</strong> ".$result['account_name']."</p>";
    $body .= "<p><strong>Date:</strong> ".date('Y-m-d H:i:s')."</p>";
    $body .= "<p><strong>IP:</strong> ".$_SERVER["REMOTE_ADDR"]."</p>";


    if($fwork->sendEmail('Request Host', $result['account_name'], 'members@mqplanet.com', $body)){
      echo '<p class="alert alert-success"><strong>Request Sent Successfully</strong></p>';
    }
    else{
      echo '<p class="alert alert-danger"><strong>Error, Please Try again</strong></p>';
    }
    exit();
  }

  elseif($cmd == 'requestproduct'){
    
    $result = $session->read(SESS_ACTIVE_CLIENT_ID);

    $body  = "<p><strong>Services:</strong> Products</p>";
    $body .= "<p><strong>Name:</strong> ".$fwork->requestVar('name')."</p>";
    $body .= "<p><strong>Client:</strong> ".$result['account_name']."</p>";
    $body .= "<p><strong>Date:</strong> ".date('Y-m-d H:i:s')."</p>";
    $body .= "<p><strong>IP:</strong> ".$_SERVER["REMOTE_ADDR"]."</p>";

    if($fwork->sendEmail('Request Product', $result['account_name'], 'members@mqplanet.com', $body)){
      echo '<p class="alert alert-success"><strong>Request Sent Successfully</strong></p>';
    }
    else{
      echo '<p class="alert alert-danger"><strong>Error, Please Try again</strong></p>';
    }
    exit();
  }

  elseif($cmd == 'checkdomain'){
    echo $fwork->domainLookup($fwork->requestVar('domain'), $fwork->requestVar('ext'));
    exit();
  }

  elseif($cmd == 'requestdomain'){
    $result = $session->read(SESS_ACTIVE_CLIENT_ID);

    $body  = "<p><strong>Services:</strong> Domains</p>";
    $body .= "<p><strong>Name:</strong> ".$fwork->requestVar('name')."</p>";
    $body .= "<p><strong>Client:</strong> ".$result['account_name']."</p>";
    $body .= "<p><strong>Date:</strong> ".date('Y-m-d H:i:s')."</p>";
    $body .= "<p><strong>IP:</strong> ".$_SERVER["REMOTE_ADDR"]."</p>";

    if($fwork->sendEmail('Request Domain', $result['account_name'], 'members@mqplanet.com', $body)){
      echo '<p class="alert alert-success"><strong>Request Sent Successfully</strong></p>';
    }
    else{
      echo '<p class="alert alert-danger"><strong>Error, Please Try again</strong></p>';
    }
    exit();
  }

  elseif($cmd == 'getdocument'){
    $doc   = $fwork->requestVar('doc');
    $title = $fwork->getDocumentTitle($doc);
    $src   = $_SERVER["DOCUMENT_ROOT"].DS.'planetcrm'.DS.'upload'.DS.$doc;
    $des   = DIR.DS.'tmp'.DS.$session->read(SESS_ACTIVE_CLIENT_ID).'-'.$title;
    copy($src, $des);
    echo $session->read(SESS_ACTIVE_CLIENT_ID).'-'.$title;
    exit();
  }

  elseif($cmd == 'getticketdetails'){
    $id      = $fwork->requestVar('id');
    $details = $fwork->getTicketDetails($id);
    $smarty->assign('details', $details);
    $smarty->display('ticket_details.tpl');
    exit();
  }

  elseif($cmd == 'addnewcomment'){
    $id   = $fwork->requestVar('id');
    $body = $fwork->requestVar('body');
    $fwork->addNewComment($id, $body);
    exit();
  }

  elseif($cmd == 'createnewticket'){
    $title = $fwork->requestVar('title');
    $body  = $fwork->requestVar('body');
    $fwork->addNewTicket($session->read(SESS_ACTIVE_CLIENT_ID), $title, $body);
    exit();
  } elseif ($cmd == 'sendrenewalemail') {
        $result = $session->read(SESS_ACTIVE_CLIENT_ID);
        $product_id = $fwork->requestVar('product_id');
        $body = 'Dear Mr.galya <br> please I want to renew the product id ' . $product_id;
        if ($fwork->sendEmail('Order renew', $result['account_name'], 'members@mqplanet.com', $body)) {
            echo 'success';
        }//seuccess send email
        else {
            echo 'error';
        }//error
        exit;
    }//sendrenewalemail
    
  elseif($cmd == 'getproductsperiod'){
     
     $product_id  = $fwork->requestVar('product_id'); 
    $result = $fwork->getProductsPeriod($product_id);
    
    
    $smarty->assign('result',$result);
    $smarty->display('product_period.tpl');
    
    exit();
  }
  elseif($cmd == 'getperiodinvoice'){
     
     $product_id  = $fwork->requestVar('product_id'); 
    $result = $fwork->getPeriodInvoice($product_id);
    
    
    $smarty->assign('result',$result);
    $smarty->display('product_period.tpl');
    
    exit();
  }
  elseif($cmd == 'getLastContractDate'){
     
     $product_id  = $fwork->requestVar('product_id'); 
     
    echo json_encode($fwork->getLastContractDate($product_id));
    
    
    
    exit();
  }
}
?>