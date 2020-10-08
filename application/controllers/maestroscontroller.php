<?php if ( ! defined('BASEPATH') ) exit('No direct script access allowed'); 
require_once "AbstractController.php";


class maestroscontroller extends AbstractController
{
	
	public function __construct(){
	parent::__construct();
	
	$this->load->model('maestros');
	}

	 public function index()
	{
		
		$busqueda=$this->maestros->obtenerTodosRegistros();

		$datos = array('titulo' =>'Listado de Maestros','busquedaMaestros'=>$busqueda,);
		//$busqueda->this->alumno('index');
		$this->load->view('maestros/index',$datos);
	  	//$this->load->view('alumnos/crear');
	}

	public function crear(){
	
	if ($this->is_post()) {
		
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
		$this->form_validation->set_rules('nombre','Nombre','trim|callback_name_check');
		$this->form_validation->set_rules('apellido','Apellidos','trim|callback_apellido_check');

		$this->form_validation->set_rules('fecha','Fecha Nacimiento','trim|callback_fecha_check');

	/**
	 * cuando las validaciones se cumplan
	 */
		if ($this->form_validation->run() == TRUE) {
			
			
			$this->maestros->poblarPropiedades($this->arregloPost);

			$this->maestros->grabar();
			redirect('maestroscontroller/index');
		}
	}
/**llena*/
	$datos = $this->formularioMaestros($this->arregloPost);

	$datos['titulo']="Crear Maestros";
	$datos['subtitulo']="Registrar Maestros";
 
	$this->load->view('maestros/crear',$datos);
}

public function editar($id=null){

	$this->maestros->cargar($id);
	
	$datos = $this->formularioMaestros($this->maestros->getArregloPropiedades());
	
	$datos['titulo'] = "Editar Maestros";
	$datos['subtitulo']="Editar Maestros";

	$this->load->view('maestros/crear', $datos);

}

public function eliminar($id=null){
	$this->maestros->cargar($id);

	if($this->is_post()){
		$this->maestros->cargar($this->arregloPost['id']);
		$this->maestros->borrar();
		redirect('maestroscontroller/index');
	}

	$datos['objMaestros'] = $this->maestros;

	$this->load->view('maestros/eliminar', $datos);
}

public function mostrar($id=null){
$this->maestros->cargar($id);

	$datos['objAlumno'] = $this ->maestros;

	$this->load->view('maestros/mostrar',$datos);
}

public function name_check($datosPost){
	if(empty($datosPost)){
		$this->form_validation->set_message("name_check","El nombre es requerido",'nombre');
		return FALSE;
	}
	return TRUE;
}

public function apellido_check($datosPost){
	if(empty($datosPost)){
		$this->form_validation->set_message("apellido_check","Los apellidos son requeridos",'apellido');
		return FALSE;
	}
	return TRUE;
}
}

























?>

