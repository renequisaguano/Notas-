<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asignaturas extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('asignatura_model');
	}
	function index(){

		$this->load->view('encabezado');
		$this->load->view('menu');
	}


	function nuevo(){
		$this->load->view('encabezado');
		$this->load->view('menu');
		$this->load->view('asignatura/vista_nueva_asignatura');
	}

	function recibirDatos(){
		$datos=array(
			'nom'=>$this->input->post('txtnombre'),
			'cred'=>$this->input->post('txtcreditos')
			);
		$this->asignatura_model->crearAsignatura($datos);



	}



}