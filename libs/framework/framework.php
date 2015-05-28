<?php

class Framework {

    function requestVar($var, $clear = true, $many = false) {

        $filter = new InputFilter();
        $result = array();

        if (!$many) {
            $result = '';
            if (isset($_REQUEST[$var])) {
                $val = $_REQUEST[$var];
                if ($clear)
                    $val = $filter->process($val);
                $result = $val;
            }
        }
        else {
            if (isset($_REQUEST[$var])) {
                $vars_count = count($_REQUEST[$var]);
                for ($counter = 0; $counter < $vars_count; $counter++) {
                    $val = $_REQUEST[$var][$counter];
                    if ($clear)
                        $val = $filter->process($val);
                    $result[] = $val;
                }
            }
        }

        return $result;
    }

    public function timeDiffrence($start, $end) {

        $str = '';
        $end = strtotime($end);
        $start = strtotime($start);
        $tleft = $end - $start;

        if ($tleft <= 0) {
            $str = "Expired";
        } else {
            $years = floor($tleft / (365 * 60 * 60 * 24));
            $months = floor(($tleft - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
            $days = floor(($tleft - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
            if ($years)
                $str = "$years years, ";
            if ($months)
                $str .= "$months months, ";
            $str .= "$days days Left";
        }

        return $str;
    }

    public function getAccountDetails($id) {
        if (empty($id))
            return;
        $result = array();
        $sugar = new iSugar();
        $query = "Accounts.id='$id'";
        $result = $sugar->getData('Accounts', $query);
        return $result;
    }

    public function checkLogin($login, $password) {
        $result = array();
        $sugar = new iSugar();
        $result = $sugar->checkLogin($login, $password);
        return $result;
    }

    public function getFields($module, $fieldName) {
        $result = array();
        $sugar = new iSugar();
        $result = $sugar->getFields($module, $fieldName);
        return $result;
    }

    public function getMemberDetails($id) {
        if (empty($id))
            return;
        $result = array();
        $sugar = new iSugar();
        $query = "mqp_members.id='$id'";
        $result = $sugar->getData('mqp_members', $query);
        return $result;
    }

    public function getContactDetails($id) {
        if (empty($id))
            return;
        $result = array();
        $sugar = new iSugar();
        $query = "Contacts.id='$id'";
        $result = $sugar->getData('Contacts', $query);
        return $result;
    }
public function deleteContact($contact_id){
    
}//deleteContact
    public function checkDuplicateUsername($name) {
        if (empty($name))
            return;
        $result = array();
        $sugar = new iSugar();
        $query = "mqp_members.name='$name'";
        $result = $sugar->getData('mqp_members', $query);
        return $result;
    }

    public function getContacts($id) {
        $result = array();
        $sugar = new iSugar();
        $result = $sugar->getDataList('Accounts', 'Contacts', $id);
        return $result;
    }

    public function getMembers($id) {
        $result = array();
        $sugar = new iSugar();
        $result = $sugar->getDataList('Accounts', 'mqp_members', $id);
        return $result;
    }

    public function getLicenses($id) {
        $result = array();
        $sugar = new iSugar();
        $result = $sugar->getDataList('Accounts', 'mqp_license', $id);
        return $result;
    }

    public function saveContact($contact) {
        $sugar = new iSugar();
        $result = $sugar->saveData('Contacts', $contact);
        return $result;
    }

    public function saveMember($member) {
        $sugar = new iSugar();
        $result = $sugar->saveData('mqp_members', $member);
        return $result;
    }

    public function saveLicense($license, $newRecord) {
        $sugar = new iSugar();
        $body = 'Dear Mr.Galya<br>';



        if ($license['id'] == '0') {
            $body .='I want to add new license with name="' . $license['name'] . '" and type="' . $license['type'] . '"';
        }//save new license
        else {
            $body .='I want to edit license which its id = "' . $license['id'] . '" with name="' . $license['name'] . '" and type="' . $license['type'] . '"';
        }//if edit license
        if ($this->sendEmail('Save License', $license['account_id'], 'members@mqplanet.com', $body)) {
            return true;
        }//if email sent successfully
        else {
            return false;
        }//else the email not sent, error
        /* ________________________________save license__*
          $result = $sugar->saveData('mqp_license',$license);

          if($result && $newRecord) {
          $result2 = $sugar->saveRelation('mqp_license',$result->id,'Accounts',$license['account_id']);
          }
          else {
          return $result;
          }
          return $result2;
          /*_________________________END_______save license__ */
    }

    public function checkExistingEmail($email) {
        $result = array();
        $sugar = new iSugar();
        $query = 'Contacts.id in ( select eab.bean_id from email_addresses ea,'
                . ' email_addr_bean_rel eab where ea.email_address LIKE "' . $email . '" and'
                . ' eab.email_address_id=ea.id and eab.bean_module = "Contacts" and ea.opt_out = 0 and'
                . ' ea.deleted = 0 and eab.deleted = 0 ) ';
        $result = $sugar->getData('Contacts', $query);
        return $result;
    }

    public function sendForgetPassword($result) {
        global $smtp;

        $result2 = self::checkDuplicateUsername($result['mqp_members_contacts_name']);
        $subject = 'Forget Password';
        $body = "Username is : " . $result2['name'];
        $body .= "\nYour password is : " . $result2['password'];

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = $smtp['default']['host'];
        $mail->SMTPAuth = true;
        $mail->Port = $smtp['default']['port'];
        $mail->Username = $smtp['default']['user'];
        $mail->Password = $smtp['default']['password'];
        $mail->SetFrom('members@mqplanet.com', 'Administrator');
        $mail->Subject = $subject;
        $mail->MsgHTML($body);
        $mail->AddAddress($result['email1']);
        return $mail->Send();
    }

    public function getServers($id) {
        $result = array();
        $sugar = new iSugar();
        $result = $sugar->getDataList('Accounts', 'mqp_servers', $id, "AND expired=0");
        $i = 0;
        foreach ($result as $server) {
            $res = array();
            $result2 = $sugar->getDataList('mqp_servers', 'mqp_speriod', $server['id']);
            foreach ($result2 as $row)
                $res[] = $row['end_date'];

            array_multisort($res, SORT_DESC, $result2);
            //var_dump($result2);
            $result[$i]['start_date'] = $result2[0]['start_date'];
            $result[$i]['end_date'] = $result2[0]['end_date'];
            $i++;
        }
        return $result;
    }

    public function getLicenseDetails($id) {
        if (empty($id))
            return;
        $result = array();
        $sugar = new iSugar();
        $query = "mqp_license.id='$id'";
        $result = $sugar->getData('mqp_license', $query);
        return $result;
    }

    public function getServerDetails($id) {
        if (empty($id))
            return;
        $result = array();
        $sugar = new iSugar();
        $query = "mqp_servers.id='$id'";
        $result = $sugar->getData('mqp_servers', $query);
        // var_dump($result);
        return $result;
    }

    public function getWebhosts($id) {
        $result = array();
        $sugar = new iSugar();
        $result = $sugar->getDataList('Accounts', 'mqp_webhost', $id, "AND expired=0");
        $i = 0;
        foreach ($result as $webhost) {
            $res = array();
            $result2 = $sugar->getDataList('mqp_webhost', 'mqp_wperiod', $webhost['id']);
            foreach ($result2 as $row)
                $res[] = $row['end_date'];

            array_multisort($res, SORT_DESC, $result2);
            //var_dump($result2);
            $result[$i]['start_date'] = $result2[0]['start_date'];
            $result[$i]['end_date'] = $result2[0]['end_date'];
            $i++;
        }
        return $result;
    }

    public function getDomains($id) {
        $result = array();
        $sugar = new iSugar();
        $result = $sugar->getDataList('Accounts', 'mqp_domains', $id, "AND expired=0");
        $i = 0;
        foreach ($result as $domain) {
            $res = array();
            $result2 = $sugar->getDataList('mqp_domains', 'mqp_dperiod', $domain['id']);
            foreach ($result2 as $row)
                $res[] = $row['end_date'];

            array_multisort($res, SORT_DESC, $result2);
            //var_dump($result2);
            $result[$i]['start_date'] = $result2[0]['start_date'];
            $result[$i]['end_date'] = $result2[0]['end_date'];
            $i++;
        }
        return $result;
    }

    public function checkDuplicateMemberContacts($id) {
        $result = array();
        $sugar = new iSugar();
        $result = $sugar->getDataList('Contacts', 'mqp_members', $id);
        return $result;
    }

    public function saveNewMember($member) {
        $sugar = new iSugar();
        $result = $sugar->saveData('mqp_members', $member);

        if ($result) {
            $result2 = $sugar->saveRelation('mqp_members', $result->id, 'Accounts', $member['account_id']);
            if ($result2) {
                $result3 = $sugar->saveRelation('mqp_members', $result->id, 'Contacts', $member['contact_id']);
            } else {
                return $result2;
            }
        } else {
            return $result;
        }
        return $result3;
    }

    public function getServerBandwidth($id) {
        $sugar = new iSugar();
        $query = "mqp_servers.id='$id'";
        $result = $sugar->getData('mqp_servers', $query);
        //var_dump($result);
        $server = new iServer();
        $resultServer = $server->bandwidth($result['hosting_user'], $result['hosting_password']);
        return $resultServer;
    }

    public function getServerFTP($id) {
        $sugar = new iSugar();
        $query = "mqp_servers.id='$id'";
        $result = $sugar->getData('mqp_servers', $query);
        //var_dump($result);
        $server = new iServer();
        $resultServer = $server->ftp($result['hosting_user'], $result['hosting_password']);
        return $resultServer;
    }

    public function saveServerFTP($id, $password) {
        $sugar = new iSugar();
        $query = "mqp_servers.id='$id'";
        $result = $sugar->getData('mqp_servers', $query);
        //var_dump($result);
        $server = new iServer();
        $resultServer = $server->ftp($result['hosting_user'], $result['hosting_password'], $password);
        return $resultServer;
    }

    public function getServerReboot($id) {
        $sugar = new iSugar();
        $query = "mqp_servers.id='$id'";
        $result = $sugar->getData('mqp_servers', $query);
        //var_dump($result);
        $server = new iServer();
        $resultServer = $server->reboot($result['hosting_user'], $result['hosting_password']);
        return $resultServer;
    }

    public function getProducts($id) {
        $result = array();
        $sugar = new iSugar();

        $result = $sugar->getDataList('Accounts', 'mqp_products', $id);


        foreach ($result as $product) {
            $i = 0;
            $res = array();
            $result2 = $sugar->getDataList('mqp_products', 'mqp_license', $product['id']);
            $licenes = array();
            foreach ($result2 as $lic) {
                $product['license'][$i] = $lic['name'];
                $i++;
            }
        }
        // var_dump($result);
        return $result;
    }

    public function getProductsPeriod($id) {
        $result = array();
        $sugar = new iSugar();

        // $result = $sugar->getDataList('Accounts','mqp_products',$id);
        $result = $sugar->getDataList('mqp_products', 'mqp_prperiod', $id);
        return $result;
    }

    public function getLastContractDate($id) {
        $result = array();
        $sugar = new iSugar();

        $query = "mqp_products.id='$id'";
        $product_date = $sugar->getData('mqp_products', $query);
        $purchasing_date = $product_date["purchasing_date"];


        $period_date_array = $sugar->getDataList('mqp_products', 'mqp_prperiod', $id);

        $end_period_date = 0;
        $start_period_date = 0;
        $last_period_id = 0;
        foreach ($period_date_array as $one_date) {
            if ($one_date["end_date"] > $end_period_date) {
                $end_period_date = $one_date["end_date"];
                $start_period_date = $one_date["start_date"];
                $last_period_id = $one_date["id"];
            }
        }

        $valid_date = 0;
        $remaining = 0;
        $invoice_id = 0;
        
        if ($end_period_date > $purchasing_date) {


            $invoice = $sugar->getDataList('mqp_prperiod', 'mqp_invoices', $last_period_id);

            $remaining = $invoice[0]["remaining"];
            if ($remaining > 0) {

                $valid_date = $start_period_date;
                $invoice_id = $invoice[0]['name'];
            } else {
                $valid_date = $end_period_date;
            }//$remaining> 0
        } else {
            $valid_date = date('Y-m-d', strtotime($purchasing_date . ' +1 year'));
        }//$period_date > $purchasing_date
       
        
            $invoice = $sugar->getDataList('mqp_prperiod', 'mqp_invoices', $last_period_id);
            

 $document = $sugar->getDataList('mqp_products', 'Documents', $id);

        return ['valid_date' => $valid_date,
            'invoice_id' => $invoice_id,
            'remaining' => $remaining,
            'document_id'=>$document[0]["id"]
                ];
    }

    public function getPeriodInvoice($id) {
        $result = array();
        $sugar = new iSugar();
        $result = $sugar->getDataList('mqp_prperiod', 'mqp_prperiod', $id);
        return $result;
    }

    public function getOpenCases($id) {
        $result = array();
        $sugar = new iSugar();
        $result = $sugar->getDataList('Accounts', 'Cases', $id);
        return $result;
    }

    public function getInvoices($id) {
        $result = array();
        $sugar = new iSugar();
        $result = $sugar->getDataList('Accounts', 'mqp_invoices', $id);
        return $result;
    }

    public function getDocuments($type, $offset) {
        $result = array();
        $sugar = new iSugar();
        $query = "category='$type'";
        $result = $sugar->getDataArray('mqp_docs', $query, 2, 'publish_date desc', $offset);
        return $result;
    }

    public function getDocument($id) {
        $result = array();
        $sugar = new iSugar();
        $query = "mqp_docs.id='$id'";
        $result = $sugar->getData('mqp_docs', $query);
        return $result;
    }

    public function findArticles($finedArt, $offset) {
        $arr = explode(" ", $finedArt);
        $result = array();
        $sugar = new iSugar();

        foreach ($arr as $value) {
            $string .= "%" . $value . "%";
        }
        $query = "mqp_docs.name like '$string' OR mqp_docs.body like '$string'";
        $result = $sugar->getDataArray('mqp_docs', $query, 2, 'publish_date desc', $offset);
        return $result;
    }

    public function getInvoiceDetails($id) {
        $sugar = new iSugar();
        $items = array("servers" => $sugar->getDataList('mqp_invoices', 'mqp_speriod', $id),
            "products" => $sugar->getDataList('mqp_invoices', 'mqp_products', $id),
            "hosts" => $sugar->getDataList('mqp_invoices', 'mqp_wperiod', $id),
            "domains" => $sugar->getDataList('mqp_invoices', 'mqp_dperiod', $id));
        return $items;
    }

    public function getInvoicePayments($id) {
        $result = array();
        $sugar = new iSugar();
        $result = $sugar->getDataList('mqp_invoices', 'mqp_payments', $id);
        return $result;
    }

    public function getTicketsInfo($id) {

        $result = array();
        $db = new Database();
        $result = $db->fetchArray("SELECT id,name,date_entered,status FROM cases WHERE account_id='$id' AND deleted=0
                               ORDER BY date_entered DESC");
        $db->close();

        return $result;
    }

    public function getRedirectsInfo($id) {

        $result = array();
        $db = new Database();
        $result = $db->fetchArray("SELECT a.name AS fphone,a.second_phone AS sphone,a.toll_free AS toll_free,
                               a.fax_number AS fxnumber,a.fax_email AS fxemail,a.redirect_phone AS rphone,
                               a.start_date AS sdate,a.end_date AS edate,a.price AS price,
                               b.mqp_phoneredirection_accountsmqp_phoneredirection_idb FROM mqp_phoneredirection a,
                               mqp_phoneredirection_accounts_c b WHERE b.mqp_phoneredirection_accountsaccounts_ida='$id' AND
                               a.id = b.mqp_phoneredirection_accountsmqp_phoneredirection_idb AND b.deleted=0 AND expired = 0 ORDER BY a.end_date ASC");
        $db->close();

        return $result;
    }

    public function getProductsInfo($id) {

        $result = array();
        $db = new Database();
        $result = $db->fetchArray("SELECT a.id,a.name AS name,a.quantity AS quantity,a.price AS price,a.version AS version
                               FROM mqp_products a,mqp_products_accounts_c b WHERE b.mqp_products_accountsaccounts_ida='$id'
                               AND a.id = b.mqp_products_accountsmqp_products_idb AND b.deleted=0 ORDER BY a.date_entered DESC");

        $db->close();

        if (count($result)) {
            for ($i = 0; $i < count($result); $i++) {
                $result[$i]['documents'] = $this->getProductsDocuments($result[$i]['id']);
            }
        }

        return $result;
    }

    private function getProductsDocuments($pid) {

        $result = array();
        $db = new Database();
        $result = $db->fetchArray("SELECT document_revision_id FROM documents WHERE id IN (SELECT mqp_products_documentsdocuments_idb
                               FROM mqp_products_documents_c WHERE mqp_products_documentsmqp_products_ida='{$pid}')");
        $db->close();

        if (count($result)) {
            $temp = array();
            foreach ($result as $row) {
                $temp[] = $row['document_revision_id'];
            }
            $result = $temp;
        }

        return $result;
    }

    public function getInvoicesInfo($id) {

        $result = array();
        $db = new Database();
        $invoices = $db->fetchArray("SELECT a.mqp_invoices_accountsmqp_invoices_idb AS iid,b.id,b.issue_date,b.remaining FROM
                                 mqp_invoices_accounts_c a, mqp_invoices b WHERE a.mqp_invoices_accountsaccounts_ida='$id' AND
                                 a.mqp_invoices_accountsmqp_invoices_idb=b.id AND a.deleted=0 ORDER BY b.remaining DESC,
                                 b.issue_date DESC");
        $db->close();

        if (count($invoices)) {
            for ($i = 0; $i < count($invoices); $i++) {
                $iid = $invoices[$i]['iid'];
                $items = array();
                $items['details'] = $this->invoiceDetails($iid);
                $items['servers'] = $this->invoiceServers($iid);
                $items['products'] = $this->invoiceProducts($iid);
                $items['hosts'] = $this->invoiceHosts($iid);
                $items['domains'] = $this->invoiceDomains($iid);
                $items['statments'] = $this->invoiceStatment($iid);
                $result[$i] = $items;
            }
        }

        return $result;
    }

    /* public function getInvoiceDetails($id, $cid){

      $items = array("details"   => $this->invoiceDetails($id),
      "servers"   => $this->invoiceServers($id),
      "products"  => $this->invoiceProducts($id),
      "hosts"     => $this->invoiceHosts($id),
      "domains"   => $this->invoiceDomains($id),
      "statments" => $this->invoiceStatment($id));

      return $items;

      } */

    private function invoiceDetails($id) {

        $result = array();
        $db = new Database();
        $result = $db->fetchArray("SELECT id,name,total,issue_date,remaining FROM mqp_invoices WHERE id='$id'");

        $db->close();
        return $result;
    }

    private function invoiceServers($id) {

        $result = array();
        $db = new Database();
        $result = $db->fetchArray("SELECT name,start_date,end_date,price FROM mqp_servers WHERE id IN (SELECT mqp_invoices_mqp_serversmqp_servers_idb
                               FROM mqp_invoices_mqp_servers_c WHERE mqp_invoices_mqp_serversmqp_invoices_ida='$id' AND deleted='0') AND
                               deleted='0'");

        $db->close();
        return $result;
    }

    private function invoiceProducts($id) {

        $result = array();
        $db = new Database();
        $result = $db->fetchArray("SELECT name,quantity,price FROM mqp_products WHERE id IN (SELECT mqp_invoices_mqp_productsmqp_products_idb
                               FROM mqp_invoices_mqp_products_c WHERE mqp_invoices_mqp_productsmqp_invoices_ida='$id' AND deleted='0') AND
                               deleted='0'");

        $db->close();
        return $result;
    }

    private function invoiceHosts($id) {

        $result = array();
        $db = new Database();
        $result = $db->fetchArray("SELECT host_plan,start_date,end_date,price FROM mqp_webhost WHERE id IN (SELECT mqp_invoices_mqp_webhostmqp_webhost_idb
                               FROM mqp_invoices_mqp_webhost_c WHERE mqp_invoices_mqp_webhostmqp_invoices_ida='$id' AND deleted='0') AND
                               deleted='0'");

        $db->close();
        return $result;
    }

    private function invoiceDomains($id) {

        $result = array();
        $db = new Database();
        $result = $db->fetchArray("SELECT name,start_date,end_date,price FROM mqp_domains WHERE id IN (SELECT mqp_invoices_mqp_domainsmqp_domains_idb
                               FROM mqp_invoices_mqp_domains_c WHERE mqp_invoices_mqp_domainsmqp_invoices_ida='$id' AND deleted='0') AND
                               deleted='0'");

        $db->close();
        return $result;
    }

    private function invoiceStatment($id) {

        $result = array();
        $db = new Database();
        $result = $db->fetchArray("SELECT payment_date,payment,name FROM mqp_invoices_mqp_payments_c,mqp_payments WHERE
                               mqp_invoices_mqp_paymentsmqp_invoices_ida='$id' AND mqp_invoices_mqp_payments_c.deleted=0 AND
                               mqp_invoices_mqp_paymentsmqp_payments_idb=mqp_payments.id ORDER BY payment_date ASC");

        $db->close();
        return $result;
    }

    public function sendEmail($subject, $fromN, $fromE, $body, $settings = 'default') {

        global $smtp;

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = $smtp[$settings]['host'];
        $mail->SMTPAuth = true;
        $mail->Port = $smtp[$settings]['port'];
        $mail->Username = $smtp[$settings]['user'];
        $mail->Password = $smtp[$settings]['password'];
        $mail->SetFrom($fromE, $fromN);
        $mail->addAddress('galya@mqplanet.com');
        // $mail->addAddress('taylorsuccessor@gmail.com');
        $mail->Subject = $subject;
        $mail->MsgHTML($body);
        $mail->AddAddress($smtp[$settings]['sendto']);

        return $mail->Send();
    }

    function getLookupServers() {

        $servers = array('com' => array('whois.crsnic.net', 'No match for'),
            'info' => array('whois.afilias.net', 'NOT FOUND'),
            'net' => array('whois.crsnic.net', 'No match for'),
            'org' => array('whois.pir.org', 'NOT FOUND'),
            'mobi' => array('whois.dotmobiregistry.net', 'NOT FOUND'),
            'biz' => array('whois.biz', 'Not found'),
            'tv' => array('whois.nic.tv', 'No match for'),
            'co.uk' => array('whois.nic.uk', 'No match'),
            'us' => array('whois.nic.us', 'Not Found'),
            'ca' => array('whois.cira.ca', 'AVAIL'),
            'ws' => array('whois.website.ws', 'No Match'),
            'name' => array('whois.nic.name', 'No match'),
            'in' => array('whois.inregistry.net', 'NOT FOUND'),
            'nl' => array('whois.domain-registry.nl', 'is free'));

        return $servers;
    }

    function domainLookup($name, $ext) {

        $servers = $this->getLookupServers();

        if (strlen($name) <= strlen($ext) + 1) {
            return 2;
        } elseif (!array_key_exists($ext, $servers)) {
            return 2;
        } else {
            $fp = fsockopen($servers[$ext][0], 43, $errno, $error, 10);
            if (!$fp) {
                return 999;
            } else {
                $response = '';
                $domain = strtolower(trim($name) . '.' . $ext) . "\r\n";

                fputs($fp, $domain);
                $i = 0;
                while (!feof($fp))
                    $response .= fgets($fp);
                fclose($fp);
                if (preg_match('/' . $servers[$ext][1] . '/i', $response))
                    return 1;
                else
                    return 0;
            }
        }
    }

    function getDocumentTitle($doc) {

        $result = array();
        $db = new Database();
        $result = $db->fetchArray("SELECT document_name FROM documents WHERE document_revision_id='$doc'");

        if (count($result)) {
            $result = $result[0]['document_name'];
        } else
            $result = 0;

        $db->close();
        return $result;
    }

    function getTicketDetails($id) {

        $result = array();
        $db = new Database();
        $result = $db->fetchArray("SELECT a.name,a.date_entered,a.status,a.description FROM cases a WHERE a.id='$id'");
        if (count($result)) {
            $result = $result[0];
            $notes = $db->fetchArray("SELECT assigned_user_id,date_entered,description FROM notes a WHERE parent_id='$id'
                                 AND deleted='0' ORDER BY date_entered DESC");
            $result['notes'] = $notes;
        }
        $db->close();

        return $result;
    }

    function generateRandomString($length = 4) {

        $result = '';
        $char = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i',
            'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
        for ($i = 0; $i < $length; $i++) {
            $result.= $char[rand(0, count($char) - 1)];
        }

        return $result;
    }

    function addNewComment($id, $body) {

        $rid = $this->generateRandomString(8) . '-' . $this->generateRandomString(4) . '-' . $this->generateRandomString(4);
        $rid .= '-' . $this->generateRandomString(4) . '-' . $this->generateRandomString(12);
        $date = date('Y-m-d H:m:s');
        $db = new Database();
        $result = $db->query("INSERT INTO notes (assigned_user_id, id, date_entered, date_modified, modified_user_id,
                          created_by, name, file_mime_type, filename, parent_type, parent_id, contact_id, portal_flag,
                          embed_flag, description, deleted) VALUES ('', '{$rid}', '{$date}', '{$date}', '', '', 'Ticket Note',
                          NULL, NULL, 'Cases', '{$id}', '', 0, 0, '{$body}', 0)");
    }

    function addNewTicket($cid, $title, $body) {

        $rid = $this->generateRandomString(8) . '-' . $this->generateRandomString(4) . '-' . $this->generateRandomString(4);
        $rid .= '-' . $this->generateRandomString(4) . '-' . $this->generateRandomString(12);
        $date = date('Y-m-d H:m:s');
        $db = new Database();
        $result = $db->query("INSERT INTO cases (id, name, date_entered, date_modified, modified_user_id, created_by,
                          description, deleted, assigned_user_id, case_number, type, status, priority, resolution,
                          work_log, account_id) VALUES ('{$rid}', '{$title}', '{$date}', '{$date}', '', '', '{$body}',
                          0, '', 'SELECT MAX(case_number)+1 FROM cases', 'Administration', 'New', 'P1', '', NULL, '{$cid}')");
    }

    public function getNews($cat = '') {

        $result = array();
        $db = new Database();
        $where = '';
        if ($cat != '') {
            $where = ' WHERE category = "' . $cat . '"';
        }
        $result = $db->fetchArray("SELECT id , name , category , body  ,date_entered  FROM planetcrm.mqp_docs " . $where . "  ORDER BY date_entered DESC LIMIT 5");
        $db->close();

        return $result;
    }

    public function getFullarticle($id) {
        $result = array();
        $db = new Database();
        $result = $db->fetchArray("SELECT id , name , category , body  ,date_entered  FROM planetcrm.mqp_docs Where id = '" . $id . "' ");
        $db->close();
        return $result;
    }

    public function genrateTokens() {
        // auto genrate toke from php 
        $token = uniqid();
        return $token;
    }
    
}

?>
