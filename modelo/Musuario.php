<?php 
class Musuario{
  public $id;
  public $usuario;
  public $contra;
  public $tipoUsuario;
  
  function __construct(){
    
  }
  
  function getId(){
    return $this->id;
  }
  function getUsuario(){
    return $this->usuario;
  }
  function getContra(){
    return $this->contra;
  }
  function getTipoUsuario(){
    return $this->tipoUsuario;
  }    
  function setId($param){
    $this->id=$param;
  }
  function setUsuario($param){
    $this->usuario=$param;
  }
  function setContra($param){
    $this->contra=$param;
  }
  function setTipoUsuario($param){
    $this->tipoUsuario=$param;
  }
  
}

?>