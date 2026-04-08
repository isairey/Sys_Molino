<?php 
class Mpersona{
  public $documento;
  public $nombre;
  public $apellidos;
  public $direccion;
  public $telefono;
  
  function __construct(){
    
  }
  
  function getNombre(){
    return $this->nombre;
  }
  function getApellidos(){
    return $this->apellidos;
  }
  function getDireccion(){
    return $this->direccion;
  }
  function getTelefono(){
    return $this->telefono;
  }        
  function setNombre($param){
    $this->nombre=$param;
  }
  function setApellidos($param){
    $this->apellidos=$param;
  }
  function setDireccion($param){
    $this->direccion=$param;
  }
  function setTelefono($param){
    $this->telefono=$param;
  }
  

    /**
     * @return mixed
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * @param mixed $documento
     *
     * @return self
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }
}

?>