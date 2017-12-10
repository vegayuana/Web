<?php
class m_news extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function get(){
		$query = $this->db->get('news');
		return $query->result_array();
	}
}