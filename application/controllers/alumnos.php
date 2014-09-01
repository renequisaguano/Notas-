<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumnos extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('alumno_model');

	}

	public function index()
	{
		$this->load->view('encabezado');
		$this->load->view('menu');
		
	}

	public function nuevo(){
		$this->load->view('encabezado');
		$this->load->view('menu');
		$this->load->view('vista_nuevo_alumno');

	}

	function recibirDatos(){
		$data=array(
			'CEDULA_EST'=>$this->input->post('CEDULA_EST'),
			'NOMBRE_EST'=>$this->input->post('NOMBRE_EST'),
			'APELLIDO_EST'=>$this->input->post('APELLIDO_EST'),
			'DIRECCION_EST'=>$this->input->post('DIRECCION_EST'),
			'TELEFONO_EST'=>$this->input->post('TELEFONO_EST')
			);
		$this->alumno_model->crearAlumno($data);
	}




}


?>