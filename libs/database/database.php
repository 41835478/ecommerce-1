<?php
class Database{

	private static $instance;
    public	$debug         = true;
	private	$server        = "";
	private	$user          = "";
	private	$pass          = "";
	private	$database      = "";
	public	$error         = "";
	public	$affected_rows = 0;
	private	$link_id       = 0;
	private	$query_id      = 0;

  public function __construct($key='default', $nlink=false, $pconnection=false){

    global $database;

	  $this->server   = $database[$key]['host'];
	  $this->user     = $database[$key]['user'];
	  $this->pass     = $database[$key]['password'];
	  $this->database = $database[$key]['db'];

    $this->connect($nlink, $pconnection);

  }

  private function connect($nlink, $pconnection){

    if($pconnection) $this->link_id = @mysql_pconnect($this->server, $this->user, $this->pass, $new_link);
    else             $this->link_id = @mysql_connect($this->server, $this->user, $this->pass, $new_link);

	  if($this->link_id) @mysql_query("SET names 'utf8'", $this->link_id);
    else               $this->oops("Could not connect to server: <b>$this->server</b>.");

	  if(!@mysql_select_db($this->database, $this->link_id)) $this->oops("Could not open database: <b>$this->database</b>.");

	  $this->server   = '';
	  $this->user     = '';
	  $this->pass     = '';
	  $this->database = '';
  }

  public function close(){

	  if(!@mysql_close($this->link_id)) $this->oops("Connection close failed.");

  }

  public function escape($string){

	  if(get_magic_quotes_runtime()) $string = stripslashes($string);
    return @mysql_real_escape_string($string, $this->link_id);

  }

  public function query($sql){

	  $this->query_id = @mysql_query($sql, $this->link_id);

	  if (!$this->query_id){
		  $this->oops("<b>MySQL Query fail:</b> $sql");
		  return 0;
	  }

	  $this->affected_rows = @mysql_affected_rows($this->link_id);

	  return $this->query_id;
  }

  public function queryFirst($query_string){

    $query_id = $this->query($query_string);
	  $out = $this->fetch($query_id);
	  $this->freeResult($query_id);
	  return $out;

  }

  public function fetch($query_id=-1){

    if($query_id != -1)
		  $this->query_id = $query_id;

	  if(isset($this->query_id))
		  $record = @mysql_fetch_assoc($this->query_id);

    else
		  $this->oops("Invalid query_id: <b>$this->query_id</b>. Records could not be fetched.");

	  return $record;

  }

  public function fetchArray($sql){

    $query_id = $this->query($sql);
	  $out      = array();

	  while ($row = $this->fetch($query_id))
		  $out[] = $row;

	  $this->freeResult($query_id);
	  return $out;

  }

  public function update($table, $data, $where='1'){

	  $q = "UPDATE `$table` SET ";

	  foreach($data as $key => $val){
	    $val = mysql_real_escape_string($val);
	    $q .= "`$key`='$val', ";
	  }

	  $q = rtrim($q, ', ') . ' WHERE '.$where.';';

	  return $this->query($q);
  }

  public function insert($table, $data){

	  $q = "INSERT INTO `$table` ";
	  $v = '';
    $n = '';

	  foreach($data as $key => $val){
	    $val = mysql_real_escape_string($val);
		  $n .= "`$key`, ";
      $v .= "'".$val."', ";
	  }

	  $q .= "(". rtrim($n, ', ') .") VALUES (". rtrim($v, ', ') .");";

	  if($this->query($q)){
	    if(mysql_insert_id($this->link_id) == 0) return 1;
      else return mysql_insert_id($this->link_id);
	  }

	  else return false;

  }

  private function freeResult($query_id=-1){

	  if($query_id!=-1)
		  $this->query_id=$query_id;

	  if($this->query_id!=0 && !@mysql_free_result($this->query_id))
		  $this->oops("Result ID: <b>$this->query_id</b> could not be freed.");

  }

  private function oops($msg=''){

	  if(!empty($this->link_id))
		  $this->error = mysql_error($this->link_id);

	  else{
		  $this->error = mysql_error();
		  $msg="<b>WARNING:</b> No link_id found. Likely not be connected to database.<br />$msg";
	  }

	  if(!$this->debug) return;
	  ?>
		<table align="center" border="1" cellspacing="0" style="background:white;color:black;width:80%;">
		 <tr><th colspan=2>Database Error</th></tr>
		 <tr><td align="right" valign="top">Message:</td><td><?php echo $msg; ?></td></tr>
		 <?php if(!empty($this->error)) echo '<tr><td align="right" valign="top" nowrap>MySQL Error:</td><td>'.$this->error.'</td></tr>'; ?>
		 <tr><td align="right">Date:</td><td><?php echo date("l, F j, Y \a\\t g:i:s A"); ?></td></tr>
		 <?php if(!empty($_SERVER['REQUEST_URI'])) echo '<tr><td align="right">Script:</td><td><a href="'.$_SERVER['REQUEST_URI'].'">'.$_SERVER['REQUEST_URI'].'</a></td></tr>'; ?>
		 <?php if(!empty($_SERVER['HTTP_REFERER'])) echo '<tr><td align="right">Referer:</td><td><a href="'.$_SERVER['HTTP_REFERER'].'">'.$_SERVER['HTTP_REFERER'].'</a></td></tr>'; ?>
		</table>
	  <?php
  }

}
?>