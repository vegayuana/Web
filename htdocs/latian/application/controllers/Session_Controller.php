<?php
    defined('BASEPATH') OR exit ('No direct script access allowed');
    class Session_Controller extends CI_Controller{
        public function index(){
            $this->load->library('session');
            
            $this->session->set_userdata('name','virat');
            
            $this->load->view('session_view');
        }
        
        public function unset_session_data(){
            $this->load->library('session');
            
            $this->session->unset_userdata('name');
            $this->load->view('session_view');
        }
        
        public function uset_session_data(){
            $this->load->libary('session');
            
            $this->session->unset_userdata('name');
            
            $this->load->view('session_view');
        }
    }
?>
