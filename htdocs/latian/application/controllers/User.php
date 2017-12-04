<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class User extends CI_Controller{

    public function index(){
        //get user input
        $id = $this->input->get('id');
        
        $this->load->model('m_user');
        $data['response'] = $this->m_user->get($id);
        $this->load->view('v_html', $data);
    }
}
?>