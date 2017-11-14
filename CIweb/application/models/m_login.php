<?php
class m_login extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function proseslogin(){
        $uname = ['user'];
        $_SESSION['user']=$uname;
        $pass = ['password'];
        $this->db->select('*');
        $this->db->from ('users');
        $this->db->where ('username', $_SESSION['user']);
        $query = $this->db->get();
        
        
        if(strcmp($_SESSION['user'], $query['username'])==0){
            if(strcmp ($query['password'],$pass)==)
            
        }
	}
	
}