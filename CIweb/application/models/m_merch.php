<?php
class m_merch extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function get(){
		$query = $this->db->get('merch');
		return $query->result_array();
	}
}