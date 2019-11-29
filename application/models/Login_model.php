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
		// if($this->db->affected_rows() > 0){

		// 	$data_login = $query->row();

		// 	$data_session = array(
		// 							'username'  => $data_login->username,
		// 							'login_status' => TRUE,
		// 							'level'	    => $data_login->id_level
		// 						);
		// 	$this->session->set_userdata($data_session);

		// 	return TRUE;
		// } else {
		// 	return FALSE;
		// }
    }
    


    public function cek_costumer(){
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$query = $this->db->where('username', $u)
						  ->where('password', $p)
						  ->get('costumer');
		return $query;
	}



}
