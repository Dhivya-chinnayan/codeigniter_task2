<?php 


class college_model extends CI_Model {

    public function getAllColleges() 
    {
        $college = $this->db->get(`college`)->result();
        return $college;
    }


}




?>