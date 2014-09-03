<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Asignatura_model extends CI_Model{

	function __construct(){

		parent::__construct();
		$this->load->database();
	}

	function crearAsignatura($dat){
		$this->db->insert('asignatura',array(
			'NOMBRE_ASIG'=>$dat['nom'],
			'CREDITOS_ASIG'=>$dat['cred']
		));

	}



}