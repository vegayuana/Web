<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class ADV extends CI_Controller{
	
         public function __construct() {
            parent::__construct();

            // Load form helper library
            $this->load->helper('form');

            // Load form validation library
            $this->load->library('form_validation');

            // Load session library
            $this->load->library('session');

            // Load database
            $this->load->model('m_login');
        }
        
		public function index(){
			$this->load->view('v_home');
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
			$id_barang=$this->uri->segment('3');
            $this->load->model('m_merchform');
			$data['response'] = $this->m_merchform->get($id_barang);
			$this->load->view('v_merchform', $data);
            
		}
        
        
        public function tickettour(){
			$this->load->model('m_ticket');
			$data['response'] = $this->m_ticket->get_ticket();
			$this->load->view('v_tickettour', $data);
		}
        
        
        // Check for user login process
 
        public function login() {
            $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                if(isset($this->session->userdata['logged_in']))
                    $this->load->view('v_home');
                else
                    $this->load->view('v_login');
            } 
            else {
                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password')
                );
                $result = $this->m_login->login($data);
                if ($result == TRUE) {
                    $username = $this->input->post('username');
                    $result = $this->m_login->read_user_information($username);
                    if ($result != false) {
                        $session_data = array(
                            'username' => $result[0]->username
                        );
                  // Add user data in session
                        $this->session->set_userdata('logged_in', $session_data);
                        $this->load->view('v_home');
                    }
                } 
                else {
                    $data = array('error_message' => 'Invalid Username or Password');
                    $this->load->view('v_login', $data);
                }
            }
        }
  
  // Logout
  public function logout() { 
   // Removing session data
   $sess_array = array('username' => '');
   $this->session->unset_userdata('logged_in', $sess_array);
   $data['message_display'] = 'Successfully Logout';
   $this->load->view('v_home', $data);
  }
		
	}
?>