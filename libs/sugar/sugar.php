<?php

class iSugar
{
  private static $settings;
  private static $auth;
  private static $soap;
  private static $authResponse;
  private static $sessionId;

  public static function init()
  {
    self::$settings = array("location" => 'http://office.mqplanet.com/planetcrm2/soap.php',
                            "uri"      => 'http://office.mqplanet.com/planetcrm2/',
                            "trace" => 1);

    self::$auth = array("user_name" => 'galya',
                        "password" => MD5('abc123'),
                        "version" => '.01');

    self::$soap         = new SoapClient(NULL, self::$settings);
    self::$authResponse = self::$soap->login(self::$auth, 'test');
    self::$sessionId    = self::$authResponse->id;
  }
  
   public static function getFields($module,$fieldName)
  {

    $options = array();
    self::init();
    $response = self::$soap->get_module_fields(self::$sessionId, $module);
    foreach($response->module_fields as $field) {
      if($field->name==$fieldName){
        foreach($field->options as $option)
           $options[$option->name] = $option->value;
        break;
      }
    }

    return $options;

  }
  
  
  private static function setarray($dataArray)
  {
    $data = array();
    foreach($dataArray as $k =>$value) {
        if($k=='id') {
            if($value=='0') continue;
        }
        $minidata = array();
        $minidata['name'] =$k;
        $minidata['value']=$value;
        $data[]=$minidata;
    }
    return $data;
  }
  
   public static function checkLogin($username, $password)
  {
    
    $ids= array();
    self::init();
    

    $response   = self::$soap->get_entry_list(self::$sessionId, 'mqp_members', "mqp_members.name='{$username}' AND mqp_members.password='{$password}'");
    
    if($response==NULL) return;
    
    $ids['member_id'] = $response->entry_list[0]->id;
    
    $get_relationships_result = self::$soap->get_relationships(self::$sessionId,"mqp_members",$ids['member_id'],"Accounts");
    if($get_relationships_result==NULL) return;
    $ids['account_id'] = $get_relationships_result->ids[0]->id;
    
    $get_relationships_result = self::$soap->get_relationships(self::$sessionId,"mqp_members",$ids['member_id'],"Contacts");
    if($get_relationships_result==NULL) return;
    $ids['contact_id'] = $get_relationships_result->ids[0]->id;
    
    $last_login = date('Y-m-d H:i:s');
    $response = self::$soap->set_entry(self::$sessionId, 'mqp_members', array(
            array("name" => 'id', "value" =>  $ids['member_id']),
            array("name" => 'last_login', "value" => $last_login)
            ));
  
    return $ids;

  }

   
   public static function getData($table, $query)
  {
    
    $data = array();
    self::init();
    
    $params = array('session'=>self::$sessionId,
                    'module_name' => $table,
                    'query' =>$query
                   );
    //$response   = self::$soap->get_entry_list(self::$sessionId, $table, $query);
    $response   = self::$soap->__call('get_entry_list',$params);
    
    if($response==NULL) return;

    foreach($response->entry_list as $entrylist){
      foreach($entrylist->name_value_list as $entry){
        $data[$entry->name]= $entry->value;
      }
    }
    return $data;
  }
  
    public static function getDataArray($table, $query,$limit=0,$order_by='',$offset=0)
  {
    
    $data = array();
    $dataList = array();
    self::init();
    $params = array('session'=>self::$sessionId,
                    'module_name' => $table,
                    'query' =>$query,
                    'order_by' =>$order_by,               
                    'offset' =>$offset,
                    'max_results' =>0,
                    'limit' => $limit,    
                    'deleted' => 0,
                    'Favorites' => false
                   );
  

    //$response   = self::$soap->get_entry_list(self::$sessionId, $table, $query);
    $response   = self::$soap->__call('get_entry_list',$params);

    if($response==NULL) return;
    
    
    for($i=0;$i<$response->result_count;$i++) {
      $res = $response->entry_list[$i];
      foreach($res->name_value_list as $entry){
        $data[$entry->name]= $entry->value;
      }
      $dataList[$i]=$data;
    }
    return $dataList;
  }
  
   public static function getDataList($module1,$module2,$id,$condition="") 
  {
    $dataList = array();
    $count=0;

    self::init();
    
    $get_relationships_result = self::$soap->get_relationships(self::$sessionId,$module1,$id,$module2);
    if($get_relationships_result==NULL) return;
    
    for($i=0;$i<count($get_relationships_result->ids);$i++) {
      $data = array(); 
      $id = $get_relationships_result->ids[$i]->id;
      $query ="$module2.id='$id'";
      $query .= " $condition";
      $data = self::getData($module2,$query);
      if($data) {
         $dataList[$i] = $data;
      }
    }
    
    return $dataList;
  }
  
  public static function saveData($module,$datdaArray)
  {
     self::init();

     $response = self::$soap->set_entry(self::$sessionId, $module,self::setarray($datdaArray));
    // if($response->number==0) return 0;
    
     return $response;
    
  }
  
   public static function saveRelation($module1,$moduleId1,$module2,$moduleId2)
  {
     self::init();
     $params = array('module1' => $module1,
                     'module1_id' => $moduleId1,  
                     'module2' => $module2,
                     'module2_id' => $moduleId2
                    );

    $response = self::$soap->set_relationship(self::$sessionId, $params);
    return $response;
    
  }
  

  
}
?>