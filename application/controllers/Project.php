<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

    public function index()
    {
        // $data['header'] = 'theme/header.php';
		$data['content_view'] = 'customer/dashboard_customer.php';
		// $data['sidebar'] = 'theme/sidebar.php';
        $this->load->view('theme/sidebar.php',$data);
    }

    
    //ADD DATA
    public function store()
    {
        // $data['header'] = 'theme/header.php';
        $data['content_view'] = 'customer/myproject_customer.php';
        // $data['footer'] = 'theme/footer.php';
        // $data['sidebar'] = 'theme/sidebar.php';
        // $data = [
        //     'id_costumer' => $this->input->post('id_costumer'),
        //     'nama_project' => $this->input->post('nama_project'),
        //     'deskripsi' => $this->input->post('deskripsi'),
        //     'batas_pengerjaan' => $this->input->post('batas_pengerjaan'),
        //     'budget' => $this->input->post('budget'),
        //     'status' => $this->input->post('status'),
        // ];
        // $this->db->insert('project', $data);
        $this->load->view('theme/sidebar.php',$data);
    }

}

/* End of file Project.php */
