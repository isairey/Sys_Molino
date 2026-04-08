<?php
class Mcargo{
  public $id;
  public $descripcion;
  
  function __construct(){
    
  }
  
  function getId(){
    return $this->id;
  }
  function getDescripcion(){
    return $this->descripcion;
  }
  function setId($param){
    $this->id=$param;
  }
  function setDescripcion($param){
    $this->descripcion=$param;
  }
  
}

?>