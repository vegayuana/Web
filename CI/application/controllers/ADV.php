<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class ADV extends CI_Controller{
		
		public function index(){
			$this->load->model('m_merch');
			$data['response'] = $this->m_merch->get();
			$this->load->view('v_merch', $data);
		}
		
		public function merch(){
			$this->load->model('m_merch');
			$data['response'] = $this->m_merch->get();
			$this->load->view('v_merch', $data);
		}
		
		
		public function about(){
			$this->load->view('v_about');
		}
		
		public function event(){
			$this->load->model('m_field');
			$data['response'] = $this->m_field->get();
			$this->load->view('v_event', $data);
		}
		
		public function category(){
			$this->load->model('m_category');
			$data['response'] = $this->m_category->get();
			$this->load->view('v_category', $data);
		}
	}
?>