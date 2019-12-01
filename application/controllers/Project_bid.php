<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Project_bid extends CI_Controller {

    public function index()
    {
        
        $data['content_view']='customer/daftar_bidding.php';
        $this->load->view('theme/sidebar.php', $data);
        

    }

    public function store()
    {
        // $data = [
        //     'id_project' => $this->input->post('id_project'),
        //     'id_worker' => $this->input->post('id_worker'),
        //     'harga' => $this->input->post('harga'),
        // ];

        // this->db->insert('project_bid', $data);
    }

}

/* End of file Project_bid.php */
