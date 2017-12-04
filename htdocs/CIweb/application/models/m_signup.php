<?php
class m_signup extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function insert_to_users(){
        $uname = $_POST['user'];
        $pass = $_POST['password'];
        $email=$_POST['email'];        
		$this->db->query("INSERT INTO users (username, email, password)values ('$uname','$email', '$pass')");
	}
	
}