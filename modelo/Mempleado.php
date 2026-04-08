<?php
class Mempleado{
  public $documento;
  public $idCargo;
  public $documento1;
  
  function __construct(){
    
  }
  
  function getDocumento(){
    return $this->documento;
  }
  function getIdCargo(){
    return $this->idCargo;
  }
  function getDocumento1(){
    return $this->documento1;
  }
  function setDocumento($param){
    $this->documento=$param;
  }
  function setIdCargo($param){
    $this->idCargo=$param;
  }
  function setDocumento1($param){
    $this->documento1=$param;
  }
  
}

?>