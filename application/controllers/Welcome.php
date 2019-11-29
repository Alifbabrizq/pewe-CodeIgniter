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
		$data['data'] = $this->db->select("*")
		->from('project')
		->join('costumer', 'costumer.id_costumer = project.id_costumer')
		->where('project.id_costumer', $_SESSION['id_costumer'])
		->get()
		->result();
		$this->load->view('dashboard', $data);
	}
}
