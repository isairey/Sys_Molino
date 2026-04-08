<?php 
include_once 'conexion.php';
/**
* 
*/
class Cusuario extends Cconexion
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function mostrarUsuarios()
	{
		$sql = "SELECT *FROM usuarios";
		$resultado = $this->conexion->query($sql);
		return $resultado;
	}
}
?>