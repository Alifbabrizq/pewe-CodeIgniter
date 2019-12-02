<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('All_model','am');
        if (!isset($_SESSION['login_status'])) {
			
			redirect('Login');
			
		}
    }

    
    public function index()
    {
		$data['content_view'] = 'customer/dashboard_customer.php';
        $this->load->view('theme/sidebar.php',$data);
    }

    public function seeproject()
    {
        $data['project'] = $this->am->get_project();
        $data['content_view']='worker/see_project.php';
		$this->load->view('theme/sidebar.php', $data);

    }


    public function myproject()
	{
        $data['project'] = $this->db->select("*")
                        ->from('project')
		                ->join('costumer', 'costumer.id_costumer = project.id_costumer')
                        ->where('project.id_costumer', $_SESSION['id_costumer'])
                        ->get()
                        ->result();
        $data['content_view']='customer/myproject_customer.php';
		$this->load->view('theme/sidebar.php', $data);
	}

    
    //ADD DATA
    public function store()
    {
        $data['content_view'] = 'customer/myproject_customer.php';
        $data['footer'] = 'theme/footer.php';
        $data['sidebar'] = 'theme/sidebar.php';
        $data = [
            // 'id_costumer' => $this->input->post('id_costumer'),
            'nama_project' => $this->input->post('nama_project'),
            'deskripsi' => $this->input->post('deskripsi'),
            'batas_pengerjaan' => $this->input->post('batas_pengerjaan'),
            'budget' => $this->input->post('budget'),
            // 'status' => $this->input->post('status',1)
        ];
        $this->db->insert('project', $data);
        $this->load->view('theme/sidebar.php',$data);
    }

}

/* End of file Project.php */
