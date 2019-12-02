<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
        $this->load->model('Login_model', 'lm');
        // if (!isset($_SESSION['login_status'])) {
			
		// 	redirect('Login');
			
		// }
    }

    public function index()
    {
        $this->load->view('all/Login_view.php');
    }


    public function register_c()
    {
        $this->load->view('customer/register_customer.php');
    }
    public function register_worker()
    {
        $this->load->view('worker/register_worker.php');
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
            
            redirect('project');
        } 
        
        
        else if($this->lm->cek_worker()->num_rows() > 0) {
            $data_login = $this->lm->cek_worker()->result();
            $data_session = array(
                'username'  => $data_login[0]->username,
                'login_status' => TRUE,
                'level'	    => $data_login[0]->id_level,
                'id_worker'	    => $data_login[0]->id_worker,
            );
            $this->session->set_userdata($data_session);

            redirect('project');
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

	public function create_customer()
	{

        $this->form_validation->set_rules('nama_costumer', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat_costumer', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('no_tlp', 'Phone', 'trim|required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('no_rek', 'No rekening', 'trim|required|numeric');

        if ($this->form_validation->run() == TRUE) {
            if($this->lm->create_customer() == TRUE)
            {
                $this->session->set_flashdata('notif', 'Ubah Produk berhasil');
                redirect('Login/index');
            } else {
                $this->session->set_flashdata('notif', 'Ubah Produk gagal');
                redirect('Login/register_c');
            }
        } else {
            $this->session->set_flashdata('notif', validation_errors());
            redirect('Login/register_c');
        }

    }
    
    public function create_worker()
    {
        $this->form_validation->set_rules('nama_worker', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat_worker', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('no_tlp', 'Phone', 'trim|required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('no_rek', 'No rekening', 'trim|required|numeric');

        if ($this->form_validation->run() == TRUE) {
            //upload file
            $config['upload_path'] = './assets/portofolio/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = '0';
            $this->load->library('upload', $config);
            if($this->upload->do_upload('portofolio')){
                if($this->lm->create_worker($this->upload->data()) == TRUE)
                {
                    $this->session->set_flashdata('notif', 'Tambah Produk berhasil');
                    redirect('Login/index');
                } else {
                    $this->session->set_flashdata('notif', 'Tambah Produk gagal');
                    redirect('Login/register_worker');
                }
            } else {
                $this->session->set_flashdata('notif', 'Tambah Produk gagal upload');
                redirect('Login/register_worker');
            }
        }
    }

    public function logout(){
		$this->session->sess_destroy();
		redirect('welcome');
	}

}

/* End of file Login.php */
