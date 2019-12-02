<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function cek_worker(){
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$query = $this->db->where('username', $u)
						  ->where('password', $p)
                          ->get('worker');
        return $query;
    }
    


    public function cek_costumer(){
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$query = $this->db->where('username', $u)
						  ->where('password', $p)
						  ->get('costumer');
		return $query;
	}

    public function cek_admin(){
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$query = $this->db->where('username', $u)
						  ->where('password', $p)
						  ->get('admin');
		return $query;
	}

	

	public function create_customer()
	{
		$data = array(
			'nama_costumer'		=> $this->input->post('nama_costumer'),
			'alamat_costumer'	=> $this->input->post('alamat_costumer'),
			'no_tlp'			=> $this->input->post('no_tlp'),
			'email'				=> $this->input->post('email'),
			'username'			=> $this->input->post('username'),
			'password'			=> $this->input->post('password'),
			'no_rek'			=> $this->input->post('no_rek')
		);
		$this->db->insert('costumer', $data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}


	public function create_worker($portofolio)
	{
		$data = array(
			'nama_worker'		=> $this->input->post('nama_worker'),
			'alamat_worker'		=> $this->input->post('alamat_worker'),
			'no_tlp'			=> $this->input->post('no_tlp'),
			'email'				=> $this->input->post('email'),
			'username'			=> $this->input->post('username'),
			'password'			=> $this->input->post('password'),
			'no_rek'			=> $this->input->post('no_rek'),
			'portofolio'		=> $portofolio['file_name']
		);
		$this->db->insert('worker', $data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

}
