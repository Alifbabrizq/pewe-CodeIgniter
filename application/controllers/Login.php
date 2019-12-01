<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->model('Login_model', 'lm');
    }

    public function index()
    {
        $this->load->view('all/Login_view.php');
    }

    public function login()
    {
        if ($this->lm->cek_costumer()->num_rows() > 0) {
            $data_login = $this->lm->cek_costumer()->result();
            $data_session = array(
                'id_costumer' => $data_login[0]->id_costumer, 
                'username'  => $data_login[0]->username,
                'login_status' => TRUE,
                'level'	    => $data_login[0]->id_level
            );
            $this->session->set_userdata($data_session);
            
            redirect('welcome');
        } 
        
        
        else if($this->lm->cek_worker()->num_rows() > 0) {
            $data_login = $this->lm->cek_worker()->result();
            $data_session = array(
                'username'  => $data_login[0]->username,
                'login_status' => TRUE,
                'level'	    => $data_login[0]->id_level
            );
            $this->session->set_userdata($data_session);

            redirect('welcome');
        } else {
            $data_login = $this->lm->cek_admin()->result();
            $data_session = array(
                'username'  => $data_login[0]->username,
                'login_status' => TRUE,
                'level'	    => $data_login[0]->id_level
            );
            $this->session->set_userdata($data_session);

            redirect('welcome');
        }
    }

}

/* End of file Login.php */
