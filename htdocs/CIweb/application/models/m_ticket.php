<?php
class m_ticket extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function get_ticket(){
        $this->db->select('*');
        $this->db->from ('ticket');
        $this->db->group_by('place','asc');        
		$query = $this->db->get();
		return $query->result_array();
	}
	
}