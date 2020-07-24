<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_model{
	public $id;
	public $nombre;
	public $correo;
	public function get_cliente($id){
		$this->id=1;
		$this->nombre='Aruma Yatzil';
		$this->correo='aruma.yatzil27@gmail.com';
		return $this;
	}
	public function insert(){
		return "insertado";

	}
	public function update(){
		return "actuaizado";
	}
	public function delete(){
		return "borrado";
	}
}