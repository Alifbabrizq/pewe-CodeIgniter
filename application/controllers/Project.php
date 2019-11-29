<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

    public function index()
    {
        
    }

    
    //ADD DATA
    public function store()
    {
        $data = [
            'id_costumer' => $this->input->post('id_costumer'),
            'nama_project' => $this->input->post('nama_project'),
            'deskripsi' => $this->input->post('deskripsi'),
            'batas_pengerjaan' => $this->input->post('batas_pengerjaan'),
            'budget' => $this->input->post('budget'),
            'status' => $this->input->post('status'),
        ];

        
        $this->db->insert('project', $data);
    }

}

/* End of file Project.php */
