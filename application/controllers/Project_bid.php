<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Project_bid extends CI_Controller {

    public function index()
    {
        
        if ($_SESSION['level'] == 2) {
            $data['content_view']='worker/mycustomer.php';
            $data['project'] = $this->db->select("*")->from('project_bid')
                        ->join('worker', 'project_bid.id_worker = worker.id_worker')
                        ->join('project', 'project_bid.id_project = project.id_project')
                        ->join('costumer', 'project.id_costumer = costumer.id_costumer')
                        ->where('project_bid.status', 1)
                        ->get()->result();
        } else if($_SESSION['level'] == 3) {
            $data['content_view']='customer/daftar_bidding.php';
            $data['project'] = $this->db->select("*")->from('project_bid')
            ->join('worker', 'project_bid.id_worker = worker.id_worker')
            ->join('project', 'project_bid.id_project = project.id_project')
            ->join('costumer', 'project.id_costumer = costumer.id_costumer')
            ->get()->result();
        }
        
        $this->load->view('theme/sidebar.php', $data);
        

    }

    public function store($id)
    {
        $data['content_view']='worker/prosesbid.php';
        $data['id'] = $id;
        if (isset($_POST['submit'])) {
            $data = [
                'id_project' => $id,
                'id_worker' => $_SESSION['id_worker'],
                'harga' => $this->input->post('harga'),
            ];
    
            $this->db->insert('project_bid', $data);
        }
        $this->load->view('theme/sidebar.php', $data);

    }

    public function konfirmasi($id)
    {
        $this->db->where('id_project', $id);
        $this->db->update('project_bid', [
            'status' => 1
        ]);
        
    }


}

/* End of file Project_bid.php */
