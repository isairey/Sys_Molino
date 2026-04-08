<?php 
/**
* 
*/
class Cconexion
{
	
	protected $conexion;

	function __construct()
	{
		$this->conexion = new mysqli("localhost", "root", "", "molino");

		if ($this->conexion->connect_error) {
			die("CONEXION NO ESTABLECIDA" . $this->conexion->connect_error);
		}
	}

    /**
     * @return mixed
     */
    public function getConexion()
    {
        return $this->conexion;
    }
}
?>