<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class All_model extends CI_Model {
                        
    public function get_project(){
        return $this->db->join('costumer','costumer.id_costumer = project.id_costumer')
						->get('project')
						->result();    
    }                       
                        
}
                        
/* End of file All_model.php */
    
                        