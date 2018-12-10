<?php
namespace TastyRecipe\Model;

class Entry{

  private $username;
  private $message;
  private $timestamp;
  private $deleted;

  public function __construct($username,$message){
    $this->username = $username;
    $this->message = $message;
    $this->timestamp = time();
    $this->deleted = false;
  }
  public function getUsername(){
    return $this->username;
  }

  public function getMessage(){
    return $this->message;
  }
  public function getTimestamp(){
    return $this->timestamp;
  }
  public function isDeleted(){
    return $this->deleted;
  }
  public function setDeleted($deleted){
    $this->deleted= $deleted;
  }
  public function setTimestamp($timestamp){
    $this->timestamp=$timestamp;
  }
}
 ?>
