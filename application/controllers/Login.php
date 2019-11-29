<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->model('Login_model', 'lm');
    }

    public function index()
    {
        $this->load->view('Login_view');
    }

    public function login()
    {
        if ($this->lm->cek_costumer()) {
            $data_session = array(
                'username'  => $data_login->username,
                'login_status' => TRUE,
                'level'	    => $data_login->id_level
            );
            $this->session->set_userdata($data_session);
        } else if($this->lm->cek_worker()) {
            $data_session = array(
                'username'  => $data_login->username,
                'login_status' => TRUE,
                'level'	    => $data_login->id_level
            );
            $this->session->set_userdata($data_session);
        } else {

        }
    }

}

/* End of file Login.php */
