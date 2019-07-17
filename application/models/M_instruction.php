<?php
class M_instruction extends CI_Model{

    function inputdata($data){
        $this->db->insert('instruksi',$data);
        return $this->db->affected_rows();
     }
    
}

