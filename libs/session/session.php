<?php
/**
 * session
 *
 * @package MQ Planet Clients Area
 * @author Husni Mansour
 * @copyright MQ Planet
 * @version 1.0
 * @access public
 */
class Session{

  private $key;
  private $value;

  public function __construct(){

    if(session_id() == ''){
      session_start();
    }

  }

  /**
   * writes to session
   *
   * @param mixed $key - session key
   * @param mixed $value - session value
   * @return null
   */
  public function write($key, $value){

    if(!empty($key)){
      $this->key = $key;
      $this->value = $value;
      $this->set();
    }
    return;

  }

  /**
   * reads from session
   *
   * @param mixed $key - session key
   * @return mixed - key value
   */
  public function read($key){

    if(!empty($key)){
      $this->key = $key;
      return $this->get();
    }

    return;

  }

  /**
   * delete session entry by key
   *
   * @param mixed $key - the key of the value needs to be deleted
   * @return null
   */
  public function delete($key){

    $this->key = $key;
    $this->value = '';
    $this->set();

  }

  /**
   * a getter
   *
   * @return mixed
   */
  private function get(){

    if(isset($_SESSION[$this->key])) return $_SESSION[$this->key];
    return;

  }

  /**
   * a setter
   *
   * @return
   */
  private function set(){

    $_SESSION[$this->key] = $this->value;

  }

}
?>