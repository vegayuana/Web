<?php
class m_merchform extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function get($id_barang){
		//$query = $this->db->get('merch');
		$this->db->where('id_barang', $id_barang);
        return $this->db->get('merch');
	}
}