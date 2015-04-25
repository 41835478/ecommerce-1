<?php


class iServer {
    
  private static $sessionId;
  private static $serverContract;
    
  public function execute($data)
  {
    
    $ch = curl_init('https://mqplanet.dedicatedpanel.com');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
    
  }
  public function init($username,$password)
  {
    $data = array("use_api" => "1",
                "page" => "Login",
                "action" => "index",
                "username" => $username,
                "password" => $password
                );
    $res = json_decode(self::execute($data));
    self::$serverContract = key($res->params->select_contracts);
    self::$sessionId = $res->params->session_id;
  }    
  
  public function reboot($username,$password)
  {
    self::init($username,$password);
    $data = array("use_api" => "1",
                "page" => "Reboot",
                "action" => "index",
                "session_id" =>self::$sessionId,
                "contract_id"  => self::$serverContract,
                "method" => "HWR"
                );
    $result= json_decode(self::execute($data));
    return $result->params;
    
  }
  
  public function bandwidth($username,$password)
  {
    self::init($username,$password);
    $data = array("use_api" => "1",
                "page" => "Traffic",
                "action" => "index",
                "session_id" =>self::$sessionId,
                "contract_id"  => self::$serverContract
                );
               
    $result =  json_decode(self::execute($data));
    return $result->params->data;
  }
  
   public function ftp($username,$password,$ftpPassword="")
  {
    self::init($username,$password);
    $data = array("use_api" => "1",
                "page" => "BackupFTP",
                "action" => "index",
                "session_id" =>self::$sessionId,
                "contract_id"  => self::$serverContract
                );
    if($ftpPassword!="") {
        $datapass = array("backup_password"=>$ftpPassword);
        $data = array_merge($data,$datapass);
    }
    
    $result =  json_decode(self::execute($data));
    return $result->params;
  }
    
}

?>