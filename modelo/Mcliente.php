<?php
class Mcliente{
  public $documento;
  public $zona;
  
  function __construct(){
    
  }
  
  function getDocumento(){
    return $this->documento;
  }
  function getZona(){
    return $this->zona;
  }
  function setDocumento($param){
    $this->documento=$param;
  }
  function setZona($param){
    $this->zona=$param;
  }
  
}

?>