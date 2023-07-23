<?php 


class college_model extends CI_Model {

    public function getAllColleges() 
    {
        $college = $this->db->get(`college`)->result();
        return $college;
    }

    public function storeCollege($data){
        $this->db->insert('college',$data);
    }

    public function getCollege($id){
        return $this->db->where('id',$id)->get('college')->row();
    }

    public function updatecollege($id,$data)  {
        $this->db->where('id',$id)->update('college',$data);
    }
    public function deleteProduct($id) {
        $this->d->where('id',$id)->delete('college');
    }
}




?>