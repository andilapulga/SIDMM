<?php
class M_tambahdesa extends CI_Model{

    function inputdata($data){
        $this->db->insert('desa',$data);
        return $this->db->affected_rows();
    }
}