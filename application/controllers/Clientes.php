<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {
	public function index(){
	$this->load->helper('utilidades');
		$data = array(
			'nombre' => 'aruma yatzil',
			'contacto' => 'diego zamora',
			'direccion' => 'Casahuates'
		);
		$campos = array('nombre','contacto');
		$data= capitalizar($data,$campos);
		echo json_encode($data);
	}
	public function cliente(){
		$this->load->model('Clientes_model');
		$cliente = $this->Clientes_model->get_cliente(1);
		echo json_encode($cliente);
	}
}