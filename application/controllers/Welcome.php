<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION['login_status'])) {
			
			redirect('Login');
			
		}
	}
	

	public function index()
	{
		$data['content_view'] = 'all/Landing_page.php';
        $this->load->view('theme/template.php',$data);
		
	}
	public function create_account()
	{
		$this->load->view('all/Create_account.php');
	}

	public function register_customer()
	{
		$this->load->view('customer/register_customer.php');
	}

	public function register_worker()
	{
		$this->load->view('worker/register_worker.php');
	}



	public function my_project()
	{
		$data['data'] = $this->db->select("*")
		->from('project')
		->join('costumer', 'costumer.id_costumer = project.id_costumer')
		->where('project.id_costumer', $_SESSION['id_costumer'])
		->get()
		->result();
		$this->load->view('dashboard', $data);
	}
}
