<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class ADV extends CI_Controller{
		
		public function index(){
			$this->load->view('v_home');
		}
		public function login(){
			$this->load->view('v_login');
		}
        public function proseslogin(){
            
        }
        public function signup(){
			$this->load->view('v_signup');
		}
        public function insert_to_users(){
            $this->load->model('m_signup');
            $this->m_signup->insert_to_users();
            $this->load->view('v_home');
        }
        public function news(){
			$this->load->view('v_news');
		}
		public function merch(){
			$this->load->model('m_merch');
			$data['response'] = $this->m_merch->get();
			$this->load->view('v_merch', $data);
		}
        public function merchform(){
			$this->load->model('m_merchform');
			$data['response'] = $this->m_merchform->get();
			$this->load->view('v_merchform', $data);
		}
        
        
        public function tickettour(){
			$this->load->model('m_ticket');
			$data['response'] = $this->m_ticket->get_ticket();
			$this->load->view('v_tickettour', $data);
		}
		
	}
?>