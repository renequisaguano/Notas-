<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Alumno_model extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function crearAlumno ($data){
		$this->db->insert('estudiante',array(
			'CEDULA_EST'=>$data['CEDULA_EST'],
			'NOMBRE_EST'=>$data['NOMBRE_EST'],
			'APELLIDO_EST'=>$data['APELLIDO_EST'],
			'DIRECCION_EST'=>$data['DIRECCION_EST'],
			'TELEFONO_EST'=>$data['TELEFONO_EST']
			));

	}


}

?>