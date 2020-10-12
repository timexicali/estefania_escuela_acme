<?php 

require_once "alumnosdao.php";

 class Alumno extends AlumnosDao
 {
 	
 	const DB_TABLA = "alumno";
 	const DB_TABLA_INDICE = "id";

 	public $id;
 	public $nombre;
 	public $apellido;
 	public $pais;
 	public $fecha;
 	//public $fotografia;


 	public function poblarPropiedades(array $datos)
 	{
 		//Aqui esta lo que no funciona, estoy inicializando a cero. Creo no funciona el autoincremento :)
		$id=0;
 		
		$this->$id = isset($datos['id']) ? trim($datos['id']) : 0;

 		$this->nombre = isset($datos['nombre']) ? trim($datos['nombre']) : null;

 		$this->apellido = isset($datos['apellido']) ? trim($datos['apellido']) : null;

 		$this->pais = isset($datos['pais']) ? trim($datos['pais']) : null;

 		$this->fecha = isset($datos['fecha']) ? trim($datos['fecha']) : null;

 		//recien
 		//$this->fotografia=isset($datos['fotografia'])? trim($datos['fotografia']):null;
 		
 	}

	public function getArregloPropiedades(){ 
		$arreglo = array(
						
						'id' => $this->id,
						'nombre' => $this->nombre,
						'apellido' => $this->apellido,
						'pais' => $this->pais,
						'fecha' => $this->fecha
						);
		//*tengo problema con la fotografia de ajax eso creo porque he reducido los campros en codificaxcion
						//'fotografia'=>$this->fotografia);
		return $arreglo;
	}


 } 
